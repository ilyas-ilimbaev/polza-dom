<?php

if (!isset($_POST['login']) || !isset($_POST['password'])) {
  echo json_encode(["error" => true, "descriptions" => "Переданы не все аргументы"]);
  exit;
}

$login = $_POST['login'];
$password = $_POST['password'];
if (isset($_POST['check'])) {
  $check = $_POST['check'];
} else {
  $check = 0;
}


include '../config.php';
include '../class/db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

$result = $main_base->query("SELECT `id`, `password`, `hash`, `avatar`, `name` FROM `users` WHERE `email` = '$login' OR `tel` = '$login'");

if (empty($result)) {
  echo json_encode(["error" => false, "isset_user" => false]);
  exit;
}

if (!password_verify($password, $result[0]['password'])) {
  echo json_encode(["error" => false, "isset_user" => true, "wrong_password" => true, "avatar" => $result[0]['avatar'], "name" => $result[0]['name']]);
  exit;
}

if ($check) {
  echo json_encode(["error" => false, "isset_user" => true, "wrong_password" => false, "avatar" => $result[0]['avatar'], "name" => $result[0]['name']]);
  exit;
}

if (!empty($result[0]["hash"])) {
  $hash = $result[0]["hash"] . ', ';
} else {
  $hash = "";
}

date_default_timezone_set('UTC');
$new_hash = md5($login . random_int(10000, 99999) . date(DATE_RFC822));
$hash .= $new_hash;

$id = $result[0]["id"];

if ($main_base->query("UPDATE `users` SET `hash`='$hash' WHERE `email` = '$login' OR `tel` = '$login'", true)) {
  echo json_encode(["error" => false, "isset_user" => true, "wrong_password" => false, "hash" => $new_hash, "id" => $id, "avatar" => $result[0]['avatar'], "name" => $result[0]['name']]);
  exit;
} else {
  echo json_encode(["error" => true, "descriptions" => "Ошибка в запросе 1"]);
  exit;
}

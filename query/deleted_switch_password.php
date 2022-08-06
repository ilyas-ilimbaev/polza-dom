<?php

if (!isset($_POST['email']) || !isset($_POST['hash_recovery']) || !isset($_POST['pas'])) {
  echo json_encode(['error' => true, 'descr' => "Не найден запрос"]);
  exit;
}

$email = $_POST['email'];
$hash_recovery = $_POST['hash_recovery'];
$password = $_POST['pas'];
$password = password_hash($password, PASSWORD_DEFAULT);

include '../config.php';
include '../class/Db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

if ($result = $main_base->query("SELECT `id`, `hash` FROM `users` WHERE `email` = '$email' AND `hash_recovery` = '$hash_recovery'")) {
  if (empty($result)) {
    echo json_encode(['error' => true, 'descr' => "Не найден аккаунт"]);
    exit;
  }
  $id = $result[0]['id'];
  $hash_all = $result[0]['hash'];

  if (!empty($hash_all)) {
    $hash = $hash_all . ', ';
  } else {
    $hash = "";
  }

  date_default_timezone_set('UTC');
  $new_hash = md5($email . random_int(10000, 99999) . date(DATE_RFC822));
  $hash .= $new_hash;

  if ($main_base->query("UPDATE `users` SET `password` = '$password', `hash`='$hash', `hash_recovery`=NULL WHERE `id` = '$id'", true)) {
    echo json_encode(['error' => false, "id" => $id, "hash" => $new_hash, "login" => $email]);
    exit;
  } else {
    echo json_encode(['error' => true, 'descr' => "Ошибка запроса 1"]);
    exit;
  }
} else {
  if (empty($result)) {
    echo json_encode(['error' => true, 'descr' => "Не найден аккаунт"]);
    exit;
  }
  echo json_encode(['error' => true, 'descr' => "Ошибка запроса 2"]);
  exit;
}

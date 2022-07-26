<?php

if (!isset($_POST['login']) || !isset($_POST['password']) || !isset($_POST['name']) || !isset($_POST['date']) || !isset($_POST['status'])) {
  echo json_encode(["error" => true, "descriptions" => "Переданы не все аргументы"]);
  exit;
}

$login = $_POST['login'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$name = $_POST['name'];
$date = $_POST['date'];
$date = explode('-', $date);
$date = $date[2] . '/' . $date[1] . '/' . $date[0];
$status = $_POST['status'];

date_default_timezone_set('UTC');
$hash = md5($login . random_int(10000, 99999) . date(DATE_RFC822));

include '../config.php';
include '../class/db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

if ($main_base->query("INSERT INTO `users`(`email`, `password`, `name`, `birth_date`, `status`, `hash`,`avatar`) VALUES ('$login','$password','$name','$date','$status','$hash','/img/default-avatar.png')", true)) {
  if ($result = $main_base->query("SELECT `id` FROM `users` WHERE `email` = '$login'")) {
    echo json_encode(["error" => false, "hash" => $hash, "id" => $result[0]['id']]);
  } else {
    echo json_encode(["error" => true, "descriptions" => "Ошибка 2 запроса"]);
    exit;
  }
} else {
  echo json_encode(["error" => true, "descriptions" => "Ошибка 1 запроса"]);
  exit;
}

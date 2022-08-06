<?php

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['tel'])) {
  echo json_encode(["success" => false, "descriptions" => "Not all arguments passed"]);
  exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$tel = $_POST['tel'];

$hash = md5($email . random_int(1000, 99999));

include '../config.php';
include '../class/Db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

if ($main_base->query("INSERT INTO `users`(`name`,`email`,`tel`,`password`,`all_hash`) VALUES ('$name','$email','$tel','$password','$hash')", true)) {
  if ($result = $main_base->query("SELECT `id` FROM `users` WHERE `email` = '$email'")) {
    echo json_encode(["success" => true, "hash" => $hash, "id" => $result[0]['id']]);
  } else {
    echo json_encode(["success" => false, "descriptions" => "Error 2 requests"]);
    exit;
  }
} else {
  echo json_encode(["success" => false, "descriptions" => "Error 1 requests"]);
  exit;
}

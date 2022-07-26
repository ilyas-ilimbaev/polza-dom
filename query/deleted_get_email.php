<?php

if (!isset($_POST['login'])) {
  echo json_encode(['error' => true, 'descr' => "Не найден запрос"]);
  exit;
}

$login = $_POST['login'];

include '../config.php';
include '../class/db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

if ($result = $main_base->query("SELECT `email` FROM `users` WHERE `email` = '$login' OR `tel` = '$login'")) {
  date_default_timezone_set('UTC');
  $hash_recovery = md5($result[0]['email'] . date(DATE_RFC822)) . md5(random_int(10000, 99999));
  if ($main_base->query("UPDATE `users` SET `hash_recovery`='$hash_recovery' WHERE `email` = '$login' OR `tel` = '$login'", true)) {
    echo json_encode(['error' => false, "email" => $result[0]['email'], "hash" => $hash_recovery]);
    exit;
  } else {
    echo json_encode(['error' => true, 'descr' => "Не удалось обновить hash_recovery $hash_recovery"]);
    exit;
  }
} else {
  echo json_encode(['error' => true, 'descr' => "Не удалось выполнить запрос"]);
  exit;
}

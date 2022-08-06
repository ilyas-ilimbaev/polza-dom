<?php

include '../config.php';
include '../class/db.php';
include '../class/user.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

$user = new User($main_base);

if ($user->init) {
  $hash = $user->get_hash();
  $all_hash = explode(", ", $user->get_all_hash());
  $id = $user->get_id();
  $new_hash = "";
  $sub_array = [];

  foreach ($all_hash as $key => $item) {
    if ($item == $hash) continue;
    array_push($sub_array, $item);
  }

  $count = count($sub_array) - 1;

  foreach ($sub_array as $key => $item) {
    $new_hash .= $item;
    if ($key != $count) {
      $new_hash .= ", ";
    }
  }

  if (!$main_base->query("UPDATE `users` SET `hash`='$new_hash' WHERE `id` = '$id'", true)) {
    echo json_encode(["error" => true]);
    exit;
  }

  unset($_COOKIE['id']);
  setcookie('id', null, -1, '/');

  unset($_COOKIE['login']);
  setcookie('login', null, -1, '/');

  unset($_COOKIE['hash']);
  setcookie('hash', null, -1, '/');

  echo json_encode(["error" => false]);
}

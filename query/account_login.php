<?php

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo json_encode(["success" => false, "description" => "Not all arguments passed", "userIsset" => false]);
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

include '../config.php';
include '../class/Db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

if ($result = $main_base->query("SELECT `id`, `all_hash`, `password` FROM `users` WHERE `email`='$email'")){
    $id = $result[0]["id"];
    $passwords = $result[0]["password"];

    if (!password_verify($password, $passwords)){
        echo json_encode(["success" => false, "description" => "Неверный пароль", "userIsset" => false]);
        exit;
    }

    if (!empty($result[0]["all_hash"])) {
        $all_hash = $result[0]["all_hash"] . ', ';
    } else {
        $all_hash = "";
    }

    $new_hash = md5($email . random_int(1000, 99999));
    $all_hash .= $new_hash;

    if ($main_base->query("UPDATE `users` SET `all_hash`='$all_hash' WHERE `id`='$id'", true)){
        echo json_encode(["success" => true, "id" => $id, "hash" => $new_hash, "userIsset" => true]);
        exit;
    } else {
        echo json_encode(["success" => false, "description" => "Error 2 requests", "userIsset" => true]);
        exit;
    }

} else {
    echo json_encode(["success" => false, "description" => "Error 1 requests", "userIsset" => false]);
    exit;
}
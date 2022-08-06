<?php

if (!isset($_POST['email'])){
    echo json_encode(["success" => false, "description" => "Not all arguments passed", "userIsset" => true]);
    exit;
}

$email = $_POST['email'];

include '../config.php';
include '../class/Db.php';

$main_base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS, CHARSET, BASE_HOST);

if ($result = $main_base->query("SELECT `id` FROM `users` WHERE `email`='$email'")){
    if (empty($result)){
        echo json_encode(["success" => true, "userIsset" => false]);
    } else {
        echo json_encode(["success" => true, "userIsset" => true]);
    }
} else {
    echo json_encode(["success" => true, "userIsset" => false]);
    exit;
}
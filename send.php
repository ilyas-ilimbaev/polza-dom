<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

if (isset($_POST["feedbackform"])) {
  $mark = $_POST['mark'];
  $report = $_POST['report'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = "Новый отзыв";
  $body = "
    <h2>Новый отзыв</h2>
    <b>Имя: </b> $name <br />
    <b>Почта: </b> $email <br />
    <b>Оценка: </b> $mark <br />
    <b>Текст: </b> $report <br />";
} else {
  $title = "Новый отзыв (ошибка)";
  $body = "Ошибка " . var_dump($_POST);
}

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;
  $mail->SMTPDebug = 0;
  // $mail->Debugoutput = function ($str, $level) {
  //   echo "debug level $level; message: $str";
  // };

  $mail->Host       = 'smtp.mail.ru';
  $mail->Username   = 'q1zin@mail.ru'; // Логин на почте
  $mail->Password   = 'micgZ9mpm9CiWmTnjGrS'; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;
  $mail->setFrom('q1zin@mail.ru', 'Строительство домов под ключ'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mail->addAddress('q1zin@mail.ru');

  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  if ($mail->send()) {
    $result = [
      "success" => true
    ];
    echo json_encode($result);
  } else {
    $result = [
      "success" => false,
      "textError" => "Ошибка при отправке {$mail->ErrorInfo}"
    ];
    echo json_encode($result);
  }
} catch (Exception $e) {
  $result = [
    "success" => false,
    "textError" => "Неизвестная ошибка $e . {$mail->ErrorInfo}"
  ];
  echo json_encode($result);
}

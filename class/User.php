<?php

class User
{
  private $id;
  private $name;
  private $email;
  private $tel;
  private $all_hash;
  private bool $login_check;

  function __construct($obg_bd)
  {
    if (isset($_COOKIE['id']) && isset($_COOKIE['hash'])) {
      $id = $_COOKIE['id'];
      $hash = $_COOKIE['hash'];

      $result = $obg_bd->query_prepare("SELECT `email`, `name`, `tel`, `all_hash` FROM `users` WHERE `id` = ?", [$id]);
      if (!empty($result)) {
        $result = $result[0];

        $all_hash = explode(", ", $result['all_hash']);

        if (in_array($hash, $all_hash)) {
            $this->id = $id;
            $this->email = $result['email'];
            $this->name = $result['name'];
            $this->tel = $result['tel'];
            $this->all_hash = $result['all_hash'];
            $this->login_check = true;
        } else {
            $this->login_check = false;
            unset($_COOKIE['id']);
            setcookie('id', null, -1, '/');
            unset($_COOKIE['hash']);
            setcookie('hash', null, -1, '/');
        }
      } else {
        $this->login_check = false;
        unset($_COOKIE['id']);
        setcookie('id', null, -1, '/');
        unset($_COOKIE['hash']);
        setcookie('hash', null, -1, '/');
      }
    } else {
      $this->login_check = false;
      unset($_COOKIE['id']);
      setcookie('id', null, -1, '/');
      unset($_COOKIE['hash']);
      setcookie('hash', null, -1, '/');
    }
  }

}

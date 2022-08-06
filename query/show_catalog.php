<?php

if (!isset($_POST['count']) || !isset($_POST['limit'])) {
  echo json_encode([
    "success" => false, "textError" => "Не все аргументы"
  ]);
  exit;
}

include '../config.php';
include '../class/Db.php';

$base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS);

if (!isset($_POST['filters'])) {
  $count = $_POST['count'];
  $limit = $_POST['limit'] + 1;

  $result = $base->query("SELECT `name-tag`,`name-tag-ru`,`img` FROM `house_list` WHERE 1 LIMIT $count, $limit");

  echo json_encode(
    [
      "success" => true, "house_list" => $result
    ]
  );
} else {
  $count = $_POST['count'];
  $limit = $_POST['limit'] + 1;
  $filters = json_decode($_POST['filters'], true);

  $where = "";
  foreach ($filters as $key => $value) {
    if ($value == "-") continue;
    if (!stristr($key, 'max_') && !stristr($key, 'min_')) {
      $where .= add_new_where($key, $value, $where, "=");
    } else {
      if ($id = stristr($key, 'max_')) {
        $where .= add_new_where_max_min(substr($key, 4), $value, $where, "<");
      } else {
        $where .= add_new_where_max_min(substr($key, 4), $value, $where, ">");
      }
    }
  }

  $result = $base->query("SELECT `name-tag`,`name-tag-ru`,`img` FROM `house_list` WHERE $where LIMIT  $count, $limit");

  echo json_encode(
    [
      "success" => true, "house_list" => $result
    ]
  );
}

function add_new_where($id, $key, $where, $compare = "=")
{
  if ($where == "") {
    return "`$id` $compare '$key'";
  } else {
    return " AND `$id` $compare '$key'";
  }
}

function add_new_where_max_min($id, $key, $where, $compare = ">")
{
  switch ($id) {
    case "max_cost":
      $id = "cost";
      break;
    case "min_cost":
      $id = "cost";
      break;
    case "max_square":
      $id = "square";
      break;
    case "min_square":
      $id = "square";
      break;
  }
  if ($where == "") {
    return "`$id` $compare '$key'";
  } else {
    return " AND `$id` $compare '$key'";
  }
}

<?php
require_once('../db/connect_mysql.php');

$id = $_GET['id'];


$conn = connect_bd($server_name, $username, $password, $db_name);
$conn->set_charset('utf8mb4');

$customer = $conn->query("SELECT * FROM $table_name WHERE id = $id");
$res = $customer->fetch_assoc();
$data = 'err';
$user = [
    'title' => $res["title"],
    'message' => $res["message"],
    'name' => $res["name"],
    'email' => $res["email"],
    'password' => $res["password"],
    'gender' => $res["gender"],
    'country' => $res["country"],
    'skills' => $res["skills"],
    'date' => date('d.m.Y H:i:s', strtotime($res["date"])),
    'file_path' => $res["file_path"],
    'file_name' => $res["file_name"]
];

// $conn->close();

// exit(json_encode($user, JSON_UNESCAPED_UNICODE));
exit(json_encode($user));

?>
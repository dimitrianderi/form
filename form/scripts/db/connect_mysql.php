<?php

require_once('config.php');

function connect_bd($server_name, $username, $password, $db_name = "")
{
    $conn = mysqli_connect($server_name, $username, $password, $db_name);
    $conn->set_charset('utf8mb4');

    if (!$conn) {
        echo "Ошибка соединения" . mysqli_connect_error();
    }
    return $conn;
}

$conn = connect_bd($server_name, $username, $password);

?>
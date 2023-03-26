<?php

require_once('connect_mysql.php');

$sql = "CREATE DATABASE IF NOT EXISTS $db_name CHARACTER SET `utf8mb4` COLLATE `utf8mb4_unicode_ci`";

$stmt = mysqli_prepare($conn, $sql);

if (!mysqli_stmt_execute($stmt)) {
    echo "Ошибка создания БД: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);

$sql = "USE $db_name";
mysqli_query($conn, $sql);

?>
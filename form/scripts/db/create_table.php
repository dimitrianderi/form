<?php
session_start();

require_once('config.php');
require_once('create_db.php');
require_once('select_table.php');


$sql = "CREATE TABLE IF NOT EXISTS $table_name ( 
    `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(50) NOT NULL, 
    `email` VARCHAR(50) NOT NULL, 
    `password` VARCHAR(70) NOT NULL, 
    `gender` ENUM('Мужчина','Женщина') NOT NULL DEFAULT 'Мужчина', 
    `skills` VARCHAR(50) DEFAULT NULL, 
    `country` VARCHAR(30) DEFAULT NULL, 
    `file_name` VARCHAR(255) DEFAULT NULL, 
    `file_path` VARCHAR(70) DEFAULT NULL, 
    `title` VARCHAR(30) NOT NULL, 
    `message` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL
)";

$stmt = mysqli_prepare($conn, $sql);

if (!mysqli_stmt_execute($stmt)) {
    echo "Ошибка создания таблицы: " . mysqli_error($conn);
} else {
    $users = get_users($conn, $table_name, $limit, $current_page);
};

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
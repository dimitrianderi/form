<?php
session_start();

require_once('../db/config.php');
require_once('../db/connect_mysql.php');
require_once('../db/create_db.php');
require_once('../db/create_table.php');

$btn = $_GET['btn'];

$conn = connect_bd($server_name, $username, $password, $db_name);

switch (true) {
    case ($btn === 'first'):
        $current_page = 0;
        break;
    case ($btn === 'prev'):
        $current_page = ($current_page === 0) ? 0 : $current_page - 1;
        break;
    case ($btn === 'next'):
        $current_page = ($current_page === $max_pages - 1) ? $max_pages - 1 : $current_page + 1;
        break;
    case ($btn === 'last'):
        $current_page = $max_pages-1;
        break;
    default:
        $current_page;
}

$_SESSION['page'] = $current_page;

$conn->close();

header("Location: /index.php?mode=table");
exit();
?>
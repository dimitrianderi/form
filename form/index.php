<?php
session_start();

require_once('./scripts/db/create_table.php');
require_once('./scripts/handlers/skills_handler.php');

$data = json_decode(file_get_contents('./assets/data.json'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $conn = connect_bd($server_name, $username, $password, $db_name);

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $password = trim($_REQUEST['password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $gender = $data->gender->{($_REQUEST['gender'])};
    $skills = $_REQUEST['skills'] ? implode(', ', skills_handler($data)) : null;
    $country = $data->country->{$_REQUEST['country']};
    $title = trim($_REQUEST['title']);
    $message = trim($_REQUEST['message']);
    $date = date("Y-m-d H:i:s");

    $file_name = $_FILES['file']['name'] ? $email . '_' . basename($_FILES['file']['name']) : '';
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_path = $file_name ? './assets/uploads/' . $file_name : "";

    move_uploaded_file($file_tmp, $file_path);

    require_once('scripts/validator.php');

    if (empty($error_messages)) {
        
        $user_if_created = $conn->query
        ("INSERT INTO $table_name (name, email, password, gender, skills, country, title, message, date, file_name, file_path)
        VALUES 
        ('$name', '$email', '$password_hash', '$gender', '$skills', '$country', '$title', '$message', '$date', '$file_name', '$file_path')");

        if (isset($user_if_created) && $user_if_created) {
            require_once('scripts/mail.php');
        }

        $_SESSION['user_if_created'] = $user_if_created;

        header("Location: /index.php?mode=table");
        exit();
    }
}

$mode = isset($_REQUEST['mode']) ? $_REQUEST['mode'] : false;

if ($mode === 'table') {
    $_SESSION['page'] = 0;
    require './pages/table.html';
} else {
    require './pages/index.html';
}

exit;
?>
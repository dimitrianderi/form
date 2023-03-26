<?php

$error_messages = array();

switch (true) {
    case (empty($name)):
        $error_messages["name"] = "Введите ваше имя";
        break;
    case (mb_strlen($name) < 3):
        $error_messages["name"] = "Имя должно быть от 3 символов";
        break;
    case (mb_strlen($name) > 15):
        $error_messages["name"] = "Имя должно быть до 15 символов";
        break;
    case (is_numeric(substr($name, 0, 1))):
        $error_messages["name"] = "Имя не должно начинаться с цифры";
        break;
}

switch (true) {
    case (mb_strlen($password) < 8):
        $error_messages["password"] = "Пароль должен быть от 8 символов";
        break;
}

switch (true) {
    case (empty($title)):
        $error_messages["title"] = "Введите заголовок";
        break;
    case (mb_strlen($title) > 30):
        $error_messages["title"] = "Слишком длинный заголовок";
        break;
}

switch (true) {
    case (empty($name)):
        $error_messages["message"] = "Введите текст";
        break;
    case (mb_strlen($message) > 150):
        $error_messages["message"] = "Слишком длинный текст";
        break;
}

?>
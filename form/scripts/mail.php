<?php

require_once('scripts/db/config.php');
$data = json_decode(file_get_contents('./assets/data.json'));

$boundary = md5(time());
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "From: $email <$email> \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "Content-Transfer-Encoding: 8bit" . "\r\n\r\n";

$to = $admin;
$title_mail = $title;

if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
    $file_path = $file_name ? '/assets/uploads/'.$file_name : "";
    $file_link = '<a href="' . $my_site . $file_path . '" download> просмотреть</a>';
}

$message_mail = "
    <em>$message</em> \r\n
    <br>
    <br>
    <small>С уважением, $name.</small> \r\n
    <br>
    " . ((empty($file_link)) ? "" : "<br><b>Прикрепленный файл: </b>$file_link.") . "
    <br>
    <hr>
    Дополнительные сведения о пользователе:
    <ul>
        <li><b>Пол: </b>$gender</li>
        " . ((empty($country)) ? "" : "<li><b>Страна: </b>$country</li>") . "
        " . ((empty($skills)) ? "" : "<li><b>Навыки: </b>$skills</li>") . "
    </ul>
";
mail($to, $title_mail, $message_mail, $headers);

?>
# Настройки проекта под Windows 10 x64

## Что понадобится:

- Open Server 5.2.2
- Apache_2.4

## Настройки Open Server

- Версия PHP: 7.2 x64
- Версия MySQL: 5.7

## Настройки почты в Open Server

- SMTP сервер: smtp.yandex.ru
- Порт: 587
- Email отправителя: dimitrianderi@yandex.ru
- Имя пользователя: dimitrianderi
- Пароль: !admin2023
- Шифрование: TLS

## Как установить

- Папку form поместить в OSPanel->domains
- В phpMyAdmin создать БД с названием feedback_form
- Импортировать туда файл feedback_form.sql
- Логин от phpMyAdmin должен быть root, пароль - пустой

## Логин и пароль от почты администратора (для проверки приходящих писем)

- Логин: dimitrianderi@yandex.ru
- Пароль: !admin2023

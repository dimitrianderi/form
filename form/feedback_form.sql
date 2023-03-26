-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2023 г., 13:20
-- Версия сервера: 5.7.25
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `feedback_form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `responce_list`
--

CREATE TABLE `responce_list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Мужчина','Женщина') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Мужчина',
  `skills` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `responce_list`
--

INSERT INTO `responce_list` (`id`, `name`, `email`, `password`, `gender`, `skills`, `country`, `file_name`, `file_path`, `title`, `message`, `date`) VALUES
(1, 'Доктор Ливси', 'dr.livsi@gmail.com', '$2y$10$Evp9.rRn8zTAPvSjraFXPeMtcJnow7HKkCik.vDRjvFnTW3bRxoHa', 'Мужчина', 'PHP, JavaScript', 'Узбекистан', 'dr.livsi@gmail.com_1.jpg', './assets/uploads/dr.livsi@gmail.com_1.jpg', 'Резюме', 'Очень хороший и весёлый человек. Характер общительный. Не женат.', '2023-03-24 21:44:19'),
(2, 'Билли Бонс', 'billi@gmail.com', '$2y$10$jyAYnBSauGqwwV9TJmHPbOkHkdg4IFMXKjvecJesJxElYIMe8lo2W', 'Мужчина', 'JavaScript, MySQL', 'Россия', 'billi@gmail.com_2.jpg', './assets/uploads/billi@gmail.com_2.jpg', 'Характеристика', 'Он же капитан Капитан. Обладатель карты сокровищ. Много пьёт и всегда простужен. Характер скверный. Не женат', '2023-03-24 21:49:31'),
(3, 'Джимми Гокинс', 'jimmy@gmail.com', '$2y$10$Zd/fAcFkt3swDHAyt4WJg.4PxZaOXxRcZKnmPyLxEQ7kRtpvlk2lO', 'Мужчина', '', '', 'jimmy@gmail.com_3.jpg', './assets/uploads/jimmy@gmail.com_3.jpg', 'Анкета', 'Очень, очень хороший мальчик. Вежлив, правдив, скромен, добр. Слушает маму, каждое утро делает зарядку. Характер мягкий.', '2023-03-24 21:51:04'),
(4, 'Сквайр Трелони', 'trello@gmail.ru', '$2y$10$mu7gryeR/bTCe/ngMDlee.0zm6/MzBDe/MSfKnujTMgTpVOMmf0UK', 'Мужчина', 'JavaScript', 'Другая', 'trello@gmail.ru_4.jpg', './assets/uploads/trello@gmail.ru_4.jpg', 'Биография', 'Туп, жаден, прожорлив, ленив, труслив, надменен. Характер отсутствует. Не женат', '2023-03-24 21:53:32'),
(5, 'Капитан Смоллет', 'cap.smollet@gmail.com', '$2y$10$PKmv7KOjb2ujWYPj7q53V.Qgnv5O1zizaaWKst9WrKGIpbnlf5sAi', 'Мужчина', 'PHP, JavaScript, MySQL', 'Узбекистан', 'cap.smollet@gmail.com_5.jpg', './assets/uploads/cap.smollet@gmail.com_5.jpg', 'Депеша', 'Старый моряк и солдат. Говорит правду в глаза, отчего и страдает, характер прескверный. Не женат.', '2023-03-24 21:55:06'),
(6, 'Слепой Пью', 'pew1684@gmail.com', '$2y$10$3ZRO6UxYNdbllLDCdSjszuMcFTLXv3iTGZ5XyUeaPAPOqO4VA5wdO', 'Мужчина', 'PHP, JavaScript', 'Другая', 'pew1684@gmail.com_6.jpg', './assets/uploads/pew1684@gmail.com_6.jpg', 'Справка', 'Старый пират, друг Флинта. Жаден, ради денег готов на всё. Характер мерзкий. Не женат.', '2023-03-24 21:57:27'),
(7, 'Бен Ганн', 'benni@gmail.com', '$2y$10$pVLt6XLx.Wv4hwPnscKWJOTMWTiiUzaMLa2Ut/4SaAcuIPN3Qir0K', 'Мужчина', 'MySQL', 'Россия', 'benni@gmail.com_7.jpg', './assets/uploads/benni@gmail.com_7.jpg', 'Форма', 'В детстве был благовоспитанным мальчиком, но начал играть в орлянку, связался с пиратами и покатился... Характер мягкий. Не женат.', '2023-03-24 21:58:42'),
(8, 'Черный пёс', 'black.dog@gmail.com', '$2y$10$5EKbAJ8LZgePBQJUzS3PZOz6/a7Sy7z2cq5yF/j2TAHuNVmrD1ZCG', 'Мужчина', 'PHP, JavaScript', 'Россия', 'black.dog@gmail.com_8.jpg', './assets/uploads/black.dog@gmail.com_8.jpg', 'Письмо', 'Друг Флинта, охотится за картой сокровищ. Характер скрытный. Не женат.', '2023-03-24 22:00:42'),
(9, 'Джон Сильвер', 'silver@gmail.com', '$2y$10$FUg1DEpzVSPhX1GPK/rUi.qdRqgQxSadvILmx3maG/LO4AW0lDF.O', 'Мужчина', 'MySQL', 'Узбекистан', 'silver@gmail.com_9.jpg', './assets/uploads/silver@gmail.com_9.jpg', 'Телеграмма', 'Он же окорок Окорок, он же Одноногий. Самый страшный пират, но удачно притворяется добрым. Характер скрытный. Не женат.', '2023-03-24 22:02:00'),
(12, 'Дмитрий', 'dimitrianderi@gmail.com', '$2y$10$9EHbTR0l.Of3CDXm7kPFnu2Mr8decMzS8cqKLM0ZbT6dAIqypl8EW', 'Мужчина', 'PHP, JavaScript, MySQL', 'Узбекистан', '', '', 'Тестовый заголовок', 'Тестовый текст', '2023-03-26 13:19:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `responce_list`
--
ALTER TABLE `responce_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `responce_list`
--
ALTER TABLE `responce_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

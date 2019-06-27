-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 27 2019 г., 08:40
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `evdonivg_sinform`
--

-- --------------------------------------------------------

--
-- Структура таблицы `inform_priority_list`
--
-- Создание: Июн 24 2019 г., 05:31
-- Последнее обновление: Июн 24 2019 г., 05:32
--

DROP TABLE IF EXISTS `inform_priority_list`;
CREATE TABLE `inform_priority_list` (
  `priority_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inform_priority_list`
--

INSERT INTO `inform_priority_list` (`priority_id`, `title`) VALUES
(1, 'Низкий'),
(2, 'Средний'),
(3, 'Высокий');

-- --------------------------------------------------------

--
-- Структура таблицы `inform_status_list`
--
-- Создание: Июн 24 2019 г., 05:35
-- Последнее обновление: Июн 24 2019 г., 05:36
--

DROP TABLE IF EXISTS `inform_status_list`;
CREATE TABLE `inform_status_list` (
  `status_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inform_status_list`
--

INSERT INTO `inform_status_list` (`status_id`, `title`) VALUES
(1, 'В работе'),
(2, 'Завершена');

-- --------------------------------------------------------

--
-- Структура таблицы `inform_tasks`
--
-- Создание: Июн 26 2019 г., 09:40
-- Последнее обновление: Июн 27 2019 г., 05:39
--

DROP TABLE IF EXISTS `inform_tasks`;
CREATE TABLE `inform_tasks` (
  `uuid` binary(16) NOT NULL,
  `title` varchar(255) NOT NULL,
  `priority` int(2) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inform_tasks`
--

INSERT INTO `inform_tasks` (`uuid`, `title`, `priority`, `tags`, `status`) VALUES
(0x395a17a60ec24143abad82ea8bd2980f, 'new task', 3, 'tags1,tags2', 2),
(0x5977f52feece4ec6b9b16601eddeb4f1, 'new task3', 3, 'tags1,tags2', 1),
(0xd5f12c23a31d417e81920c020d7bbe49, 'new task4', 1, 'tags1,tags2', 2),
(0xf702efc8ba0d469ab4507f1b88acf5de, 'new task2', 2, 'tags1,tags2', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `inform_priority_list`
--
ALTER TABLE `inform_priority_list`
  ADD PRIMARY KEY (`priority_id`);

--
-- Индексы таблицы `inform_status_list`
--
ALTER TABLE `inform_status_list`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `inform_tasks`
--
ALTER TABLE `inform_tasks`
  ADD PRIMARY KEY (`uuid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `inform_priority_list`
--
ALTER TABLE `inform_priority_list`
  MODIFY `priority_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `inform_status_list`
--
ALTER TABLE `inform_status_list`
  MODIFY `status_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

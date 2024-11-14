-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 04 2024 г., 17:52
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dressery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `portfolio` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `candidates`
--

INSERT INTO `candidates` (`id`, `fullname`, `email`, `number`, `portfolio`, `created_at`) VALUES
(1, 'какое-то имя', 'lala@yandex.ru', '123456789', 'какая-то ссылка', '2024-07-03 13:50:16');

-- --------------------------------------------------------

--
-- Структура таблицы `saved_articles`
--

CREATE TABLE `saved_articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `saved_articles`
--

INSERT INTO `saved_articles` (`id`, `user_id`, `article_id`, `title`, `author`, `published_date`) VALUES
(38, 1, 2, 'Raising Luar', 'BY BROOK BOBB', '2024-06-10');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'lala.@yandex.ru', '$2y$10$1lDaNVpOpOBo.PTx4ZrJSO/R7hUKubk52/juIfmfPBslr9.QtCyV2', '2024-07-03 12:04:51'),
(6, 'lalala@yandex.ru', '$2y$10$gtSB3ck8rE/he8z46nFrE.TZqhEHf0eT2gRc/15Zx2nyvmHz72Zwy', '2024-07-04 10:33:12'),
(7, 'lalalala@yandex.ru', '$2y$10$NqiI/FlyWg7Zfv0NYu9YOe9iuDQjB/Y500Rnvvt6/gR2Xg6o7UC7W', '2024-07-04 11:32:54');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `saved_articles`
--
ALTER TABLE `saved_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `saved_articles`
--
ALTER TABLE `saved_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `saved_articles`
--
ALTER TABLE `saved_articles`
  ADD CONSTRAINT `saved_articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

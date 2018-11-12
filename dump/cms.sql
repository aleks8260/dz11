-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2018 г., 13:56
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cms`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(4, 'PHP'),
(12, 'CMS Joomla'),
(13, 'Javascript'),
(15, 'JAVA'),
(16, 'gjghjghjghj1'),
(17, 'dsfdsfds'),
(19, '123');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `tags` text NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `comments_count` int(11) NOT NULL,
  `views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `author`, `date`, `tags`, `image`, `content`, `status`, `comments_count`, `views_count`) VALUES
(1, 2, 'Blog Post Title test', 'Start Bootstrap', '2018-11-03', 'PHP, javascript', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(2, 4, 'Blog Post Title 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', '2018-11-12', 'PHP', 'oboi_full_hd_molodoj_leopard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(3, 2, 'Blog Post Title 3', 'Start Bootstrap', '2018-11-03', 'javascript', 'oboi_full_hd_molodoj_leopard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(4, 3, 'Blog Post Title 4', 'Start Bootstrap', '2018-11-03', 'cms', 'oboi_full_hd_molodoj_leopard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 0, 0, 0),
(5, 12, 'test1', ' test1', '2018-11-05', 'паррапрапр', '', ' вапвапвапвап', 1, 0, 0),
(6, 4, 'test2', ' test3', '2018-11-12', 'test2', '', ' test4', 0, 0, 0),
(7, 2, 'dsfdsfds', 'asdasd', '2018-11-05', 'sdfdsfdsf', '23-14.jpg', ' dfsdfsdf', 1, 0, 0),
(8, 4, '123', 'Pupkon', '2018-11-11', 'php', 'default.jpg', ' blablabla', 0, 0, 0),
(9, 4, '123', 'Pupkon', '2018-11-11', 'php', 'default.jpg', 'bagkartinki', 0, 0, 0),
(10, 4, 'gjghjghjghj1', 'Pupkon', '2018-11-11', 'php', 'default.jpg', ' proba1', 0, 0, 0),
(11, 4, '123', 'Pupkon', '2018-11-11', 'php', 'default.jpg', ' 212', 1, 0, 0),
(12, 4, '123', 'Pupkon', '2018-11-11', 'php', 'default.jpg', ' 123', 0, 0, 0),
(13, 4, 'gjghjghjghj1', 'Pupkon', '2018-11-11', 'php', 'default.jpg', ' 123', 0, 0, 0),
(14, 4, 'gjghjghjghj1', 'Pupkon', '2018-11-11', '1', 'default.jpg', ' 234', 0, 0, 0),
(15, 4, '123', 'Pupkon', '2018-11-11', '1', 'default.jpg', ' 333', 0, 0, 0),
(16, 4, 'gjghjghjghj1', 'Pupkon', '2018-11-11', 'php', 'default.jpg', ' 333444', 0, 0, 0),
(17, 4, 'gjghjghjghj1', 'Pupkon', '2018-11-12', 'php', 'default.jpg', ' 11111', 1, 0, 0),
(18, 4, 'gjghjghjghj1', ' proba1', '2018-11-12', 'php', 'default.jpg', ' proba1223', 0, 0, 0),
(19, 4, 'gjghjghjghj1', ' proba1223', '2018-11-12', 'php', 'default.jpg', ' proba1223', 0, 0, 0),
(20, 4, 'gjghjghjghj1', ' proba1', '2018-11-12', 'php', 'default.jpg', ' proba123', 0, 0, 0),
(21, 4, 'test', ' dfsdfsdf', '2018-11-12', 'sdfdsfdsf', 'default.jpg', 'test', 1, 0, 0),
(22, 4, 'test', ' test', '2018-11-12', 'test', 'default.jpg', ' test', 1, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'alex', 'alex', 'alex', 'novikov', 'alex@cms.by', 'default_avatar.jpg', 'admin', '$2y$10$iusesomecrazystrings22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

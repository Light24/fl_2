-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2013 г., 00:22
-- Версия сервера: 5.1.71-community-log
-- Версия PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cardlab_contest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `city` text NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_esperanto_ci NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `uid_vk` text NOT NULL,
  `uid_fb` text NOT NULL,
  `uid_tw` text NOT NULL,
  `provider_vk` text NOT NULL,
  `provider_fb` text NOT NULL,
  `provider_tw` text NOT NULL,
  `sex` text NOT NULL,
  `birth_date` text NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `city`, `photo`, `email`, `phone`, `uid_vk`, `uid_fb`, `uid_tw`, `provider_vk`, `provider_fb`, `provider_tw`, `sex`, `birth_date`, `password`) VALUES
(6, 'Вергелис', 'Костя', 'eee', 'eee', 'photo', 'vergelis.kostiantyn@gmail.com', '', '22121971', '100001434174768', '', 'http://vk.com/id22121971', 'https://www.facebook.com/kostya.vergelis', '', 'мужской', '18 11 2000 года', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

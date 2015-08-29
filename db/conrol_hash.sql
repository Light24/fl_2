-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 25 2013 г., 18:35
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
-- Структура таблицы `conrol_hash`
--

CREATE TABLE IF NOT EXISTS `conrol_hash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hashField` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `conrol_hash`
--

INSERT INTO `conrol_hash` (`id`, `hashField`, `user_id`) VALUES
(1, 'bbksms0yuxjfipigv7iy2013-12-25-17:28:49', 166),
(2, 'rihz6nsh81zoxdrlknjm2013-12-25-18:06:16', 167),
(3, 'nepwlqqqtboj3svfrak12013-12-25-18:11:14', 168);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

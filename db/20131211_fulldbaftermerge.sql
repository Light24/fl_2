-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 11 2013 г., 10:03
-- Версия сервера: 5.1.69
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cardlab_contest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `banner` text NOT NULL,
  `dateStart` date NOT NULL,
  `dateStop` date NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `contest`
--

INSERT INTO `contest` (`id`, `title`, `description`, `picture`, `banner`, `dateStart`, `dateStop`, `type`) VALUES
(1, 'Майские праздники с Fix Price', '', '', '', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `contest_prizes`
--

CREATE TABLE IF NOT EXISTS `contest_prizes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contest_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contest_id` (`contest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `contest_prizes`
--


-- --------------------------------------------------------

--
-- Структура таблицы `contest_works`
--

CREATE TABLE IF NOT EXISTS `contest_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `contest_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `description` text NOT NULL,
  `views` int(11) NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `contest_id` (`contest_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `contest_works`
--


-- --------------------------------------------------------

--
-- Структура таблицы `contest_works_comments`
--

CREATE TABLE IF NOT EXISTS `contest_works_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `work_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` int(11) NOT NULL,
  `useragent` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_id` (`work_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `contest_works_comments`
--


-- --------------------------------------------------------

--
-- Структура таблицы `contest_works_likes`
--

CREATE TABLE IF NOT EXISTS `contest_works_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `work_id` int(11) NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` int(11) NOT NULL,
  `useragent` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_id` (`work_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contest_works_likes`
--


-- --------------------------------------------------------

--
-- Структура таблицы `control_settings`
--

CREATE TABLE IF NOT EXISTS `control_settings` (
  `id` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `control_settings`
--


-- --------------------------------------------------------

--
-- Структура таблицы `menus_items`
--

CREATE TABLE IF NOT EXISTS `menus_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` int(11) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `title` text NOT NULL,
  `url_type` text NOT NULL,
  `url` text NOT NULL,
  `image` text,
  `tooltip` text,
  `options` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `menus_items`
--


-- --------------------------------------------------------

--
-- Структура таблицы `menus_menus`
--

CREATE TABLE IF NOT EXISTS `menus_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `menus_menus`
--


-- --------------------------------------------------------

--
-- Структура таблицы `pages_content`
--

CREATE TABLE IF NOT EXISTS `pages_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `prev_text` text,
  `full_text` text,
  `url` text NOT NULL,
  `short_url` text,
  `visible` int(11) NOT NULL,
  `searchable` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `main_template` text,
  `page_template` text NOT NULL,
  `default_main_template` text,
  `default_page_template` text,
  `position` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `pages_content`
--


-- --------------------------------------------------------

--
-- Структура таблицы `pages_fields`
--

CREATE TABLE IF NOT EXISTS `pages_fields` (
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `group` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `values` text NOT NULL,
  `default` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages_fields`
--


-- --------------------------------------------------------

--
-- Структура таблицы `pages_fields_data`
--

CREATE TABLE IF NOT EXISTS `pages_fields_data` (
  `id_page` int(11) NOT NULL,
  `field_name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id_page`,`field_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages_fields_data`
--


-- --------------------------------------------------------

--
-- Структура таблицы `pages_settings`
--

CREATE TABLE IF NOT EXISTS `pages_settings` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages_settings`
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

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `contest_prizes`
--
ALTER TABLE `contest_prizes`
  ADD CONSTRAINT `contest_prizes_ibfk_1` FOREIGN KEY (`contest_id`) REFERENCES `contest` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contest_works`
--
ALTER TABLE `contest_works`
  ADD CONSTRAINT `contest_works_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `contest_works_ibfk_1` FOREIGN KEY (`contest_id`) REFERENCES `contest` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contest_works_comments`
--
ALTER TABLE `contest_works_comments`
  ADD CONSTRAINT `contest_works_comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `contest_works_comments_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contest_works_likes`
--
ALTER TABLE `contest_works_likes`
  ADD CONSTRAINT `contest_works_likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `contest_works_likes_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

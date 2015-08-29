-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 15 2013 г., 23:50
-- Версия сервера: 5.1.61
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `contest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rules` text NOT NULL,
  `banner` text NOT NULL,
  `dateStart` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dateStop` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `contest`
--

INSERT INTO `contest` (`id`, `title`, `description`, `rules`, `banner`, `dateStart`, `dateStop`, `type`) VALUES
(1, 'Сказочный Новый Год с FIX Price', '<p>Конкурс &laquo;Новогодние праздники с Fix Price&raquo; представляет собой предложение Участникам&nbsp;разместить свои фото на специальном промо сайте. Победителями и получателями призов&nbsp;фотографию пользователи оставят наибольшее число голосов.</p>', '<p>Пришли фото новогоднего праздника с товарами из магазинов FIX Price и получи великолепные призы!</p>\n\n<p>&nbsp;</p>\n\n<p>Конкурс &laquo;Майские праздники с Fix Price&raquo; Участникам разместить свои фотографии (тематика фотографии должна отвечать требованиям конкурса, на фотографии изображено: отдых участника конкурса на майских праздниках, на фото ОБЯЗАТЕЛЬНО должен присутствовать товар Fix Price, он должен быть хорошо виден), на специальном промо сайте по адресу www.konkurs.fix-price.ru. Победителями и получателями призов определяются участники конкурса, за чью фотографию пользователи оставят наибольшее число голосов.</p>\n\n<p>&nbsp;</p>\n\n<p>В конце каждого месяца покупателям Fix Price, накопившим 3 000 баллов, придёт уведомление о времени и месте проведения розыгрыша.</p>\n\n\n', '/assets/default/images/scroller-2.png', '2013-12-15 09:21:21', '2014-01-15 09:00:00', 0),
(3, 'Майские праздники', 'Майские праздники', 'Майские праздники', '/', '2013-05-07 20:00:00', '2013-05-24 20:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `contest_works`
--

CREATE TABLE IF NOT EXISTS `contest_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `contest_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `data` text,
  `description` text,
  `views` int(11) NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `published` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contest_id` (`contest_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Дамп данных таблицы `contest_works`
--

INSERT INTO `contest_works` (`id`, `user_id`, `contest_id`, `title`, `data`, `description`, `views`, `datePost`, `published`, `confirmed`) VALUES
(43, 31, 1, 'first', 'assets/default/photos/contest_1/25zntssulufr9pavoedt.jpg', 'first', 0, '2013-12-14 21:42:39', 1, 0),
(44, 31, 1, 'second', 'assets/default/photos/contest_1/a7two0gynytqxw5wtjbo.jpg', 'second', 5, '2013-12-14 21:43:04', 1, 0),
(45, 31, 1, 'third', 'assets/default/photos/contest_1/2poddb5dsai3vminxgvg.jpg', 'third', 0, '2013-12-14 21:44:28', 1, 0),
(46, 31, 1, 'fourth', 'assets/default/photos/contest_1/jpvaeapvy52plcuo8wka.jpg', 'fourth', 3, '2013-12-14 21:45:07', 1, 0),
(47, 31, 1, 'fifth', 'assets/default/photos/contest_1/xz3lhgipsgpcrrmwamtp.jpg', 'fifth', 1, '2013-12-14 21:45:50', 1, 0),
(48, 51, 3, 'Моя работа', 'assets/default/photos/contest_1/tebd3wk9ch9fbp9ukh11.jpg', 'апвивапри', 0, '2013-12-15 11:26:41', 1, 0);

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
  `confirmed` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_id` (`work_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `contest_works_comments`
--

INSERT INTO `contest_works_comments` (`id`, `user_id`, `work_id`, `comment`, `datePost`, `ip`, `useragent`, `confirmed`) VALUES
(24, 31, 46, 'коммент', '2013-12-14 21:46:35', 0, '', 0),
(25, NULL, 44, 'Красивый салют', '2013-12-15 11:25:28', 0, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `contest_works_likes`
--

CREATE TABLE IF NOT EXISTS `contest_works_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `work_id` int(11) NOT NULL,
  `datePost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` int(11) NOT NULL,
  `useragent` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_id` (`work_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Дамп данных таблицы `contest_works_likes`
--

INSERT INTO `contest_works_likes` (`id`, `user_id`, `work_id`, `datePost`, `ip`, `useragent`) VALUES
(68, 31, 46, '2013-12-14 21:45:53', 0, ''),
(69, 31, 44, '2013-12-14 21:46:02', 0, ''),
(70, NULL, 46, '2013-12-15 10:04:46', 0, ''),
(71, NULL, 44, '2013-12-15 11:25:00', 0, ''),
(72, NULL, 47, '2013-12-15 11:25:51', 0, ''),
(73, NULL, 43, '2013-12-15 11:27:25', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `control_settings`
--

CREATE TABLE IF NOT EXISTS `control_settings` (
  `id` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Структура таблицы `pages_settings`
--

CREATE TABLE IF NOT EXISTS `pages_settings` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `city` text,
  `photo` text,
  `email` text NOT NULL,
  `phone` text,
  `uid_vk` text,
  `uid_fb` text,
  `uid_tw` text,
  `provider_vk` text,
  `provider_fb` text,
  `provider_tw` text,
  `sex` enum('мужской','жунский') DEFAULT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(32) NOT NULL,
  `approved` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `city`, `photo`, `email`, `phone`, `uid_vk`, `uid_fb`, `uid_tw`, `provider_vk`, `provider_fb`, `provider_tw`, `sex`, `birth_date`, `password`, `approved`, `confirmed`) VALUES
(31, 'Вергелис', 'Константин', 'Игоревич', 'Кривой Рог         ', 'assets/default/photos/uiydk43gnktwk0lpfddr.jpg', 'vergelis.kostiantyn@gmail.com', '', '22121971', '100001434174768', '', 'http://vk.com/id22121971', 'https://www.facebook.com/kostya.vergelis', '', 'мужской', '1991-06-03', '08f4b1aaf424619e0537fdca5b549c35', 1, 0),
(51, 'Тест', 'Тест', 'Тест', ' ', 'assets/default/photos/2oboojmwhxfywtudqjhu.jpg', 'ps@cardlab.ru', '', '', '', '', '', '', '', 'мужской', '2013-12-15', '4297f44b13955235245b2497399d7a93', 1, 0);

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
  ADD CONSTRAINT `contest_works_ibfk_1` FOREIGN KEY (`contest_id`) REFERENCES `contest` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contest_works_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `contest_works_comments`
--
ALTER TABLE `contest_works_comments`
  ADD CONSTRAINT `contest_works_comments_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contest_works_comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `contest_works_likes`
--
ALTER TABLE `contest_works_likes`
  ADD CONSTRAINT `contest_works_likes_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `contest_works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contest_works_likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

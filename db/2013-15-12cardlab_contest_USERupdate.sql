-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 15 2013 г., 16:18
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
-- Структура таблицы `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rules` text NOT NULL,
  `banner` text NOT NULL,
  `dateStart` date NOT NULL,
  `dateStop` date NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `contest`
--

INSERT INTO `contest` (`id`, `title`, `description`, `rules`, `banner`, `dateStart`, `dateStop`, `type`) VALUES
(1, 'Сказочный Новый Год с   FIX Price', 'Конкурс «Новогодние праздники с Fix Price» представляет собой предложение Участникам разместить свои фото на специальном промо сайте. Победителями и получателями призов фотографию пользователи оставят наибольшее число голосов.\n', '<p>Пришли фото новогоднего праздника с товарами из магазинов FIX Price и получи великолепные призы! </p><br/>\n                        <p>Конкурс «Майские праздники с Fix Price» Участникам разместить свои фотографии \n                            (тематика фотографии должна отвечать требованиям конкурса, на фотографии изображено: \n                            отдых участника конкурса на майских праздниках, на фото ОБЯЗАТЕЛЬНО должен присутствовать товар\n                            Fix Price, он должен быть хорошо виден), на специальном промо сайте по адресу \n                            www.konkurs.fix-price.ru. Победителями и получателями призов определяются участники конкурса, \n                            за чью фотографию пользователи оставят наибольшее число голосов.</p><br/>\n                        <p>В конце каждого месяца покупателям Fix Price, накопившим 3 000 баллов, придёт уведомление о времени и месте проведения розыгрыша. </p><br/>\n', '/assets/default/images/scroller-1.png', '0000-00-00', '0000-00-00', 0);

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
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contest_id` (`contest_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `contest_works`
--

INSERT INTO `contest_works` (`id`, `user_id`, `contest_id`, `title`, `data`, `description`, `views`, `datePost`, `published`) VALUES
(21, 31, 1, 'first', 'assets/default/photos/contest_1/vcldxmhuwo0hikhky4ds.jpg', 'first', 0, '2013-12-14 20:00:41', 1),
(22, 31, 1, 'second', 'assets/default/photos/contest_1/oe3of64js6br7ynoj4os.jpg', 'second', 0, '2013-12-14 20:01:03', 1),
(23, 31, 1, 'third', 'assets/default/photos/contest_1/kkdnr0ndcyutcp1k8xar.jpg', 'third', 4, '2013-12-14 20:01:29', 1),
(24, 31, 1, 'quatre', 'assets/default/photos/contest_1/hvmprlcvob9tuvpcnu5l.jpg', 'quatre', 2, '2013-12-14 20:03:28', 1),
(25, 31, 1, 'gegew', 'assets/default/photos/contest_1/yibodj5ym1tpzetduraj.jpg', 'hrhreher', 6, '2013-12-14 20:31:24', 1),
(26, 31, 1, 'trtr', 'assets/default/photos/contest_1/ij7lfl0b1rzgqb8yk9xw.jpg', 'trtrtretre', 0, '2013-12-15 08:56:07', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `contest_works_comments`
--

INSERT INTO `contest_works_comments` (`id`, `user_id`, `work_id`, `comment`, `datePost`, `ip`, `useragent`) VALUES
(9, 31, 23, 'Первый коммент', '2013-12-14 20:03:52', 0, ''),
(10, 31, 24, '=)', '2013-12-14 20:04:50', 0, '');

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
  KEY `user_id` (`user_id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Дамп данных таблицы `contest_works_likes`
--

INSERT INTO `contest_works_likes` (`id`, `user_id`, `work_id`, `datePost`, `ip`, `useragent`) VALUES
(56, 31, 23, '2013-12-14 20:03:59', 0, '');

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
  `approved` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `city`, `photo`, `email`, `phone`, `uid_vk`, `uid_fb`, `uid_tw`, `provider_vk`, `provider_fb`, `provider_tw`, `sex`, `birth_date`, `password`, `approved`) VALUES
(31, 'Вергелис', 'Костя', 'Игоревич', 'Кривой Рог    ', 'assets/default/photos/waylkyxqc3togesry0ew.jpg', 'vergelis.kostiantyn@gmail.com', '', '22121971', '100001434174768', '', 'http://vk.com/id22121971', 'https://www.facebook.com/kostya.vergelis', '', 'мужской', '03.06.1991 года', 'b117c1072a2e9b77c0748d6f115494f4', 1);

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

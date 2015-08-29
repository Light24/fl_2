-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 13 2013 г., 11:21
-- Версия сервера: 5.1.71
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `contest_works`
--

INSERT INTO `contest_works` (`id`, `user_id`, `contest_id`, `title`, `data`, `description`, `views`, `datePost`) VALUES
(1, 31, 1, 'первая работа', 'assets/default/works/6u1pf63k6f67um4uyss0.jpg', 'Тут много-много текста', 1, '2013-12-12 14:16:21'),
(2, 31, 1, 'вторая работа', 'assets/default/works/zytsq8xxocgfabmiolxq.jpg', 'вторая работа описание', 89, '2013-12-12 15:20:25'),
(3, 31, 1, 'три', 'assets/default/works/2izt1y3topxqhr3jfuit.jpg', 'иваиваива', 0, '2013-12-12 20:10:05'),
(4, 31, 1, 'четыре', 'assets/default/works/gupraabxvbphqlk3pbrk.jpg', 'четыре', 0, '2013-12-12 20:10:37'),
(5, 31, 1, 'пять', 'assets/default/works/enrrfvtfkkxx3xvqgon2.jpg', 'пять пять', 0, '2013-12-12 20:12:07'),
(6, 31, 1, 'шесть', 'assets/default/works/5m3manggl3rr16rdzyic.jpg', 'шесть', 0, '2013-12-12 20:12:30'),
(7, 31, 1, 'семь', 'assets/default/works/kw5aod4msvlmgdbrlanq.jpg', 'семьсемь', 0, '2013-12-12 20:13:01'),
(10, 31, 1, 'десять', 'assets/default/works/oqnih1wu6nskr1f0evtz.jpg', 'десять', 0, '2013-12-12 20:16:41'),
(11, 31, 1, 'одиннадцать', 'assets/default/works/cjzjl3b8qfgbnuotwxix.jpg', 'одиннадцать', 0, '2013-12-12 20:17:24'),
(12, 31, 1, 'двенадцать', 'assets/default/works/gx249oqce5fpyiopcav9.jpg', 'двенадцать', 0, '2013-12-12 20:18:12'),
(13, 31, 1, 'тринадцать', 'assets/default/works/nkl0zuj0b2prujwr2ssx.jpg', 'тринадцать', 0, '2013-12-12 20:18:50'),
(14, 31, 1, 'четырнадцать', 'assets/default/works/hdwsmyzrx2ieppljnzog.jpg', 'четырнадцать', 1, '2013-12-12 20:19:24'),
(15, 31, 1, 'пятнадцать', 'assets/default/works/pmrbmmm86t3crjojgfiv.jpg', 'пятнадцать', 0, '2013-12-12 20:20:44'),
(16, 31, 1, 'шестнадцать', 'assets/default/works/vwbzj3s1rccaldgxd0hy.jpg', 'шестнадцать', 0, '2013-12-12 20:21:16'),
(17, 31, 1, 'семнадцать', 'assets/default/works/5nlplxwywpxasui7dbfo.jpg', 'семнадцать', 1, '2013-12-12 20:21:45'),
(18, 31, 1, 'восемнадцать', 'assets/default/works/sxmwczyhs7ugygja6omd.jpg', 'восемнадцать', 9, '2013-12-12 20:22:08');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `contest_works_comments`
--

INSERT INTO `contest_works_comments` (`id`, `user_id`, `work_id`, `comment`, `datePost`, `ip`, `useragent`) VALUES
(2, 31, 15, 'dhrehre', '2013-12-12 17:55:06', 0, ''),
(3, 31, 18, 'ttttt', '2013-12-12 17:57:39', 0, ''),
(4, 31, 18, 'Новый коммент', '2013-12-12 18:28:10', 0, ''),
(5, 31, 18, 'grgegregre', '2013-12-12 18:29:46', 0, ''),
(6, 31, 2, 'bbrbrehbrhrehre', '2013-12-12 18:30:42', 0, ''),
(7, 31, 2, 'hrthrthrt', '2013-12-12 18:32:05', 0, ''),
(8, 31, 2, 'olololo', '2013-12-12 18:32:23', 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `contest_works_likes`
--

INSERT INTO `contest_works_likes` (`id`, `user_id`, `work_id`, `datePost`, `ip`, `useragent`) VALUES
(1, 31, 18, '2013-12-13 09:41:25', 0, ''),
(2, 31, 18, '2013-12-13 09:40:46', 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `middle_name`, `city`, `photo`, `email`, `phone`, `uid_vk`, `uid_fb`, `uid_tw`, `provider_vk`, `provider_fb`, `provider_tw`, `sex`, `birth_date`, `password`) VALUES
(31, 'Вергелис', 'Костя', 'Игоревич', 'Кривой Рог    ', 'assets/default/photos/waylkyxqc3togesry0ew.jpg', 'vergelis.kostiantyn@gmail.com', '', '22121971', '100001434174768', '', 'http://vk.com/id22121971', 'https://www.facebook.com/kostya.vergelis', '', 'женский', '03.06.1991 года', '66be5c35ebef0390d04978ada0cc3f7b'),
(43, 'кур', 'курку', 'ркурку', 'ркурку', '', 'крукр', '', '', '', '', '', '', '', 'мужской', '18.02.2001 года', '1e5875b13061d11b99046958a513dbaa'),
(44, 'кур', 'курку', 'ркурку', 'ркурку', '', 'крукр', '', '', '', '', '', '', '', 'мужской', '18.02.2001 года', '1e5875b13061d11b99046958a513dbaa');

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


-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 17 2013 г., 18:05
-- Версия сервера: 5.1.71
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- База данных: `cardlab_contest`
--

--
-- Дамп данных таблицы `menus_items`
--

INSERT INTO `menus_items` (`id`, `menu`, `parent`, `position`, `title`, `url_type`, `url`, `image`, `tooltip`, `options`) VALUES
(1, 1, NULL, 0, 'Тема 1', 'url', '#', '', '', ''),
(2, 1, NULL, 0, 'Тема 2', 'url', '#', '', '', '');

--
-- Дамп данных таблицы `menus_menus`
--

INSERT INTO `menus_menus` (`id`, `name`, `description`, `template`) VALUES
(1, 'feedbackMenu', 'Темы для обратной связи - список тем выводимых в выпадающем списке формы обратной связи', 'feedbackMenu');

--
-- Дамп данных таблицы `pages_content`
--

INSERT INTO `pages_content` (`id`, `title`, `prev_text`, `full_text`, `url`, `short_url`, `visible`, `searchable`, `parent_id`, `main_template`, `page_template`, `default_main_template`, `default_page_template`, `position`) VALUES
(1, 'Вопросы и ответы', '', NULL, 'voprosy-i-otvety', 'faq', 0, 1, NULL, NULL, 'faq', '404', NULL, NULL),
(2, 'Как принять участие в акции?', '<p><span style="font-family:din; font-size:16px">Тут ответ 1&nbsp;</span><br />\n<span style="font-family:din; font-size:16px">Fix Price Club - это накопительная программа, в рамках которой Вы можете пользоваться специальными предложениями сети магазинов Fix Price. В 2013 году мы проводим лотерею &laquo;Мечты сбываются каждый месяц&raquo;, где будут разыграны 37 автомобилей Skoda Fabia. Карта, зарегистрированная на Ваше имя, дает возможность участвовать в розыгрышах, проводимых Fix Price Club.</span></p>\n', NULL, 'kak-prinyat-uchastie-v-akcii', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(3, 'Срок проведения Акции &quot;Зима в теплой компании&quot;?', '<p><span style="font-family:din; font-size:16px">Тут ответ 2&nbsp;</span><br />\n<span style="font-family:din; font-size:16px">Fix Price Club - это накопительная программа, в рамках которой Вы можете пользоваться специальными предложениями сети магазинов Fix Price. В 2013 году мы проводим лотерею &laquo;Мечты сбываются каждый месяц&raquo;, где будут разыграны 37 автомобилей Skoda Fabia. Карта, зарегистрированная на Ваше имя, дает возможность участвовать в розыгрышах, проводимых Fix Price Club.</span></p>\n', NULL, 'srok-provedeniya-akcii-zima-v-teploy-kompanii', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(4, 'Как прислать фото купленного продукта?', '<p><span style="font-family:din; font-size:16px">Тут ответ 3&nbsp;</span><br />\n<span style="font-family:din; font-size:16px">Fix Price Club - это накопительная программа, в рамках которой Вы можете пользоваться специальными предложениями сети магазинов Fix Price. В 2013 году мы проводим лотерею &laquo;Мечты сбываются каждый месяц&raquo;, где будут разыграны 37 автомобилей Skoda Fabia. Карта, зарегистрированная на Ваше имя, дает возможность участвовать в розыгрышах, проводимых Fix Price Club.</span></p>\n', NULL, 'kak-prislat-foto-kuplennogo-produkta', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(5, 'Какие призы я могу получить?', '<p><span style="font-family:din; font-size:16px">Думайте сами!</span></p>\n', NULL, 'kakie-prizy-ya-mogu-poluchit', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(6, 'Сколько призов я могу заказать?', '<p><span style="font-family:din; font-size:16px">Решайте сами!</span></p>\n', NULL, 'skol-ko-prizov-ya-mogu-zakazat', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(7, 'Как получить приз?', '<p><span style="font-family:din; font-size:16px">Иметь</span></p>\n', NULL, 'kak-poluchit-priz', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(8, 'Какие требования к фотографиям для того, что бы принять участие в акции?', '<p><span style="font-family:din; font-size:16px">Или</span></p>\n', NULL, 'kakie-trebovaniya-k-fotografiyam-dlya-togo-chto-by-prinyat-uchastie-v-akcii', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(9, 'Как получить приз недели?', '<p><span style="font-family:din; font-size:16px">не</span></p>\n', NULL, 'kak-poluchit-priz-nedeli', NULL, 1, 1, 1, NULL, '', NULL, NULL, NULL),
(10, 'Просто страница', '<p>Текст страницы</p>\n', NULL, 'prosto-stranica', NULL, 1, 1, NULL, NULL, '', NULL, NULL, NULL);

--
-- Дамп данных таблицы `pages_fields`
--


--
-- Дамп данных таблицы `pages_fields_data`
--


--
-- Дамп данных таблицы `pages_settings`
--


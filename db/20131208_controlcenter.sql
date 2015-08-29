-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- ����: localhost
-- ����� ��������: ��� 08 2013 �., 14:51
-- ������ �������: 5.1.69
-- ������ PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- ���� ������: `cardlab_contest`
--

-- --------------------------------------------------------

--
-- ��������� ������� `control_settings`
--

CREATE TABLE IF NOT EXISTS `control_settings` (
  `id` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `control_settings`
--


-- --------------------------------------------------------

--
-- ��������� ������� `menus_items`
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
-- ���� ������ ������� `menus_items`
--


-- --------------------------------------------------------

--
-- ��������� ������� `menus_menus`
--

CREATE TABLE IF NOT EXISTS `menus_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `template` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- ���� ������ ������� `menus_menus`
--


-- --------------------------------------------------------

--
-- ��������� ������� `pages_content`
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
-- ���� ������ ������� `pages_content`
--


-- --------------------------------------------------------

--
-- ��������� ������� `pages_fields`
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
-- ���� ������ ������� `pages_fields`
--


-- --------------------------------------------------------

--
-- ��������� ������� `pages_fields_data`
--

CREATE TABLE IF NOT EXISTS `pages_fields_data` (
  `id_page` int(11) NOT NULL,
  `field_name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id_page`,`field_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `pages_fields_data`
--


-- --------------------------------------------------------

--
-- ��������� ������� `pages_settings`
--

CREATE TABLE IF NOT EXISTS `pages_settings` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `pages_settings`
--



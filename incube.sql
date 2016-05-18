-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 15 2016 г., 12:34
-- Версия сервера: 5.6.22-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `incube`
--

-- --------------------------------------------------------

--
-- Структура таблицы `another_files_in_pr`
--

CREATE TABLE IF NOT EXISTS `another_files_in_pr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `in_pr_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID_another_files_in_pr` (`in_pr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `char_in_pr`
--

CREATE TABLE IF NOT EXISTS `char_in_pr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `st_level` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newness` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nat_imp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `result` text COLLATE utf8_unicode_ci,
  `ipid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID_char_in_pr` (`ipid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Economic_Activities`
--

CREATE TABLE IF NOT EXISTS `Economic_Activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `s_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `Economic_Activities`
--

INSERT INTO `Economic_Activities` (`id`, `name`, `pid`, `s_code`) VALUES
(1, 'Сільське господарство, лісове господарство та рибне господарство', NULL, 'A'),
(2, 'Сільське господарство, мисливство та надання пов''язаних із ними послуг', 1, '01'),
(3, 'Лісове господарство та лісозаготівлі', 1, '02'),
(4, 'Рибне господарство', 1, '03'),
(5, 'Інше', 1, NULL),
(6, 'Переробна промисловість (Виробництво)', NULL, 'C'),
(7, 'Виробництво харчових продуктів', 6, '10');

-- --------------------------------------------------------

--
-- Структура таблицы `files_for_form_offer_project`
--

CREATE TABLE IF NOT EXISTS `files_for_form_offer_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `files_for_form_offer_project`
--

INSERT INTO `files_for_form_offer_project` (`id`, `name`, `pid`) VALUES
(1, 'upload\\bff7310b373f75d046e4961ae74fa5d9\\IMG_6726.jpg', 3),
(2, 'upload\\bff7310b373f75d046e4961ae74fa5d9\\IMG_6727.jpg', 3),
(3, 'upload\\bff7310b373f75d046e4961ae74fa5d9\\IMG_6728.jpg', 3),
(4, 'upload\\88b1112662e278912c1bf0254c09c46f\\IMG_6726.jpg', 4),
(5, 'upload\\88b1112662e278912c1bf0254c09c46f\\IMG_6727.jpg', 4),
(6, 'upload\\88b1112662e278912c1bf0254c09c46f\\IMG_6728.jpg', 4),
(7, 'upload\\88b1112662e278912c1bf0254c09c46f\\IMG_6729.jpg', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `form_application_for_the_project`
--

CREATE TABLE IF NOT EXISTS `form_application_for_the_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_f` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_s` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Adress` text COLLATE utf8_unicode_ci,
  `project_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_release` text COLLATE utf8_unicode_ci,
  `project_goal` text COLLATE utf8_unicode_ci,
  `project_result` text COLLATE utf8_unicode_ci,
  `date_b` date DEFAULT NULL,
  `date_e` date DEFAULT NULL,
  `project_cost` int(11) DEFAULT NULL,
  `project_info` text COLLATE utf8_unicode_ci,
  `date_reg_proj` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `form_cand_vac_emp`
--

CREATE TABLE IF NOT EXISTS `form_cand_vac_emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_f` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_s` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `work_info` text COLLATE utf8_unicode_ci,
  `education` text COLLATE utf8_unicode_ci,
  `trainee` text COLLATE utf8_unicode_ci,
  `projects` text COLLATE utf8_unicode_ci,
  `skills` text COLLATE utf8_unicode_ci,
  `more_info` text COLLATE utf8_unicode_ci,
  `adress` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `form_offer_project`
--

CREATE TABLE IF NOT EXISTS `form_offer_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_goal` text COLLATE utf8_unicode_ci,
  `project_aspects` text COLLATE utf8_unicode_ci,
  `adress` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `incube_help` text COLLATE utf8_unicode_ci,
  `economic_activities` int(11) DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stage_work` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `project_cost` int(11) DEFAULT NULL,
  `available_funding` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_b` date DEFAULT NULL,
  `date_e` date DEFAULT NULL,
  `files_folder` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID_form_offer_project_economic_activities` (`economic_activities`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `form_offer_project`
--

INSERT INTO `form_offer_project` (`id`, `project_name`, `project_goal`, `project_aspects`, `adress`, `phone`, `email`, `web_site`, `incube_help`, `economic_activities`, `region`, `stage_work`, `project_cost`, `available_funding`, `country`, `date_b`, `date_e`, `files_folder`) VALUES
(1, '', '', '', '', '', '', '', '', NULL, '', '', NULL, '', '', NULL, NULL, ''),
(2, '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2', '2', 2, '2', '2', '2016-05-10', '2016-05-26', ''),
(3, '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', 1, '1', '1', '2016-05-04', '2016-05-25', ''),
(4, 'Влад рыболов', 'проэкт', 'фывофыов', 'ФЫввфыыв', '345345', 'вафв', 'ававы', 'фывфыв', 4, 'Запорожский', 'начальная', 322, '0', 'Украина', '2016-05-05', '2016-05-12', '');

-- --------------------------------------------------------

--
-- Структура таблицы `form_offer_vac_emp`
--

CREATE TABLE IF NOT EXISTS `form_offer_vac_emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_org` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `info_org` text COLLATE utf8_unicode_ci,
  `info_org_s` text COLLATE utf8_unicode_ci,
  `type_org` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sector_org` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `form_order_in_pr`
--

CREATE TABLE IF NOT EXISTS `form_order_in_pr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `in_direction` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `patents` text COLLATE utf8_unicode_ci,
  `date_b` date DEFAULT NULL,
  `date_e` date DEFAULT NULL,
  `cost_period` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_perf_ind` text COLLATE utf8_unicode_ci,
  `key_market` text COLLATE utf8_unicode_ci,
  `coast` int(11) DEFAULT NULL,
  `coast_direction` text COLLATE utf8_unicode_ci,
  `tax_coast_direction` text COLLATE utf8_unicode_ci,
  `info_spec` text COLLATE utf8_unicode_ci,
  `rating_effective` text COLLATE utf8_unicode_ci,
  `another_effects` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1462983551),
('m130524_201442_init', 1462983572),
('m160511_160834_economic_activities', 1462983858),
('m160511_163330_form_application_for_the_project', 1462986139),
('m160511_170702_form_offer_project', 1462987745),
('m160511_173240_vacancy', 1462989360),
('m160511_173858_offer_vac_emp', 1462989170),
('m160511_180141_form_cand_vac_emp', 1462990062),
('m160511_180858_table_cand_vac', 1462990455),
('m160511_182923_performer_project', 1462991922),
('m160511_183952_char_in_pr', 1462992354),
('m160511_190304_form_orfer_in_pr', 1462994294),
('m160511_191957_another_files_in_pr', 1462994649);

-- --------------------------------------------------------

--
-- Структура таблицы `performer_project`
--

CREATE TABLE IF NOT EXISTS `performer_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` text COLLATE utf8_unicode_ci,
  `ipid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID_performer_project` (`ipid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `Person`
--

CREATE TABLE IF NOT EXISTS `Person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `avatar` text NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `Person`
--

INSERT INTO `Person` (`id`, `name`, `avatar`, `filename`) VALUES
(1, '', 'vVeSZ1_I8AhsRkE_wJq6EPdqu-MpbpiN.JPG', 'IMG_6726.JPG'),
(2, '', '6KhdWATKfs0ZjyqVrwc-2wTUt5HHRn3_.JPG', 'IMG_6763.JPG'),
(3, '', 'yGMLvCEOjdTY4WmG9FBKl496kZZ-cMZu.JPG', 'IMG_6728.JPG'),
(4, '', 'i36s5YAT3XD_7eYZfWWX_xxisi7ksrio.JPG', 'IMG_6728.JPG'),
(5, '', 'UqzXkTS3BEnYmxlGcw0L9BeF6KKShpan.JPG', 'IMG_6763.JPG'),
(6, '', '8C3SgNue_vbtGkhX2AgWRUeNSsyvI16Y.JPG', 'IMG_6763.JPG'),
(7, '', 'tR-pFBrnRhjMP_J1c13lc45qfXFZ0yCv.JPG', 'IMG_6730.JPG'),
(8, '', 'XLr9umUFc46d1sh_TfEx1GSis_EPL6Qc.JPG', 'IMG_6730.JPG'),
(9, '', '4p-qnQ4jSqlBMcjqpzXt2VuBpQABQdfz.JPG', 'IMG_6727.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `table_cand_vac`
--

CREATE TABLE IF NOT EXISTS `table_cand_vac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID_table_cand_vac_vacancy` (`vid`),
  KEY `parentID_table_cand_vac_form_cand_vac_emp` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'i-2pvsSsLU_2rstFwXlJyQqk-QGn8WGi', '$2y$13$9NNphE9jQM8ordbeavf7Xe/CYRdsH/fwdi2d7tZW4VE81Shrfc9qC', NULL, 'admin@gmail.cos', 10, 1463240103, 1463240103);

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parentID_vacancy_fid` (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `another_files_in_pr`
--
ALTER TABLE `another_files_in_pr`
  ADD CONSTRAINT `another_files_in_pr_ibfk_1` FOREIGN KEY (`in_pr_id`) REFERENCES `form_order_in_pr` (`id`);

--
-- Ограничения внешнего ключа таблицы `char_in_pr`
--
ALTER TABLE `char_in_pr`
  ADD CONSTRAINT `char_in_pr_ibfk_1` FOREIGN KEY (`ipid`) REFERENCES `form_order_in_pr` (`id`);

--
-- Ограничения внешнего ключа таблицы `Economic_Activities`
--
ALTER TABLE `Economic_Activities`
  ADD CONSTRAINT `economic_activities_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Economic_Activities` (`id`);

--
-- Ограничения внешнего ключа таблицы `files_for_form_offer_project`
--
ALTER TABLE `files_for_form_offer_project`
  ADD CONSTRAINT `files_for_form_offer_project_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `form_offer_project` (`id`);

--
-- Ограничения внешнего ключа таблицы `form_offer_project`
--
ALTER TABLE `form_offer_project`
  ADD CONSTRAINT `form_offer_project_ibfk_1` FOREIGN KEY (`economic_activities`) REFERENCES `Economic_Activities` (`id`);

--
-- Ограничения внешнего ключа таблицы `performer_project`
--
ALTER TABLE `performer_project`
  ADD CONSTRAINT `performer_project_ibfk_1` FOREIGN KEY (`ipid`) REFERENCES `form_order_in_pr` (`id`);

--
-- Ограничения внешнего ключа таблицы `table_cand_vac`
--
ALTER TABLE `table_cand_vac`
  ADD CONSTRAINT `table_cand_vac_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vacancy` (`id`),
  ADD CONSTRAINT `table_cand_vac_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `form_cand_vac_emp` (`id`);

--
-- Ограничения внешнего ключа таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `form_offer_vac_emp` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

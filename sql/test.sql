-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 16 2014 г., 14:11
-- Версия сервера: 5.6.16
-- Версия PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

DELIMITER $$
--
-- Процедуры
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `key_bezpl`
--

CREATE TABLE IF NOT EXISTS `key_bezpl` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kod` int(10) DEFAULT NULL,
  `name` varchar(123) DEFAULT NULL,
  `sing` enum('0','1','2','3') NOT NULL,
  `passwor` varchar(8) DEFAULT NULL,
  `bad` enum('+','-') DEFAULT NULL,
  `date_surrender` date DEFAULT NULL,
  `date_supply` date DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `dogovir` enum('+','-') DEFAULT NULL,
  `got_key` enum('+','-') DEFAULT NULL,
  `nalog` varchar(10) DEFAULT NULL,
  `telephone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `key_bezpl`
--

INSERT INTO `key_bezpl` (`id`, `kod`, `name`, `sing`, `passwor`, `bad`, `date_surrender`, `date_supply`, `date_start`, `dogovir`, `got_key`, `nalog`, `telephone`) VALUES
(1, 4654654, 'jgf ujhfuyf utygdfut', '1', 'uhfj', '-', '2014-08-12', '2014-08-11', '2014-08-17', '+', '-', '54', '096875664'),
(2, 4654654, 'jgf ujhfuyf utygdfut', '1', 'uhfj', '-', '2014-08-12', '2014-08-11', '2014-08-17', '+', '-', '54', '096875664'),
(3, 99876, 'НПЗ', '2', '87585', '+', '2014-06-18', '2013-08-14', '2014-08-18', '+', '-', '756', '89765456565'),
(4, 87758656, 'ООО ЛИНОС', '0', '87567', '+', '2014-08-18', '2014-08-30', '2014-08-25', '+', '+', '667', '896785675');

-- --------------------------------------------------------

--
-- Структура таблицы `key_pl`
--

CREATE TABLE IF NOT EXISTS `key_pl` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kod` int(10) DEFAULT NULL,
  `name` varchar(108) DEFAULT NULL,
  `date_surrender` date DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_po` date DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `key_pl`
--

INSERT INTO `key_pl` (`id`, `kod`, `name`, `date_surrender`, `date_start`, `date_po`, `telephone`) VALUES
(1, 0, 'fge effge eger', '2014-08-28', '2014-08-12', '2014-08-04', '345345'),
(2, 356556456, 'vsfbd  dfgd edfgerg', '2014-08-18', '2014-06-11', '2014-06-18', '35635635'),
(3, 2147483647, 'ТОВ "ВЕДМАРКЕТ"', '2014-08-12', '2014-06-20', '2014-08-13', '80957564323'),
(4, 98876654, 'ПП "ЛИСИЧАНСЬКЛІФТ"', '2014-08-19', '2014-08-12', '2014-08-17', '0987656453');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `login` varchar(15) CHARACTER SET utf8 NOT NULL,
  `password` varchar(10) CHARACTER SET utf8 NOT NULL,
  `access` enum('admin','editor','user') CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `access`) VALUES
(1, 'Красюк Дмитрий Сергеевичь', 'dmitry1209', 'retro007', 'admin'),
(2, 'Нечерет Виталий Валерийовичь', 'vitaliy1209', 'vetnech8', 'editor'),
(3, 'Богдан Ольга Анатолиевна', 'dmitry1209', 'qwerty', 'user'),
(4, 'Иванов Иван Ивановичь', 'sddd', '22334', ''),
(5, 'Легков Олександр Сергійович', 'erer', '123fds3', 'editor'),
(7, 'Иванов Иван Ивановичь', 'junior', '345345', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `user_key`
--

CREATE TABLE IF NOT EXISTS `user_key` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `key_bezpl_id` int(5) NOT NULL,
  `key_pl_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='вспомогательная' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

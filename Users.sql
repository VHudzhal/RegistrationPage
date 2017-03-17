-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 21 2016 г., 20:57
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `User` DEFAULT CHARACTER SET utf8;
USE `User`;


--
-- База данных: `User`
--

-- --------------------------------------------------------
DROP TABLE IF EXISTS `photo`;

CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Структура таблицы `user`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id_user` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Day` date NOT NULL,
  `Mounth` date NOT NULL,
  `Year` year(4) NOT NULL,
  `Country` text NOT NULL,
  `City` text NOT NULL,
  `Email` char(25) NOT NULL,
  `Login` text NOT NULL,
  `Gender` char(20) NOT NULL,
  `Password` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Avatar` point NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

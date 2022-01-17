-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 02:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `castellarin_florencia`
--
CREATE DATABASE IF NOT EXISTS `castellarin_florencia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `castellarin_florencia`;

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `apellido`, `correo`, `mensaje`, `timestamp`) VALUES
(1, 'Marta', 'Sánchez', 'martitarc@gmail.com', 'Me encantó la página. En especial los gansos. Gracias por compartirlos!', '2022-01-04 12:36:46'),
(2, 'Elsa', 'Pallo', 'esapallito@hotmail.com', 'Hola! Soy un spambot!', '2022-01-04 13:01:57'),
(3, 'Elsa', 'Pallo', 'esapallito@hotmail.com', 'Hola! Soy un spambot!', '2022-01-04 13:03:17'),
(4, 'Elsa', 'Pallo', 'esapallito@hotmail.com', 'Hola! Soy un spambot!', '2022-01-04 13:03:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

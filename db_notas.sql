-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-05-2022 a las 00:55:01
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_promedio`
--

DROP TABLE IF EXISTS `notas_promedio`;
CREATE TABLE IF NOT EXISTS `notas_promedio` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(225) NOT NULL,
  `parcial` float NOT NULL,
  `investigacion` float NOT NULL,
  `tarea` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas_promedio`
--

INSERT INTO `notas_promedio` (`ID`, `nombre`, `parcial`, `investigacion`, `tarea`) VALUES
(3, 'Maria Navas', 8.1, 7, 7),
(9, 'Juan Herique', 7.9, 8.4, 9.5),
(10, 'Karla Rodriguez', 7.9, 8.4, 9.5),
(14, 'Miguel Acosta', 5, 6.2, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

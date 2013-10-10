-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2013 a las 20:49:09
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eduliq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importacion`
--

CREATE TABLE IF NOT EXISTS `importacion` (
  `docu` int(8) NOT NULL,
  `cuil` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `trab` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `nom` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `zona` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `zbco` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `escu` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `prog` int(2) NOT NULL,
  `proy` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `sublp` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `acti` int(2) NOT NULL,
  `plan` int(1) NOT NULL,
  `sint` int(2) NOT NULL,
  `fnaa` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `fnmm` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `fndd` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `anti` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `hora` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `agru` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `lcat` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `ncat` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `dias` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `liti` float NOT NULL,
  `lits` float NOT NULL,
  `enba` float NOT NULL,
  `brut` float NOT NULL,
  `sala` float NOT NULL,
  `tick` float NOT NULL,
  `liqu` float NOT NULL,
  `lgasto` float NOT NULL,
  `bono` float NOT NULL,
  `adic` float NOT NULL,
  `area` varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

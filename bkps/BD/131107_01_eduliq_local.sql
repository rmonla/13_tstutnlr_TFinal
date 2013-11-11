-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-11-2013 a las 01:24:36
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
CREATE DATABASE `eduliq` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `eduliq`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_p`
--

CREATE TABLE IF NOT EXISTS `a_p` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idagente` int(11) NOT NULL,
  `idplan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=107 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_p_c_ea`
--

CREATE TABLE IF NOT EXISTS `a_p_c_ea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ida_p` int(11) NOT NULL,
  `idcargo` int(11) NOT NULL,
  `idescu_area` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=126 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE IF NOT EXISTS `agentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docu` int(8) NOT NULL,
  `cuil` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `nom` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idagente` (`id`),
  KEY `docu` (`docu`),
  KEY `docu_2` (`docu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=105 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agrups`
--

CREATE TABLE IF NOT EXISTS `agrups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agru` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agru` (`agru`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area` (`area`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idagru` int(11) NOT NULL,
  `cargo` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cod_usr`
--

CREATE TABLE IF NOT EXISTS `cod_usr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcodigo` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos`
--

CREATE TABLE IF NOT EXISTS `codigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE IF NOT EXISTS `conceptos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escu_areas`
--

CREATE TABLE IF NOT EXISTS `escu_areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idescu` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=91 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escus`
--

CREATE TABLE IF NOT EXISTS `escus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idzona` int(11) NOT NULL,
  `escu` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=88 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importaciones`
--

CREATE TABLE IF NOT EXISTS `importaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fila` int(11) NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liqs`
--

CREATE TABLE IF NOT EXISTS `liqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ida_p_c_ea` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `trab` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `anti` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `dias` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=127 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtiposnov` int(11) NOT NULL,
  `idcod_usr` int(11) NOT NULL,
  `ida_p_c_ea` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `monto` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `desc` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE IF NOT EXISTS `periodos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `desc` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE IF NOT EXISTS `planes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan` int(1) NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plan` (`plan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposnov`
--

CREATE TABLE IF NOT EXISTS `tiposnov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tiponov` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idperfil` int(11) NOT NULL,
  `usr` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nomb` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ape` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE IF NOT EXISTS `zonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `desc` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `zona` (`zona`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=16 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

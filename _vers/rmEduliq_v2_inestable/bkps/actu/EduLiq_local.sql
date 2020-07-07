-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2013 a las 05:46:59
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: 'eduliq'
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'agentes'
--

CREATE TABLE IF NOT EXISTS 'agentes' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'docu' int(8) NOT NULL,
  'cuil' varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  'nom' varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  'sexo' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ('id'),
  UNIQUE KEY 'idagente' ('id'),
  KEY 'docu' ('docu'),
  KEY 'docu_2' ('docu')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=95 ;

--
-- Volcado de datos para la tabla 'agentes'
--

INSERT INTO 'agentes' ('id', 'docu', 'cuil', 'nom', 'sexo') VALUES
(1, 623809, '27006238098', 'GARCIA RAMONA CLAUDIA', 'F'),
(2, 623868, '', 'MORENO PETRONA', 'F'),
(3, 623930, '', 'NORIEGA TOMASA DEL CARMEN', 'F'),
(4, 781314, '', 'TOLEDO RESTITUTA LIDIA', 'F'),
(5, 781512, '27007815129', 'FERNANDEZ MARIA ROSA', 'F'),
(6, 781761, '', 'VEGA AGUSTINA ANGELA ALC', 'F'),
(7, 781959, '', 'ZAMORA JUANA LUCIA', 'F'),
(8, 782356, '27007823563', 'PEREZ JULIA OFELIA', 'F'),
(9, 783698, '', 'PAEZ AGUSTINA DEL CARMEN', 'F'),
(10, 783935, '27007839354', 'ARIAS MARCELINA NENIA', 'F'),
(11, 784000, '', 'COFRE ANGELA HIPATIA', 'F'),
(12, 903766, '', 'VERA ALANIZ AIDEE DEL CAR', 'F'),
(13, 940704, '27009407044', 'NIETO MARIA FELIPA', 'F'),
(14, 941049, '27009410495', 'HERNANDEZ MARIA JULIA DEL', 'F'),
(15, 1385687, '', 'DEMARCO AIDA', 'F'),
(16, 1471185, '27014711851', 'BUSTOS OLGA MERCEDES', 'F'),
(17, 1553604, '', 'BUSTAMANTE ELBA ROSA', 'F'),
(18, 1795082, '', 'GARCIA ALEJANDRA SARA', 'F'),
(19, 1891778, '27018917780', 'HERRERA CHUMBITA ANGELA E', 'F'),
(20, 1949529, '27019495294', 'HERRERA MARIA LUISA', 'F'),
(21, 1961926, '', 'NADER ELENA ROSA', 'F'),
(22, 1979441, '27019794410', 'BAZAN ERNESTINA JOSEFA', 'F'),
(23, 1979580, '27019795808', 'GONZALEZ ELVA VICTORIA', 'F'),
(24, 2056785, '27020567851', 'HERRERA ROSAURA FELIPA', 'F'),
(25, 2251778, '27022517789', 'GUZMAN ESTELA BRIGIDA', 'F'),
(26, 2253329, '27022533296', 'REMENTERIA TERESA ZOILA', 'F'),
(27, 2311519, '27023115196', 'LUCERO AGUSTINA AZUCENA', 'F'),
(28, 2441061, '27024410612', 'BRIZUELA MARTA VIVIANA', 'F'),
(29, 2454767, '27024547677', 'TAPIA DOLORES TERESA', 'F'),
(30, 2724010, '', 'BASUALDO CARLINA', 'F'),
(31, 2724476, '27027244764', 'MERCADO MERCEDES DEL CARM', 'F'),
(32, 2748996, '27027489961', 'NAVAS LOLA', 'F'),
(33, 2765955, '27027659557', 'FUENTES ANGELICA FROILANA', 'F'),
(34, 2802834, '24028028349', 'CUENCA MARIA BLANCA', 'F'),
(35, 2803191, '27028031918', 'ASIS TERESITA DE JESUS', 'F'),
(36, 2831568, '', 'ALCALDE MARIA CELIA', 'F'),
(37, 2831583, '27028315835', 'SANCHEZ RENEE ESTHER', 'M'),
(38, 2898141, '', 'AIBAR EULOGIA DELMIRA', 'F'),
(39, 2978002, '', 'DURAN DOMINGA ANTONIA', 'F'),
(40, 2984717, '', 'BARRIONUEVO ELBA DEL VALL', 'F'),
(41, 3015082, '', 'BRIZUELA JUSTO RAMON', 'M'),
(42, 3168155, '27031681559', 'CANIZA OLGA DEL TRANSITO', 'F'),
(43, 3198130, '', 'BAIGORRI NEMECIA RITA', 'F'),
(44, 3237250, '27032372509', 'QUEVEDO BLANCA ELSA', 'F'),
(45, 3237326, '', 'MANESTAR ELIZABETH', 'F'),
(46, 3266918, '27032669188', 'LUJAN YOLANDA VICTORIA', 'F'),
(47, 3280067, '27032800675', 'MORENO AMALIA LORENZA', 'F'),
(48, 3331031, '27033310310', 'AGUERO OLGA DE LOS ANGELE', 'F'),
(49, 3336824, '', 'PERALTA TERESA ROMUALDA', 'F'),
(50, 3491071, '', 'AGUIRRE RENE ANGELA', 'F'),
(51, 3491096, '', 'SORIA IRMA GRISELDA', 'F'),
(52, 3492873, '', 'FUENTES TERESA AMALIA', 'F'),
(53, 3549902, '', 'ENZALATE ROSA', 'F'),
(54, 3549918, '27035499186', 'AGABIOS MARIA ISOLINA', 'F'),
(55, 3549944, '', 'AVILA MARIA IRIS', 'F'),
(56, 3585029, '27035850290', 'BRIZUELA MELBA TERESA', 'F'),
(57, 3585107, '27035851076', 'DIAZ DE TORRES ELSA MICAE', 'F'),
(58, 3585110, '27035851106', 'YACANTE RAMONA ROSA', 'F'),
(59, 3585172, '', 'FARIAS ANITA JULIA', 'F'),
(60, 3585178, '27035851785', 'GONZALEZ CARLOTA DEL CARM', 'F'),
(61, 3601017, '', 'ROMERO VERONICA NIEVE', 'F'),
(62, 3601018, '27036010180', 'BRIZUELA FLORENCIA NICOLA', 'F'),
(63, 3678107, '27036781071', 'PORRAS ANSELMA DOLORES', 'F'),
(64, 3678422, '27036784224', 'LUJAN MARIA LEVINA', 'F'),
(65, 3678427, '27036784275', 'ROMERO MARIA LUISA', 'F'),
(66, 3678531, '', 'FARACH ESMERIA JADIYE', 'F'),
(67, 3678567, '', 'MOLINA MARCIA ANTONIA', 'F'),
(68, 3678579, '27036785794', 'GONZALEZ JOSEFA RAMONA', 'F'),
(69, 3678617, '27036786170', 'VERA MARGARITA BLANCA', 'F'),
(70, 3687246, '', 'GAETAN ELISABETH DEL VALL', 'F'),
(71, 3690518, '27036905188', 'SANCHEZ RAMONA BLANCA ADA', 'F'),
(72, 3706699, '27037066996', 'DECIMA BLANCA NELIDA', 'F'),
(73, 3720956, '27037209568', 'MELIAN JUANA VICENTA', 'M'),
(74, 3722273, '27037222734', 'MORENO MAGDALENA RESTITUT', 'F'),
(75, 3743383, '', 'OSES VICENTA ELBA', 'F'),
(76, 3804635, '', 'BARROS NICOLASA', 'F'),
(77, 3804668, '', 'SEAREZ BRENDA MABEL', 'F'),
(78, 3804691, '', 'VI#AS LUISA ANTONIA YOLAN', 'F'),
(79, 3804695, '', 'PAEZ MARIA JULIA', 'F'),
(80, 3804706, '', 'ROMERO CRISOLOGA MARIA', 'F'),
(81, 3804746, '27038047464', 'MERCADO RAMONA MARGARITA', 'F'),
(82, 3804847, '', 'SOSA MARIA ELBA', 'F'),
(83, 3804985, '', 'RUADES MARIA DEL ROSARIO', 'F'),
(84, 3885446, '27038854467', 'SALZANO ELENA EDITH', 'F'),
(85, 3903633, '', 'ALMONACID ROSA ANSELMA', 'F'),
(86, 3903785, '27039037853', 'ORELLANA DOMINGA PETRONA', 'F'),
(87, 3903789, '', 'MASUD BEATRIZ AMIRA', 'F'),
(88, 3903798, '27039037985', 'PALACIOS TERESITA', 'F'),
(89, 3906320, '', 'VIDELA ASTENIA DEBORA', 'F'),
(90, 4081872, '', 'FUENTES CARLOS ALEJO', 'F'),
(91, 4109348, '', 'CALAS MIRNA TA#A', 'F'),
(92, 4141149, '', 'PANTOJA YOLA GLADYS', 'F'),
(93, 4166413, '', 'ALVAREZ FELICIDAD AURORA', 'F'),
(94, 4170200, '27041702007', 'QUINTEROS CANO DORA', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'agrups'
--

CREATE TABLE IF NOT EXISTS 'agrups' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'agru' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ('id'),
  KEY 'agru' ('agru')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla 'agrups'
--

INSERT INTO 'agrups' ('id', 'agru', 'desc') VALUES
(1, 'G', ''),
(2, 'D', ''),
(3, 'A', ''),
(4, 'M', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'areas'
--

CREATE TABLE IF NOT EXISTS 'areas' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'area' varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ('id'),
  KEY 'area' ('area')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla 'areas'
--

INSERT INTO 'areas' ('id', 'area', 'desc') VALUES
(1, 'TITUL', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'a_p'
--

CREATE TABLE IF NOT EXISTS 'a_p' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idagente' int(11) NOT NULL,
  'idplan' int(11) NOT NULL,
  PRIMARY KEY ('id'),
  KEY 'id' ('id'),
  KEY 'idagente' ('idagente'),
  KEY 'idagente_2' ('idagente'),
  KEY 'idplan' ('idplan')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=95 ;

--
-- Volcado de datos para la tabla 'a_p'
--

INSERT INTO 'a_p' ('id', 'idagente', 'idplan') VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1),
(50, 50, 1),
(51, 51, 1),
(52, 52, 1),
(53, 53, 1),
(54, 54, 1),
(55, 55, 1),
(56, 56, 1),
(57, 57, 1),
(58, 58, 1),
(59, 59, 1),
(60, 60, 1),
(61, 61, 1),
(62, 62, 1),
(63, 63, 1),
(64, 64, 1),
(65, 65, 1),
(66, 66, 1),
(67, 67, 1),
(68, 68, 1),
(69, 69, 1),
(70, 70, 1),
(71, 71, 1),
(72, 72, 1),
(73, 73, 1),
(74, 74, 1),
(75, 75, 1),
(76, 76, 1),
(77, 77, 1),
(78, 78, 1),
(79, 79, 1),
(80, 80, 1),
(81, 81, 1),
(82, 82, 1),
(83, 83, 1),
(84, 84, 1),
(85, 85, 1),
(86, 86, 1),
(87, 87, 1),
(88, 88, 1),
(89, 89, 1),
(90, 90, 1),
(91, 91, 1),
(92, 92, 1),
(93, 93, 1),
(94, 94, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'a_p_c_ea'
--

CREATE TABLE IF NOT EXISTS 'a_p_c_ea' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'ida_p' int(11) NOT NULL,
  'idcargo' int(11) NOT NULL,
  'idescu_area' int(11) NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=97 ;

--
-- Volcado de datos para la tabla 'a_p_c_ea'
--

INSERT INTO 'a_p_c_ea' ('id', 'ida_p', 'idcargo', 'idescu_area') VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 2, 3),
(4, 4, 3, 4),
(5, 5, 4, 5),
(6, 6, 2, 6),
(7, 7, 5, 2),
(8, 8, 6, 2),
(9, 9, 1, 7),
(10, 10, 6, 8),
(11, 11, 7, 2),
(12, 12, 7, 9),
(13, 13, 8, 10),
(14, 14, 8, 11),
(15, 15, 7, 2),
(16, 16, 8, 12),
(17, 17, 9, 13),
(18, 18, 1, 14),
(19, 19, 7, 15),
(20, 20, 1, 2),
(21, 21, 7, 16),
(22, 22, 7, 12),
(23, 23, 4, 2),
(24, 24, 10, 17),
(25, 25, 8, 2),
(26, 26, 4, 18),
(27, 27, 11, 2),
(28, 27, 10, 2),
(29, 28, 1, 2),
(30, 29, 12, 19),
(31, 30, 1, 2),
(32, 31, 13, 2),
(33, 32, 3, 4),
(34, 33, 7, 20),
(35, 34, 2, 12),
(36, 35, 8, 21),
(37, 36, 7, 22),
(38, 37, 7, 22),
(39, 38, 8, 23),
(40, 39, 1, 24),
(41, 40, 8, 25),
(42, 41, 14, 2),
(43, 42, 1, 26),
(44, 43, 1, 18),
(45, 44, 9, 27),
(46, 45, 7, 28),
(47, 46, 1, 1),
(48, 47, 4, 4),
(49, 48, 4, 5),
(50, 49, 4, 2),
(51, 50, 1, 2),
(52, 51, 4, 2),
(53, 52, 8, 29),
(54, 53, 7, 30),
(55, 54, 7, 2),
(56, 55, 15, 31),
(57, 56, 7, 12),
(58, 57, 1, 4),
(59, 58, 1, 2),
(60, 59, 1, 2),
(61, 60, 16, 2),
(62, 61, 1, 4),
(63, 62, 2, 32),
(64, 63, 4, 2),
(65, 64, 9, 33),
(66, 65, 8, 33),
(67, 66, 7, 34),
(68, 67, 7, 35),
(69, 68, 7, 36),
(70, 69, 7, 37),
(71, 70, 7, 22),
(72, 71, 7, 2),
(73, 71, 8, 11),
(74, 72, 17, 8),
(75, 73, 18, 18),
(76, 74, 4, 38),
(77, 75, 1, 2),
(78, 76, 1, 2),
(79, 77, 8, 39),
(80, 78, 9, 40),
(81, 79, 8, 28),
(82, 80, 6, 41),
(83, 81, 1, 5),
(84, 82, 4, 7),
(85, 83, 9, 39),
(86, 84, 7, 42),
(87, 85, 4, 18),
(88, 86, 8, 25),
(89, 87, 8, 43),
(90, 88, 19, 18),
(91, 89, 2, 44),
(92, 90, 4, 2),
(93, 91, 7, 45),
(94, 92, 8, 20),
(95, 93, 8, 46),
(96, 94, 20, 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'cargos'
--

CREATE TABLE IF NOT EXISTS 'cargos' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idagru' int(11) NOT NULL,
  'cargo' varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla 'cargos'
--

INSERT INTO 'cargos' ('id', 'idagru', 'cargo', 'desc') VALUES
(1, 1, 'G08', ''),
(2, 2, 'D17', ''),
(3, 1, 'G12', ''),
(4, 1, 'G06', ''),
(5, 3, 'G22', ''),
(6, 1, 'G10', ''),
(7, 2, 'D02', ''),
(8, 2, 'D01', ''),
(9, 2, 'D08', ''),
(10, 2, 'D05', ''),
(11, 3, 'G17', ''),
(12, 2, 'D23', ''),
(13, 3, 'G09', ''),
(14, 3, 'G16', ''),
(15, 2, 'D07', ''),
(16, 3, 'G19', ''),
(17, 1, 'G09', ''),
(18, 4, 'G18', ''),
(19, 4, 'G08', ''),
(20, 2, 'D04', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'codigos'
--

CREATE TABLE IF NOT EXISTS 'codigos' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'codigo' varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'cod_usr'
--

CREATE TABLE IF NOT EXISTS 'cod_usr' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idcodigo' int(11) NOT NULL,
  'idusuario' int(11) NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'conceptos'
--

CREATE TABLE IF NOT EXISTS 'conceptos' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'concepto' varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'escus'
--

CREATE TABLE IF NOT EXISTS 'escus' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idzona' int(11) NOT NULL,
  'escu' varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla 'escus'
--

INSERT INTO 'escus' ('id', 'idzona', 'escu', 'desc') VALUES
(1, 1, '000', ''),
(2, 2, '000', ''),
(3, 2, '396', ''),
(4, 3, '000', ''),
(5, 4, '000', ''),
(6, 5, 'N04', ''),
(7, 6, '000', ''),
(8, 5, '000', ''),
(9, 3, '136', ''),
(10, 7, '261', ''),
(11, 2, '361', ''),
(12, 2, 'N01', ''),
(13, 2, '287', ''),
(14, 8, '000', ''),
(15, 9, '257', ''),
(16, 7, '189', ''),
(17, 9, '377', ''),
(18, 7, '000', ''),
(19, 10, '200', ''),
(20, 2, '190', ''),
(21, 2, '245', ''),
(22, 7, 'N02', ''),
(23, 9, '141', ''),
(24, 11, '000', ''),
(25, 7, '166', ''),
(26, 10, '000', ''),
(27, 7, '194', ''),
(28, 7, '001', ''),
(29, 2, '249', ''),
(30, 7, 'A03', ''),
(31, 10, '036', ''),
(32, 1, '020', ''),
(33, 2, '369', ''),
(34, 2, '177', ''),
(35, 2, '365', ''),
(36, 2, '252', ''),
(37, 3, '258', ''),
(38, 12, '000', ''),
(39, 6, '028', ''),
(40, 2, '175', ''),
(41, 9, '000', ''),
(42, 2, '253', ''),
(43, 7, '029', ''),
(44, 3, '339', ''),
(45, 7, '370', ''),
(46, 2, '299', ''),
(47, 9, 'E23', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'escu_areas'
--

CREATE TABLE IF NOT EXISTS 'escu_areas' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idescu' int(11) NOT NULL,
  'idarea' int(11) NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla 'escu_areas'
--

INSERT INTO 'escu_areas' ('id', 'idescu', 'idarea') VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'importacion'
--

CREATE TABLE IF NOT EXISTS 'importacion' (
  'docu' int(8) NOT NULL,
  'cuil' varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  'trab' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'nom' varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  'sexo' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'zona' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'zbco' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'escu' varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  'prog' int(2) NOT NULL,
  'proy' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'sublp' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'acti' int(2) NOT NULL,
  'plan' int(1) NOT NULL,
  'sint' int(2) NOT NULL,
  'fnaa' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'fnmm' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'fndd' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'anti' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'hora' varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  'agru' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'lcat' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'ncat' varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  'dias' varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  'liti' float NOT NULL,
  'lits' float NOT NULL,
  'enba' float NOT NULL,
  'brut' float NOT NULL,
  'sala' float NOT NULL,
  'tick' float NOT NULL,
  'liqu' float NOT NULL,
  'lgasto' float NOT NULL,
  'bono' float NOT NULL,
  'adic' float NOT NULL,
  'area' varchar(5) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'importaciones'
--

CREATE TABLE IF NOT EXISTS 'importaciones' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'timport' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'nomb_bd' varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  'col_dbf' int(2) NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla 'importaciones'
--

INSERT INTO 'importaciones' ('id', 'timport', 'nomb_bd', 'col_dbf') VALUES
(1, 'p', 'docu', 0),
(2, 'p', 'cuil', 1),
(3, 'p', 'trab', 2),
(4, 'p', 'nom', 3),
(5, 'p', 'sexo', 4),
(6, 'p', 'zona', 5),
(7, 'p', 'escu', 7),
(8, 'p', 'plan', 12),
(9, 'p', 'anti', 17),
(10, 'p', 'hora', 18),
(11, 'p', 'agru', 19),
(12, 'p', 'lcat', 20),
(13, 'p', 'ncat', 21),
(14, 'p', 'dias', 22),
(15, 'p', 'area', 33),
(16, 'h', 'docu', 0),
(17, 'h', 'cuil', 1),
(18, 'h', 'trab', 2),
(19, 'h', 'nom', 3),
(20, 'h', 'sexo', 4),
(21, 'h', 'zona', 5),
(22, 'h', 'escu', 6),
(23, 'h', 'plan', 7),
(24, 'h', 'anti', 8),
(25, 'h', 'hora', 9),
(26, 'h', 'agru', 10),
(27, 'h', 'lcat', 11),
(28, 'h', 'ncat', 12),
(29, 'h', 'dias', 13),
(30, 'h', 'area', 16),
(31, 'h', 'periodo', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'liqs'
--

CREATE TABLE IF NOT EXISTS 'liqs' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'ida_p_c_ea' int(11) NOT NULL,
  'idperiodo' int(11) NOT NULL,
  'trab' varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  'anti' varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  'hora' varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  'dias' varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=97 ;

--
-- Volcado de datos para la tabla 'liqs'
--

INSERT INTO 'liqs' ('id', 'ida_p_c_ea', 'idperiodo', 'trab', 'anti', 'hora', 'dias') VALUES
(1, 1, 1, '0', '10', '035', ''),
(2, 2, 1, '0', '19', '035', ''),
(3, 3, 1, '0', '24', '035', ''),
(4, 4, 1, '0', '35', '035', ''),
(5, 5, 1, '0', '07', '035', ''),
(6, 6, 1, '0', '22', '035', ''),
(7, 7, 1, '0', '09', '035', ''),
(8, 8, 1, '0', '23', '035', ''),
(9, 9, 1, '0', '09', '035', ''),
(10, 10, 1, '0', '23', '035', ''),
(11, 11, 1, '0', '17', '035', ''),
(12, 12, 1, '0', '24', '035', ''),
(13, 13, 1, '0', '12', '035', ''),
(14, 14, 1, '0', '17', '035', ''),
(15, 15, 1, '0', '20', '035', ''),
(16, 16, 1, '0', '24', '035', ''),
(17, 17, 1, '0', '20', '035', ''),
(18, 18, 1, '0', '22', '035', ''),
(19, 19, 1, '0', '24', '035', ''),
(20, 20, 1, '0', '21', '035', ''),
(21, 21, 1, '0', '20', '035', ''),
(22, 22, 1, '0', '11', '035', ''),
(23, 23, 1, '0', '08', '035', ''),
(24, 24, 1, '0', '13', '035', ''),
(25, 25, 1, '0', '22', '035', ''),
(26, 26, 1, '0', '08', '035', ''),
(27, 27, 1, '0', '23', '035', ''),
(28, 28, 1, '0', '12', '035', ''),
(29, 29, 1, '0', '15', '035', ''),
(30, 30, 1, '0', '24', '035', ''),
(31, 31, 1, '0', '20', '035', ''),
(32, 32, 1, '0', '07', '035', ''),
(33, 33, 1, '0', '27', '035', ''),
(34, 34, 1, '0', '15', '035', ''),
(35, 35, 1, '0', '15', '035', ''),
(36, 36, 1, '0', '24', '035', ''),
(37, 37, 1, '0', '26', '035', ''),
(38, 38, 1, '0', '28', '035', ''),
(39, 39, 1, '0', '17', '035', ''),
(40, 40, 1, '0', '11', '035', ''),
(41, 41, 1, '0', '15', '035', ''),
(42, 42, 1, '0', '36', '035', ''),
(43, 43, 1, '0', '10', '035', ''),
(44, 44, 1, '0', '10', '035', ''),
(45, 45, 1, '0', '22', '035', ''),
(46, 46, 1, '0', '20', '035', ''),
(47, 47, 1, '0', '11', '035', ''),
(48, 48, 1, '0', '06', '035', ''),
(49, 49, 1, '0', '05', '035', ''),
(50, 50, 1, '0', '06', '035', ''),
(51, 51, 1, '0', '19', '035', ''),
(52, 52, 1, '0', '25', '035', ''),
(53, 53, 1, '0', '17', '035', ''),
(54, 54, 1, '0', '22', '035', ''),
(55, 55, 1, '0', '24', '035', ''),
(56, 56, 1, '0', '24', '035', ''),
(57, 57, 1, '0', '24', '035', ''),
(58, 58, 1, '0', '09', '035', ''),
(59, 59, 1, '0', '10', '035', ''),
(60, 60, 1, '0', '21', '035', ''),
(61, 61, 1, '0', '25', '035', ''),
(62, 62, 1, '0', '14', '035', ''),
(63, 63, 1, '0', '15', '035', ''),
(64, 64, 1, '0', '08', '035', ''),
(65, 65, 1, '0', '20', '035', ''),
(66, 66, 1, '0', '10', '035', ''),
(67, 67, 1, '0', '17', '035', ''),
(68, 68, 1, '0', '20', '035', ''),
(69, 69, 1, '0', '17', '035', ''),
(70, 70, 1, '0', '24', '035', ''),
(71, 71, 1, '0', '20', '035', ''),
(72, 72, 1, '0', '17', '035', ''),
(73, 73, 1, '0', '17', '035', ''),
(74, 74, 1, '0', '20', '035', ''),
(75, 75, 1, '0', '07', '035', ''),
(76, 76, 1, '0', '10', '035', ''),
(77, 77, 1, '0', '19', '035', ''),
(78, 78, 1, '0', '21', '035', ''),
(79, 79, 1, '0', '24', '035', ''),
(80, 80, 1, '0', '20', '035', ''),
(81, 81, 1, '0', '12', '035', ''),
(82, 82, 1, '0', '23', '035', ''),
(83, 83, 1, '0', '00', '035', ''),
(84, 84, 1, '0', '06', '035', ''),
(85, 85, 1, '0', '24', '035', ''),
(86, 86, 1, '0', '15', '035', ''),
(87, 87, 1, '0', '07', '035', ''),
(88, 88, 1, '0', '12', '035', ''),
(89, 89, 1, '0', '10', '035', ''),
(90, 90, 1, '0', '09', '035', ''),
(91, 91, 1, '0', '20', '035', ''),
(92, 92, 1, '0', '06', '035', ''),
(93, 93, 1, '0', '17', '035', ''),
(94, 94, 1, '0', '15', '035', ''),
(95, 95, 1, '0', '22', '035', ''),
(96, 96, 1, '0', '22', '035', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'novedades'
--

CREATE TABLE IF NOT EXISTS 'novedades' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idtiposnov' int(11) NOT NULL,
  'idcod_usr' int(11) NOT NULL,
  'ida_p_c_ea' int(11) NOT NULL,
  'idperiodo' int(11) NOT NULL,
  'monto' double NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'perfiles'
--

CREATE TABLE IF NOT EXISTS 'perfiles' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'perfil' varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'periodos'
--

CREATE TABLE IF NOT EXISTS 'periodos' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'periodo' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla 'periodos'
--

INSERT INTO 'periodos' ('id', 'periodo', 'desc') VALUES
(1, '199801', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'planes'
--

CREATE TABLE IF NOT EXISTS 'planes' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'plan' int(1) NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ('id'),
  KEY 'plan' ('plan')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla 'planes'
--

INSERT INTO 'planes' ('id', 'plan', 'desc') VALUES
(1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'tiposnov'
--

CREATE TABLE IF NOT EXISTS 'tiposnov' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'tiponov' varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'tsueldos'
--

CREATE TABLE IF NOT EXISTS 'tsueldos' (
  'agente' int(11) NOT NULL,
  'mes' int(11) NOT NULL,
  'anio' int(11) NOT NULL,
  'cargo' varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  'escuela' varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  'dias_liq' int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'usuarios'
--

CREATE TABLE IF NOT EXISTS 'usuarios' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'idperfil' int(11) NOT NULL,
  'usr' varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  'pass' varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  'nomb' varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  'ape' varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  'dir' varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  'tel' varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  'email' varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'zonas'
--

CREATE TABLE IF NOT EXISTS 'zonas' (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'zona' varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  'desc' varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY ('id'),
  KEY 'zona' ('zona')
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla 'zonas'
--

INSERT INTO 'zonas' ('id', 'zona', 'desc') VALUES
(1, 'M', ''),
(2, 'B', ''),
(3, 'L', ''),
(4, 'N', ''),
(5, 'F', ''),
(6, 'H', ''),
(7, 'D', ''),
(8, 'O', ''),
(9, 'A', ''),
(10, 'E', ''),
(11, 'J', ''),
(12, 'I', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2015 a las 00:44:22
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Estatus` varchar(45) DEFAULT NULL,
  `Modalidad` varchar(45) DEFAULT NULL,
  `Creditos` int(11) DEFAULT NULL,
  `Ingreso` date DEFAULT NULL,
  `Egreso` date DEFAULT NULL,
  `Semestre` int(11) DEFAULT NULL,
  `Carerra` varchar(5) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Codigo`, `Nombre`, `Correo`, `Telefono`, `Estatus`, `Modalidad`, `Creditos`, `Ingreso`, `Egreso`, `Semestre`, `Carerra`) VALUES
(208694931, 'Manuel Alejandro Urbano AlcalÃ¡', NULL, NULL, 'Activo', 'Tesis, tesina e informes', 0, '2012-08-19', NULL, 2, ''),
(209664068, 'Capetillo Gomez Delia Nayeli', NULL, NULL, 'Activo', NULL, NULL, '2012-08-19', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `Modalidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modalidades`
--

INSERT INTO `modalidades` (`Modalidad`) VALUES
('Tesis, tesina e informes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `Creditos` int(11) NOT NULL,
  `Codigo` int(11) DEFAULT NULL,
  `Semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `Estatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`Estatus`) VALUES
('Activo'),
('Licencia'),
('Articulo 33'),
('Articulo 34'),
('Articulo 35'),
('Articulo 36'),
('Egresado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

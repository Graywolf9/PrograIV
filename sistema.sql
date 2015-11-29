CREATE DATABASE sistema;
USE sistema;
-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2015 at 05:34 PM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
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
  `Carrera` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`Codigo`, `Nombre`, `Correo`, `Telefono`, `Estatus`, `Modalidad`, `Creditos`, `Ingreso`, `Egreso`, `Semestre`, `Carrera`) VALUES
(93659317, 'BAUTISTA MURILLO, JOSE CARLOS', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(207513453, 'CERVANTES BERAUD, JOSE JUAN', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(207522673, 'COPADO MORA, ADRIAN', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(207711689, 'BARRAGAN GUEVARA, FREDDY', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'LTIN'),
(208671591, 'GARCIA SANCHEZ, JESUS ANGEL', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(208694931, 'Manuel Alejandro Urbano AlcalÃ¡', NULL, NULL, 'Activo', 'Tesis, tesina e informes', 0, '2012-08-19', NULL, 2, ''),
(209664068, 'Capetillo Gomez Delia Nayeli', NULL, NULL, 'Activo', NULL, NULL, '2012-08-19', NULL, NULL, ''),
(209692754, 'GONZALEZ ORTEGA, CYNTHIA PAOLA', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'LTIN'),
(209695591, 'LEONIDES HERNANDEZ, LORENA YATZMIN', NULL, NULL, '', '', 352, '0000-00-00', NULL, 7, 'LTIN'),
(212247176, 'ARANDA CARRANZA, MICHELLE NOEMI', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(212247427, 'RODRIGUEZ VALADEZ, MARICELA', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'LTIN'),
(212342136, 'CONTRERAS HERNANDEZ, JUAN RAMON', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'LTIN'),
(212342144, 'OROZCO HERNANDEZ, MIGUEL ANGEL', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(212342233, 'VAZQUEZ BRISENO, OMAR ALEJANDRO', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(212342292, 'PEREZ NAPOLES, VIRIDIANA JACQU', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN'),
(212342314, 'MENDIVIL SERNA, ROSA HELYA', NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, 'SIN');

-- --------------------------------------------------------

--
-- Table structure for table `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `Modalidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modalidades`
--

INSERT INTO `modalidades` (`Modalidad`) VALUES
('Tesis, tesina e informes'),
('Examenes CENEVAL,Global Teorico Practico'),
('Certificasion'),
('Promedio'),
('Excelencia Academica.');

-- --------------------------------------------------------

--
-- Table structure for table `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `Creditos` int(11) NOT NULL,
  `Codigo` int(11) DEFAULT NULL,
  `Semestre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `Estatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Estatus`) VALUES
('Activo'),
('Licencia'),
('Articulo 33'),
('Articulo 34'),
('Articulo 35'),
('Articulo 36'),
('Egresado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`Codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

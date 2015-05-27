-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-05-2015 a las 19:04:40
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Conferencia`
--

CREATE TABLE IF NOT EXISTS `Conferencia` (
  `id_conferencia` int(5) NOT NULL AUTO_INCREMENT,
  `Conferencia` varchar(100) NOT NULL,
  `Auditorio` varchar(100) NOT NULL,
  `Hora` time NOT NULL,
  PRIMARY KEY (`id_conferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Curso`
--

CREATE TABLE IF NOT EXISTS `Curso` (
  `id_curso` int(5) NOT NULL AUTO_INCREMENT,
  `Curso` varchar(200) NOT NULL,
  `Costo` int(100) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Institucion`
--

CREATE TABLE IF NOT EXISTS `Institucion` (
  `id_institucion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_Inscritos`
--

CREATE TABLE IF NOT EXISTS `Tipo_Inscritos` (
  `id_tipo` int(5) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  `costo` int(100) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Tipo_Inscritos`
--

INSERT INTO `Tipo_Inscritos` (`id_tipo`, `tipo`, `costo`) VALUES
(1, 'Estudiante', 60),
(2, 'Expositor', 50),
(3, 'Organizador', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User_conferencia`
--

CREATE TABLE IF NOT EXISTS `User_conferencia` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(5) NOT NULL,
  `id_conferencia` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Cedula` int(10) NOT NULL,
  `id_tipo` int(5) NOT NULL,
  `id_curso` int(5) NOT NULL,
  `id_institucion` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

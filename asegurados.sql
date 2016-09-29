-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2016 a las 20:43:38
-- Versión del servidor: 10.1.17-MariaDB
-- Versión de PHP: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `obsequio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asegurados`
--

CREATE TABLE `asegurados` (
  `id` int(11) NOT NULL,
  `titular` int(9) NOT NULL,
  `beneficiario` int(9) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `parentesco` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tlf1` int(15) NOT NULL,
  `tlf2` int(15) NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `desde` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hasta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `campana` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subgrupo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `consultas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asegurados`
--
ALTER TABLE `asegurados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asegurados`
--
ALTER TABLE `asegurados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

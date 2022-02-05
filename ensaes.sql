-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 20:48:10
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ensaes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(2) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_5m`
--

CREATE TABLE `a_5m` (
  `control` bigint(16) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `callenum` varchar(8) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `codigopostal` int(5) NOT NULL,
  `municipio` varchar(90) NOT NULL,
  `telefonocasa` bigint(10) NOT NULL,
  `telefonomovil` bigint(10) NOT NULL,
  `telefononotificacion` bigint(10) NOT NULL,
  `email` varchar(90) NOT NULL,
  `huella` varchar(90) NOT NULL,
  `niprecuperacion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `a_5m`
--

INSERT INTO `a_5m` (`control`, `nombre`, `apellidop`, `apellidom`, `calle`, `callenum`, `colonia`, `codigopostal`, `municipio`, `telefonocasa`, `telefonomovil`, `telefononotificacion`, `email`, `huella`, `niprecuperacion`) VALUES
(32423434323, 'PERLA BELEM', 'TORRES', 'PEREZ', 'DURANGO', '65', 'CENTRO', 37800, 'DOLORES HIDALGO', 1822222, 4183372112, 3333333333, 'm_fwxzog@t.odmail.cn', '38hd8dhD6R84w65se', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_5o`
--

CREATE TABLE `a_5o` (
  `control` bigint(16) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidop` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `callenum` varchar(8) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `codigopostal` int(5) NOT NULL,
  `municipio` varchar(90) NOT NULL,
  `telefonocasa` bigint(10) NOT NULL,
  `telefonomovil` bigint(10) NOT NULL,
  `telefononotificacion` bigint(10) NOT NULL,
  `email` varchar(90) NOT NULL,
  `huella` varchar(90) NOT NULL,
  `niprecuperacion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `a_5m`
--
ALTER TABLE `a_5m`
  ADD PRIMARY KEY (`control`);

--
-- Indices de la tabla `a_5o`
--
ALTER TABLE `a_5o`
  ADD PRIMARY KEY (`control`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

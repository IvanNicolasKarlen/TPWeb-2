-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2019 a las 06:40:32
-- Versión del servidor: 5.7.25-log
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logintp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Argentina'),
(2, 'Brasil'),
(3, 'Bolivia'),
(4, 'Chile'),
(5, 'Colombia'),
(6, 'Ecuador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `Nombre`, `pais`) VALUES
(1, 'ejemplo1@gmail.com', '1234', 'Ejemplo', ''),
(2, 'Nicolas@gmail.com', '1234', 'Nicolas', ''),
(3, 'Nicolas@gmail.com', '1234', 'Nicolas', ''),
(4, 'Viendo@gmail.com', '1234', 'Viendo', ''),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', ''),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', ''),
(7, 'user@gmail.com', '12', 'Usuario', ''),
(8, 'Roberto@hotmail.com', '12', 'Roberto', ''),
(9, 'UserNew@gmail.com', '1234', 'UsuarioNuevo', ''),
(10, 'Esteban@gmail.com', '12345', 'Esteban', ''),
(11, 'ejemplo2@gmail.com', '123', 'ejemplo2', 'Argentina'),
(12, '', '', '', 'Argentina'),
(13, 'ejemplo3@gmail.com', '123', 'ejemplo3', 'Bolivia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2019 a las 00:24:47
-- Versión del servidor: 5.7.25-log
-- Versión de PHP: 7.3.0

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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `precio` double NOT NULL,
  `formasdepago` varchar(100) NOT NULL,
  `envio` varchar(100) NOT NULL,
  `marca` varchar(70) NOT NULL,
  `stock` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `whatsapp` int(11) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `imgprincipal` varchar(80) NOT NULL,
  `modelo1` varchar(80) NOT NULL,
  `modelo2` varchar(80) NOT NULL,
  `modelo3` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `estado`, `precio`, `formasdepago`, `envio`, `marca`, `stock`, `telefono`, `whatsapp`, `genero`, `descripcion`, `imgprincipal`, `modelo1`, `modelo2`, `modelo3`) VALUES
(1, 'Zapatillas Modernas', 'Nuevo', 1200, '', '', 'Nike', 12, 456, 154321, 'Masculino', '', '', '', '', ''),
(2, 'Zapatillas Adidas', 'Usado', 1400, '', 'on', 'Adidas', 1200, 46574323, 1538764554, 'Masculino', 'Zapatillas Adidas usadas pero impecables', '', '', '', ''),
(3, 'Promociono Ojotas', 'Usado', 700, '', 'Domicilio con Cargo', 'Torres', 1200, 46758439, 1538799873, 'Masculino', 'Soy una descripcion ', '15940444_1318220971550973_7681097437073195512_n.jpg', 'DSC05655[1].jpg', '15940444_1318220971550973_7681097437073195512_n.jpg', 'DSC05655[1].jpg'),
(4, 'Remeras de Tela', 'Nuevo', 300, '', 'Entrega en Local', 'Lacoste', 20, 49894323, 1548988432, 'Unisex', 'Probando 1 2 3 4', '15940444_1318220971550973_7681097437073195512_n.jpg', '', '', ''),
(5, 'Remeras de Algodon Super Comodas', 'Nuevo', 1230, 'Efectivo', 'Entrega en Local', 'Nike', 300, 45654345, 1456543254, 'Unisex', 'Remeras Remeras de Algodon Super Comodas', '15940444_1318220971550973_7681097437073195512_n.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `Nombre`, `pais`, `latitud`, `longitud`) VALUES
(1, 'ejemplo1@gmail.com', '1234', 'Ejemplo', '', 0, 0),
(2, 'Nicolas@gmail.com', '1234', 'Nicolas', '', 0, 0),
(3, 'Nicolas@gmail.com', '1234', 'Nicolas', '', 0, 0),
(4, 'Viendo@gmail.com', '1234', 'Viendo', '', 0, 0),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', '', 0, 0),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', '', 0, 0),
(7, 'user@gmail.com', '12', 'Usuario', '', 0, 0),
(8, 'Roberto@hotmail.com', '12', 'Roberto', '', 0, 0),
(9, 'UserNew@gmail.com', '1234', 'UsuarioNuevo', '', 0, 0),
(10, 'Esteban@gmail.com', '12345', 'Esteban', '', 0, 0),
(11, 'Ismael@gmail.com', '145', 'Ismael', '', 0, 0),
(12, 'Diegote@gmail.com', '1234', 'Diego', '', 0, 0),
(13, 'Maicol@gmail.com', '1234', 'Maicol', '', 0, 0),
(14, 'Luis@gmail.com', 'abcd', 'Luis', '', 0, 0),
(15, 'ejemplo5@gmail.com', '123', 'ejemplo5', 'Colombia', 0, 0),
(16, 'ejemplo6@gmail.com', '123', 'ejemplo6', 'Bolivia', 0, 0),
(17, 'ejemplo7@gmail.com', '123', 'ejemplo7', 'Brasil', 0, 0),
(18, 'ejemplo8@gmail.com', '123', 'ejemplo8', 'Ecuador', 0, 0),
(19, 'ejemplo9@gmail.com', '123', 'ejemplo9', 'Chile', 0, 0),
(20, 'ejemplo99@gmail.com', '123', 'ejemplo99', 'Argentina', 0, 0),
(21, 'Domi@gmail.com', '1234', 'Dominio', 'Argentina', -34.717815099999996, -58.4841618);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
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
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

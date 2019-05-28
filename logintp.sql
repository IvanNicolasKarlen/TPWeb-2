-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2019 a las 20:37:19
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
  `genero` varchar(60) NOT NULL,
  `categoria` varchar(110) NOT NULL,
  `palabrasClaves` varchar(110) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `imgprincipal` varchar(80) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `estado`, `precio`, `formasdepago`, `envio`, `marca`, `stock`, `genero`, `categoria`, `palabrasClaves`, `descripcion`, `imgprincipal`, `idUsuario`) VALUES
(1, 'Zapatillas Modernas', 'Nuevo', 1200, 'Efectivo', 'Gratis', 'Nike', 12, 'Masculino', 'Productos y otros', 'palabra\nclave', 'descrip', 'main-product01.jpg', 1),
(2, 'Zapatillas Adidas', 'Usado', 1400, 'Efectivo', 'Gratis', 'Adidas', 1200, 'Masculino', 'Productos y otros', 'palabra\nclave', 'Zapatillas Adidas usadas pero impecables', '', 3),
(3, 'Promociono Ojotas', 'Usado', 700, '', 'Domicilio con Cargo', 'Torres', 1200, 'Masculino', 'Productos y otros', 'palabra\nclave', 'Soy una descripcion ', '15940444_1318220971550973_7681097437073195512_n.jpg', 3),
(26, 'R', 'Nuevo', 66, 'Tarjeta', 'Domicilio', 'GF', 6, 'Mujer', 'Productos y otros', 'palabra\nclave', 'RF', 'imagen3.jpg', 3),
(27, 'i', 'Usado', 7, 'Transferencia Bancaria', 'Domicilio', 'j', 7, 'Hombre', 'Productos y otros', 'palabra\nclave', 'j', 'imagen3.jpg', 3),
(28, 'Ver', 'Usado', 1223, 'Cualquier forma de pago', 'Domicilio con cargo', 'Nie', 23, 'Mujer', 'Productos y otros', 'palabra\nclave', '', 'imagen3.jpg', 3),
(29, 'Viendo', 'Nuevo', 2233, 'Mercado de Pago', 'Gratis', 'Nke', 2, 'Mujer', 'Productos y otros', 'palabra\nclave', 'dsssd', 'imagen3.jpg', 6),
(30, 'Juamch', 'Nuevo', 2345, 'Cualquier forma de pago', 'Domicilio con cargo', 'Mokle', 3, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Hpla', 'imagen3.jpg', 7),
(31, 'Juancho', 'Usado', 12345, 'Tarjeta', 'Domicilio', 'Nike', 32, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Juan', 'imagen3.jpg', 7),
(32, 'Juancho2', 'Nuevo', 12345, 'Transferencia Bancaria', 'Domicilio', 'Mike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Bueno', 'imagen3.jpg', 7),
(33, 'Juancho3', 'Nuevo', 12345, 'Transferencia Bancaria', 'Domicilio', 'Mike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Bueno', 'imagen3.jpg', 9),
(34, 'Juancho4', 'Nuevo', 12345, 'Transferencia Bancaria', 'Domicilio', 'Mike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Bueno', 'imagen3.jpg', 14),
(35, 'Juancho5', 'Nuevo', 12345, 'Transferencia Bancaria', 'Domicilio', 'Mike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Bueno', 'imagen3.jpg', 9),
(36, 'Juancho6', 'Nuevo', 12345, 'Transferencia Bancaria', 'Domicilio', 'Mike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Bueno', 'imagen3.jpg', 3),
(37, 'aaaaaaaaa', 'Nuevo', 2, 'Efectivo', 'Gratis', 'dddddddddd', 2, 'Hombre', 'Productos y otros', 'palabra\nclave', 'aaaaaa', 'imagen3.jpg', 1),
(38, 'bbbbb', 'Nuevo', 99, 'Cualquier forma de pago', 'Gratis', 'nvbjh', 99, 'Hombre', 'Productos y otros', 'palabra\nclave', 'b', 'imagen2 - copia.jpg', 1),
(39, 'pppp', 'Nuevo', 9, 'Efectivo', 'Gratis', 'pppp', 9, 'Hombre', 'Productos y otros', 'palabra\nclave', 'pppp', 'imagen3.jpg', 4),
(40, 'sss', 'Nuevo', 22, 'Mercado de Pago', 'Domicilio', 'ss', 22, 'Hombre', 'Productos y otros', 'palabra\nclave', 'ss', 'imagen3.jpg', 4),
(41, 'k', 'Usado', 77, 'Mercado de Pago', 'Gratis', 'k', 77, 'Hombre', 'Productos y otros', 'palabra\nclave', '7k', 'imagen2 - copia.jpg', 4),
(42, 'ddddddd', 'Nuevo', 3, 'Efectivo', 'Gratis', 'd', 3, 'Mujer', 'Productos y otros', 'palabra\nclave', '3', 'imagen3.jpg', 9),
(43, 'Zapatillas Modernas', 'Nuevo', 1200, 'Transferencia Bancaria', 'Gratis', 'Nike', 20, 'Infantil', 'Productos y otros', 'Zapatillas Dibujos Animados', '', 'a.jpg', 2),
(44, 'Remeras para colegios', 'Nuevo', 300, 'Efectivo', 'Domicilio con cargo', 'Suavicer', 2000, 'Infantil', 'Productos y otros', 'Remeras Dibujos Colegios', 'Remeras para colegios primarios', 'b.jpg', 2),
(45, 'Autos chocados', 'Usado', 40000, 'Tarjeta', 'Entrega en local', 'Toyota', 1, 'Unisex', 'Vehiculos', 'Auto Chocado Usado Toyota', 'Auto Chocado Usado Toyota', 'd.jpg', 2),
(46, 'Autos chocados', 'Usado', 40000, 'Tarjeta', 'Entrega en local', 'Toyota', 1, 'Unisex', 'Vehiculos', 'Auto Chocado Usado Toyota', 'Auto Chocado Usado Toyota', 'd.jpg', 2);

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
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `Nombre`, `pais`, `latitud`, `longitud`, `rol`) VALUES
(1, 'ejemplo1@gmail.com', '1234', 'Ejemplo', '', '0', '0', 'usuario'),
(2, 'Nicolas@gmail.com', '1234', 'Nicolas', '', '0', '0', 'usuario'),
(3, 'Nicolas@gmail.com', '1234', 'Nicolas', '', '0', '0', 'usuario'),
(4, 'Viendo@gmail.com', '1234', 'Viendo', '', '0', '0', 'usuario'),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', '', '0', '0', 'usuario'),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', '', '0', '0', 'usuario'),
(7, 'user@gmail.com', '12', 'Usuario', '', '0', '0', 'usuario'),
(8, 'Roberto@hotmail.com', '12', 'Roberto', '', '0', '0', 'usuario'),
(9, 'UserNew@gmail.com', '1234', 'UsuarioNuevo', '', '0', '0', 'usuario'),
(10, 'Esteban@gmail.com', '12345', 'Esteban', '', '0', '0', 'usuario'),
(11, 'Ismael@gmail.com', '145', 'Ismael', '', '0', '0', 'usuario'),
(12, 'Diegote@gmail.com', '1234', 'Diego', '', '0', '0', 'usuario'),
(13, 'Maicol@gmail.com', '1234', 'Maicol', '', '0', '0', 'usuario'),
(14, 'Luis@gmail.com', 'abcd', 'Luis', '', '0', '0', 'usuario'),
(15, 'ejemplo5@gmail.com', '123', 'ejemplo5', 'Colombia', '0', '0', 'usuario'),
(16, 'ejemplo6@gmail.com', '123', 'ejemplo6', 'Bolivia', '0', '0', 'usuario'),
(17, 'ejemplo7@gmail.com', '123', 'ejemplo7', 'Brasil', '0', '0', 'usuario'),
(18, 'ejemplo8@gmail.com', '123', 'ejemplo8', 'Ecuador', '0', '0', 'usuario'),
(19, 'ejemplo9@gmail.com', '123', 'ejemplo9', 'Chile', '0', '0', 'administrador'),
(20, 'ejemplo99@gmail.com', '123', 'ejemplo99', 'Argentina', '0', '0', 'usuario'),
(21, 'Domi@gmail.com', '1234', 'Dominio', 'Argentina', '-34.717815099999996', '-58.4841618', 'administrador'),
(22, 'men@gmail.com', '1234', 'Men', 'Argentina', '-34.7178069', '-58.4841452', 'usuario'),
(23, 'z@gmail.com', '1234', 'z', '', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario'),
(24, 'zz@gmail.com', '1234', 'zz', 'Brasil', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario'),
(25, 'DiegoteEEEE@gmail.com', '1234', 'Diegote', 'Argentina', '-34.7177995', '-58.4841682', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

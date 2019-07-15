-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2019 a las 21:46:47
-- Versión del servidor: 5.7.25-log
-- Versión de PHP: 7.3.3

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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `visitas`) VALUES
(1, 'Servicios', 1),
(2, 'Inmuebles', 21),
(3, 'Vehiculos', 8),
(4, 'Productos y otros', 308);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `texto` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `idChat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `texto`, `idUsuario`, `nombreUsuario`, `idProducto`, `idVendedor`, `idChat`) VALUES
(11, 'Mensaje privado', 6, 0, 1, 1, 1),
(13, 'Me alegro por ti', 1, 0, 1, 1, 1),
(14, 'Â¿Has recibido el item?', 1, 0, 1, 1, 1),
(15, 'Hola', 6, 0, 1, 1, 1),
(16, 'Â¿Estas?', 6, 0, 1, 1, 1),
(17, 'Â¿Estas?', 6, 0, 1, 1, 1),
(18, 'Que tal?', 6, 0, 1, 1, 1),
(19, 'Que tal?', 6, 0, 1, 1, 1),
(22, 'Buenaas', 6, 0, 1, 1, 1),
(23, 'ey', 1, 0, 1, 1, 1),
(24, 'Si', 6, 0, 1, 1, 1),
(25, 'a', 6, 0, 1, 1, 1),
(27, 'Hola como hacemos ?', 21, 0, 1, 1, 2),
(28, 'Ivan, has recibido el producto?', 1, 0, 1, 1, 1),
(30, 'Hola, nos encontramos en Capital?', 1, 0, 1, 1, 2),
(31, 'Si, estoy de Acuerdo.', 21, 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `idUsuario`, `idProducto`, `cantidad`, `costo`) VALUES
(19, 6, 1, 1, 1200),
(20, 6, 3, 1, 700),
(21, 6, 46, 1, 2520000),
(26, 21, 1, 1, 1200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgprincipal`
--

CREATE TABLE `imgprincipal` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imgprincipal`
--

INSERT INTO `imgprincipal` (`id`, `idProducto`, `nombre`) VALUES
(1, 61, 'imagen2.jpg'),
(3, 1, 'zm01.jpg'),
(4, 2, 'adidaszz.jpg'),
(5, 43, 'pinup.jpg'),
(6, 44, 'b.jpg'),
(7, 45, 'd.jpg'),
(8, 46, 'dpto2.jpg'),
(9, 3, '15940444_1318220971550973_7681097437073195512_n.jpg '),
(10, 62, 'imagen2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgproducto`
--

CREATE TABLE `imgproducto` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imgproducto`
--

INSERT INTO `imgproducto` (`id`, `idProducto`, `nombre`) VALUES
(1, 61, 'unlam.jpg'),
(2, 61, 'imagen2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Estructura de tabla para la tabla `porcentaje`
--

CREATE TABLE `porcentaje` (
  `id` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `porcentaje`
--

INSERT INTO `porcentaje` (`id`, `valor`) VALUES
(1, 0.4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `formasdepago` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `envio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `genero` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `palabrasClaves` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `latitud` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `estado`, `precio`, `formasdepago`, `envio`, `marca`, `stock`, `genero`, `categoria`, `palabrasClaves`, `descripcion`, `visitas`, `idUsuario`, `latitud`, `longitud`, `ventas`) VALUES
(1, 'Zapatillas Modernas', 'Nuevo', 1200, 'Efectivo', 'Gratis', 'Nike', 12, 'Hombre', 4, 'palabra\nclave', 'descrip', 270, 1, '', '', 202),
(2, 'Zapatillas Adidas', 'Usado', 1400, 'Efectivo', 'Gratis', 'Adidas', 1200, 'Hombre', 4, 'palabra\nclave', 'Zapatillas Adidas usadas pero impecables', 270, 3, '', '', 20),
(3, 'Promociono Ojotas', 'Usado', 700, '', 'Domicilio con Cargo', 'Torres', 1200, 'Unisex', 4, 'palabra\nclave', 'Soy una descripcion ', 270, 3, '', '', 4),
(43, 'Vestido marinero PinUp', 'Nuevo', 3200, 'Transferencia Bancaria', 'Gratis', 'BrillaDark', 20, 'Mujer', 4, 'Vestido pinup', 'Hermoso vestido', 270, 7, '', '', 9),
(44, 'Remeras para colegios', 'Nuevo', 300, 'Efectivo', 'Domicilio con cargo', 'Suavicer', 2000, 'Infantil', 4, 'Remeras Dibujos Colegios', 'Remeras para colegios primarios', 270, 2, '', '', 3),
(45, 'Toyota Corola', 'Usado', 430000, 'Tarjeta', 'Entrega en local', 'Toyota', 1, 'Unisex', 3, 'Auto Usado Toyota', 'Auto Usado Toyota', 270, 2, '', '', 15),
(46, 'Depto. 2 ambientes', 'Usado', 2520000, 'Tarjeta', 'Entrega en local', 'Inmuebles Alfredo', 1, 'Unisex', 2, 'departamento', 'Departamento 2 ambientes capital', 270, 2, '', '', 28),
(61, 'Cuadros de Arte', 'Nuevo', 2000, 'Mercado de Pago', 'Gratis', 'Torres', 200, 'Unisex', 4, '', 'Realizo cuadres de arte de todo tipo', 270, 6, '', '', 30),
(62, 'Cuadros', 'Nuevo', 10000, 'Mercado de Pago', 'Entrega en local', 'Cornelio ', 1, 'Unisex', 4, '', '', 270, 6, '-34.6163127', '-58.42878189999999', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productocarrito`
--

CREATE TABLE `productocarrito` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productocarrito`
--

INSERT INTO `productocarrito` (`id`, `idUsuario`, `idProducto`, `cantidad`) VALUES
(1, 2, 44, 1),
(2, 2, 46, 1),
(4, 2, 45, 1),
(5, 2, 1, 1),
(21, 21, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipouser`
--

CREATE TABLE `tipouser` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipouser`
--

INSERT INTO `tipouser` (`id`, `tipo`) VALUES
(1, 'Usuario Top'),
(2, 'Usuario Medio Pelo'),
(3, 'Usuario Pa\'tras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id` int(11) NOT NULL,
  `idPorcentaje` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id`, `idPorcentaje`, `idUsuario`, `total`) VALUES
(1, 1, 7, 105.5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pais` int(11) NOT NULL,
  `latitud` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `longitud` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `idTipoUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `nombre`, `estado`, `pais`, `latitud`, `longitud`, `rol`, `idTipoUser`) VALUES
(1, 'ejemplo1@gmail.com', '1234', 'Ejemplo', 'ok', 1, '0', '0', 'usuario', 3),
(2, 'Nicolas@gmail.com', '1234', 'Nicolas', 'ok', 1, '0', '0', 'usuario', 1),
(3, 'Nicolas7@gmail.com', '1234', 'Nicolas', 'ok', 1, '0', '0', 'usuario', 3),
(4, 'Viendo@gmail.com', '1234', 'Viendo', 'ok', 1, '0', '0', 'usuario', 3),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', 'ok', 1, '0', '0', 'usuario', 2),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', 'ok', 2, '0', '0', 'administrador', 1),
(7, 'user@gmail.com', '12', 'Usuario', 'ok', 1, '0', '0', 'usuario', 1),
(8, 'Roberto@hotmail.com', '12', 'Roberto', '', 3, '0', '0', 'usuario', 1),
(9, 'UserNew@gmail.com', '1234', 'UsuarioNuevo', '', 1, '0', '0', 'usuario', 2),
(10, 'Esteban@gmail.com', '12345', 'Esteban', '', 1, '0', '0', 'usuario', 3),
(11, 'Ismael@gmail.com', '145', 'Ismael', 'ok', 3, '0', '0', 'usuario', 3),
(12, 'Diegote@gmail.com', '1234', 'Diego', 'ok', 3, '0', '0', 'usuario', 2),
(13, 'Maicol@gmail.com', '1234', 'Maicol', 'ok', 3, '0', '0', 'usuario', 1),
(14, 'Luis@gmail.com', 'abcd', 'Luis', 'Bloqueado', 2, '0', '0', 'usuario', 2),
(15, 'ejemplo5@gmail.com', '123', 'ejemplo5', 'ok', 2, '0', '0', 'usuario', 1),
(16, 'ejemplo6@gmail.com', '123', 'ejemplo6', 'ok', 1, '0', '0', 'usuario', 1),
(21, 'Domi@gmail.com', '1234', 'Dominio', 'ok', 1, '-34.717815099999996', '-58.4841618', 'administrador', 2),
(25, 'DiegoteEEEE@gmail.com', '1234', 'Diegote', 'ok', 1, '-34.7177995', '-58.4841682', 'usuario', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `comentario` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `puntaje` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id`, `comentario`, `puntaje`, `idUsuario`, `idVendedor`) VALUES
(1, 'muy amable', 5, 6, 2),
(2, 'tuve un problema con la compra y me lo solucionó rápidamente', 4, 3, 2),
(3, 'genial', 5, 10, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idVendedor` (`idVendedor`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `imgprincipal`
--
ALTER TABLE `imgprincipal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `porcentaje`
--
ALTER TABLE `porcentaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `tipouser`
--
ALTER TABLE `tipouser`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPorcentaje` (`idPorcentaje`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pais` (`pais`),
  ADD KEY `idTipoUser` (`idTipoUser`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idVendedor` (`idVendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `imgprincipal`
--
ALTER TABLE `imgprincipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `porcentaje`
--
ALTER TABLE `porcentaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tipouser`
--
ALTER TABLE `tipouser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`idVendedor`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `imgprincipal`
--
ALTER TABLE `imgprincipal`
  ADD CONSTRAINT `imgprincipal_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  ADD CONSTRAINT `imgproducto_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  ADD CONSTRAINT `productocarrito_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `productocarrito_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`idPorcentaje`) REFERENCES `porcentaje` (`id`),
  ADD CONSTRAINT `transaccion_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `pais` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idTipoUser`) REFERENCES `tipouser` (`id`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`idVendedor`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

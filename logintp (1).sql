-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2019 a las 07:11:38
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `visitas`) VALUES
(1, 'Servicios', 1),
(2, 'Inmuebles', 23),
(3, 'Vehiculos', 11),
(4, 'Productos y otros', 341);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `texto` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `idChat` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `texto`, `idUsuario`, `nombreUsuario`, `idProducto`, `idVendedor`, `idChat`, `fecha`) VALUES
(11, 'Mensaje privado', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(13, 'Me alegro por ti', 1, 'Ejemplo', 1, 1, 1, '2019-07-16 00:50:15'),
(14, 'Â¿Has recibido el item?', 1, 'Ejemplo', 1, 1, 1, '2019-07-16 00:50:15'),
(15, 'Hola', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(16, 'Â¿Estas?', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(17, 'Â¿Estas?', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(18, 'Que tal?', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(19, 'Que tal?', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(22, 'Buenaas', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(23, 'ey', 1, 'Ejemplo', 1, 1, 1, '2019-07-16 00:50:15'),
(24, 'Si', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(25, 'a', 6, 'Ivan', 1, 1, 1, '2019-07-16 00:50:15'),
(27, 'Hola como hacemos ?', 21, 'Dominio', 1, 1, 2, '2019-07-16 00:50:15'),
(28, 'Ivan, has recibido el producto?', 1, 'Ejemplo', 1, 1, 1, '2019-07-16 00:50:15'),
(30, 'Hola, nos encontramos en Capital?', 1, 'Ejemplo', 1, 1, 2, '2019-07-16 00:50:15'),
(31, 'Si, estoy de Acuerdo.', 21, 'Dominio', 1, 1, 2, '2019-07-16 00:50:15'),
(32, 'Hola me ves ?', 25, 'Ale', 3, 3, 0, '2019-07-16 00:50:15'),
(33, 'Viendo', 3, 'Nico', 3, 3, 0, '2019-07-16 00:53:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vendedor` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `idUsuario`, `idProducto`, `cantidad`, `costo`, `fecha`, `vendedor`) VALUES
(19, 6, 1, 1, 1200, '2019-07-16 17:29:48', ''),
(20, 6, 3, 1, 700, '2019-07-16 17:29:48', ''),
(21, 6, 46, 1, 2520000, '2019-07-16 17:29:48', ''),
(26, 21, 1, 1, 1200, '2019-07-16 17:29:48', ''),
(31, 1, 1, 1, 1200, '2019-07-16 17:30:31', 'Ejemplo'),
(32, 100, 1, 1, 1200, '2019-07-20 01:25:54', 'Ejemplo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgprincipal`
--

CREATE TABLE `imgprincipal` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
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
(10, 62, 'imagen2.jpg'),
(11, 63, 'img_lights.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgproducto`
--

CREATE TABLE `imgproducto` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
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
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
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
(6, 'Ecuador'),
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
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `porcentaje`
--

INSERT INTO `porcentaje` (`id`, `valor`) VALUES
(1, 0.4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id` int(11) NOT NULL,
  `texto` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `idComprador` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `texto`, `idComprador`, `idVendedor`, `idProducto`, `fecha`) VALUES
(1, 'Hola estas?', 0, 1, 1, '2019-07-16 17:33:47'),
(2, 'ffd', 100, 1, 1, '2019-07-20 01:26:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `formasdepago` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `envio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `genero` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `palabrasClaves` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `latitud` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `estado`, `precio`, `formasdepago`, `envio`, `marca`, `stock`, `genero`, `categoria`, `palabrasClaves`, `descripcion`, `visitas`, `idUsuario`, `latitud`, `longitud`, `ventas`) VALUES
(1, 'Zapatillas Modernas', 'Nuevo', 1200, 'Efectivo', 'Gratis', 'Nike', 9, 'Hombre', 'Productos y otros', 'palabra\nclave', 'descrip', 1, 1, '', '', 205),
(2, 'Zapatillas Adidas', 'Usado', 1400, 'Efectivo', 'Gratis', 'Adidas', 1200, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Zapatillas Adidas usadas pero impecables', 1, 3, '', '', 20),
(3, 'Promociono Ojotas', 'Usado', 700, '', 'Domicilio con Cargo', 'Torres', 1198, 'Unisex', 'Productos y otros', 'palabra\nclave', 'Soy una descripcion ', 1, 3, '', '', 6),
(43, 'Vestido marinero PinUp', 'Nuevo', 3200, 'Transferencia Bancaria', 'Gratis', 'BrillaDark', 20, 'Mujer', 'Productos y otros', 'Vestido pinup', 'Hermoso vestido', 1, 7, '', '', 9),
(44, 'Remeras para colegios', 'Nuevo', 300, 'Efectivo', 'Domicilio con cargo', 'Suavicer', 2000, 'Infantil', 'Productos y otros', 'Remeras Dibujos Colegios', 'Remeras para colegios primarios', 1, 2, '', '', 3),
(45, 'Toyota Corola', 'Usado', 430000, 'Tarjeta', 'Entrega en local', 'Toyota', 1, 'Unisex', 'Vehiculos', 'Auto Usado Toyota', 'Auto Usado Toyota', 1, 2, '', '', 15),
(46, 'Depto. 2 ambientes', 'Usado', 2520000, 'Tarjeta', 'Entrega en local', 'Inmuebles Alfredo', 1, 'Unisex', 'Inmuebles', 'departamento', 'Departamento 2 ambientes capital', 1, 2, '', '', 28),
(61, 'Cuadros de Arte', 'Nuevo', 2000, 'Mercado de Pago', 'Gratis', 'Torres', 200, 'Unisex', 'Productos y otros', '', 'Realizo cuadres de arte de todo tipo', 1, 6, '', '', 30),
(62, 'Cuadros', 'Nuevo', 10000, 'Mercado de Pago', 'Entrega en local', 'Cornelio ', 1, 'Unisex', 'Productos y otros', '', '', 1, 6, '-34.6163127', '-58.42878189999999', 40),
(63, 'Ver', 'Nuevo', 1234, 'Mercado de Pago', 'Domicilio con cargo', 'visa', 12, 'Mujer', 'Vehiculos', 'Colres calros', 'Hola', 1, 6, '-34.6097408', '-58.366280399999994', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productocarrito`
--

CREATE TABLE `productocarrito` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productocarrito`
--

INSERT INTO `productocarrito` (`id`, `idUsuario`, `idProducto`, `cantidad`, `vendedor`) VALUES
(1, 2, 44, 1, 0),
(2, 2, 46, 1, 0),
(4, 2, 45, 1, 0),
(5, 2, 1, 1, 0),
(21, 21, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `texto` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id`, `idUsuario`, `texto`, `idPregunta`, `fecha`) VALUES
(1, 100, 'jhk', 2, '2019-07-20 01:26:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipouser`
--

CREATE TABLE `tipouser` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipouser`
--

INSERT INTO `tipouser` (`id`, `tipo`) VALUES
(1, 'Usuario Top'),
(2, 'Usuario Medio Pelo'),
(3, 'Usuario Pa tras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id` int(11) NOT NULL,
  `idPorcentaje` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id`, `idPorcentaje`, `idUsuario`, `total`) VALUES
(1, 1, 7, 105.5),
(2, 1, 3, 12880),
(3, 1, 5, 0),
(4, 1, 5, 0),
(7, 1, 1, 97440),
(9, 1, 100, 0),
(10, 1, 99, 0),
(11, 1, 25, 0),
(12, 1, 89, 0),
(13, 1, 99, 0),
(14, 1, 100, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `longitud` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `idTipoUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `Nombre`, `estado`, `pais`, `latitud`, `longitud`, `rol`, `idTipoUser`) VALUES
(1, 'ejemplo1@gmail.com', '1234', 'Ejemplo', 'ok', '', '0', '0', 'usuario', 3),
(2, 'Nicolas@gmail.com', '1234', 'Nicolas', 'ok', '', '0', '0', 'usuario', 0),
(3, 'Nicolas7@gmail.com', '1234', 'Nico', 'ok', '', '0', '0', 'usuario', 3),
(4, 'Viendo@gmail.com', '1234', 'Viendo', 'ok', '', '0', '0', 'usuario', 0),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', 'ok', '', '0', '0', 'usuario', 0),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', 'ok', '', '0', '0', 'administrador', 0),
(7, 'user@gmail.com', '12', 'Usuario', 'ok', '', '0', '0', 'usuario', 0),
(8, 'Roberto@hotmail.com', '12', 'Roberto', 'ok', '', '0', '0', 'usuario', 0),
(9, 'UserNew@gmail.com', '1234', 'UsuarioNuevo', 'ok', '', '0', '0', 'usuario', 0),
(10, 'Esteban@gmail.com', '12345', 'Esteban', 'ok', '', '0', '0', 'usuario', 0),
(11, 'Ismael@gmail.com', '145', 'Ismael', 'ok', '', '0', '0', 'usuario', 0),
(12, 'Diegote@gmail.com', '1234', 'Diego', 'ok', '', '0', '0', 'usuario', 0),
(13, 'Maicol@gmail.com', '1234', 'Maicol', 'ok', '', '0', '0', 'usuario', 0),
(14, 'Luis@gmail.com', 'abcd', 'Luis', 'Bloqueado', '', '0', '0', 'usuario', 0),
(15, 'ejemplo5@gmail.com', '123', 'ejemplo5', 'ok', 'Colombia', '0', '0', 'usuario', 0),
(16, 'ejemplo6@gmail.com', '123', 'ejemplo6', 'ok', 'Bolivia', '0', '0', 'usuario', 0),
(21, 'Domi@gmail.com', '1234', 'Dominio', 'ok', 'Argentina', '-34.717815099999996', '-58.4841618', 'administrador', 0),
(25, 'Ale@gmail.com', '1234', 'Ale', 'ok', 'Argentina', '-34.7177995', '-58.4841682', 'usuario', 0),
(88, 'l@gmail.com', '4444', 'j', 'h', '665', '6', '6', '6', 0),
(89, 'a@gmail.com', '1', 's', 'ok', 'Argentina', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario', 3),
(99, 'b@gmail.com', '1111', 'a', 'ok', 'Argentina', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario', 3),
(100, 'c@gmail.com', '2222', 'c', 'ok', 'Argentina', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `comentario` varchar(600) COLLATE utf8_spanish_ci DEFAULT NULL,
  `puntaje` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idVendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id`, `comentario`, `puntaje`, `idUsuario`, `idVendedor`) VALUES
(1, 'muy amable', 5, 6, 2),
(2, 'tuve un problema con la compra y me lo soluciono rapidamente', 4, 3, 2),
(3, 'genial', 5, 10, 2),
(4, 's', 3, 100, 1);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imgprincipal`
--
ALTER TABLE `imgprincipal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `porcentaje`
--
ALTER TABLE `porcentaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `producto` ADD FULLTEXT KEY `nombre` (`nombre`,`estado`,`marca`,`genero`,`palabrasClaves`,`descripcion`,`envio`);

--
-- Indices de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPregunta` (`idPregunta`);

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
  ADD KEY `idPorcentaje` (`idPorcentaje`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `imgprincipal`
--
ALTER TABLE `imgprincipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `porcentaje`
--
ALTER TABLE `porcentaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`idPregunta`) REFERENCES `pregunta` (`id`);

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`idPorcentaje`) REFERENCES `porcentaje` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

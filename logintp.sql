-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2019 a las 04:25:43
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
  `nombre` varchar(80) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `visitas`) VALUES
(1, 'Servicios', 1),
(2, 'Inmuebles', 2),
(3, 'Vehiculos', 18),
(4, 'Productos y otros', 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `idUsuario`, `idProducto`, `cantidad`, `costo`) VALUES
(84, 6, 1, 5, 6000),
(85, 6, 63, 1, 99),
(86, 6, 1, 5, 6000),
(87, 6, 63, 1, 999999999),
(88, 6, 1, 5, 6000),
(89, 6, 1, 5, 6000),
(90, 6, 63, 6, 5994),
(91, 6, 1, 5, 6000),
(92, 6, 63, 6, 5994),
(93, 6, 61, 1, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgprincipal`
--

CREATE TABLE `imgprincipal` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imgprincipal`
--

INSERT INTO `imgprincipal` (`id`, `idProducto`, `nombre`) VALUES
(1, 61, 'imagen2.jpg'),
(2, 63, 'descarga (1).jpg'),
(3, 1, 'zm01.jpg'),
(4, 2, 'adidaszz.jpg'),
(5, 43, 'pinup.jpg'),
(6, 44, 'b.jpg'),
(7, 45, 'd.jpg'),
(8, 46, 'dpto2.jpg'),
(9, 3, '15940444_1318220971550973_7681097437073195512_n.jpg ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgproducto`
--

CREATE TABLE `imgproducto` (
  `id` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `visitas` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `latitud` varchar(120) NOT NULL,
  `longitud` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `estado`, `precio`, `formasdepago`, `envio`, `marca`, `stock`, `genero`, `categoria`, `palabrasClaves`, `descripcion`, `visitas`, `idUsuario`, `latitud`, `longitud`) VALUES
(1, 'Zapatillas Modernas', 'Nuevo', 1200, 'Efectivo', 'Gratis', 'Nike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'descrip', 18, 1, '', ''),
(2, 'Zapatillas Adidas', 'Usado', 1400, 'Efectivo', 'Gratis', 'Adidas', 1200, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Zapatillas Adidas usadas pero impecables', 18, 3, '', ''),
(3, 'Promociono Ojotas', 'Usado', 700, '', 'Domicilio con Cargo', 'Torres', 1200, 'Unisex', 'Productos y otros', 'palabra\nclave', 'Soy una descripcion ', 18, 3, '', ''),
(43, 'Vestido marinero PinUp', 'Nuevo', 3200, 'Transferencia Bancaria', 'Gratis', 'BrillaDark', 20, 'Mujer', 'Productos y otros', 'Vestido pinup', 'Hermoso vestido', 18, 7, '', ''),
(44, 'Remeras para colegios', 'Nuevo', 300, 'Efectivo', 'Domicilio con cargo', 'Suavicer', 2000, 'Infantil', 'Productos y otros', 'Remeras Dibujos Colegios', 'Remeras para colegios primarios', 18, 2, '', ''),
(45, 'Toyota Corola', 'Usado', 430000, 'Tarjeta', 'Entrega en local', 'Toyota', 1, 'Unisex', 'Vehiculos', 'Auto Usado Toyota', 'Auto Usado Toyota', 18, 2, '', ''),
(46, 'Depto. 2 ambientes', 'Usado', 2520000, 'Tarjeta', 'Entrega en local', 'Inmuebles Alfredo', 1, 'Unisex', 'Inmuebles', 'departamento', 'Departamento 2 ambientes capital', 18, 2, '', ''),
(61, 'Cuadros de Artee', 'Nuevo', 2000, 'Tarjeta', 'Gratis', 'Torres', 200, 'Hombre', 'Productos y otros', 'i', 'Realizo cuadres de arte de todo tipo', 18, 6, '', ''),
(63, 'Cuadernillo', 'Nuevo', 100, 'Mercado de Pago', 'Gratis', 'avon', 1, 'Unisex', 'Productos y otros\r\n', 'g', 'g', 18, 6, '-34.74426400000001', '-58.70015790000002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productocarrito`
--

CREATE TABLE `productocarrito` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productocarrito`
--

INSERT INTO `productocarrito` (`id`, `idUsuario`, `idProducto`, `cantidad`) VALUES
(35, 6, 1, 5),
(48, 6, 63, 6),
(49, 6, 61, 1);

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
(3, 'Nicolas7@gmail.com', '1234', 'Nicolas', '', '0', '0', 'usuario'),
(4, 'Viendo@gmail.com', '1234', 'Viendo', '', '0', '0', 'usuario'),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', '', '0', '0', 'usuario'),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', '', '0', '0', 'administrador'),
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
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
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
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);
ALTER TABLE `producto` ADD FULLTEXT KEY `imgprincipal` (`nombre`,`formasdepago`,`envio`);
ALTER TABLE `producto` ADD FULLTEXT KEY `nombre` (`nombre`,`estado`,`marca`,`genero`,`palabrasClaves`,`descripcion`,`envio`);

--
-- Indices de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
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
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `productocarrito`
--
ALTER TABLE `productocarrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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

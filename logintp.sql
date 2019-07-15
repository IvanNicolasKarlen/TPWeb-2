-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2019 a las 01:21:40
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
(2, 'Inmuebles', 19),
(3, 'Vehiculos', 8),
(4, 'Productos y otros', 306);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `texto` varchar(300) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `idChat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `texto`, `idUsuario`, `nombreUsuario`, `idProducto`, `idVendedor`, `idChat`) VALUES
(11, 'Mensaje privado', 6, 'Ivan', 1, 1, 1),
(13, 'Me alegro por ti', 1, 'Ejemplo', 1, 1, 1),
(14, 'Â¿Has recibido el item?', 1, 'Ejemplo', 1, 1, 1),
(15, 'Hola', 6, 'Ivan', 1, 1, 1),
(16, 'Â¿Estas?', 6, 'Ivan', 1, 1, 1),
(17, 'Â¿Estas?', 6, 'Ivan', 1, 1, 1),
(18, 'Que tal?', 6, 'Ivan', 1, 1, 1),
(19, 'Que tal?', 6, 'Ivan', 1, 1, 1),
(22, 'Buenaas', 6, 'Ivan', 1, 1, 1),
(23, 'ey', 1, 'Ejemplo', 1, 1, 1),
(24, 'Si', 6, 'Ivan', 1, 1, 1),
(25, 'a', 6, 'Ivan', 1, 1, 1),
(27, 'Hola como hacemos ?', 21, 'Dominio', 1, 1, 2),
(28, 'Ivan, has recibido el producto?', 1, 'Ejemplo', 1, 1, 1),
(30, 'Hola, nos encontramos en Capital?', 1, 'Ejemplo', 1, 1, 2),
(31, 'Si, estoy de Acuerdo.', 21, 'Dominio', 1, 1, 2);

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
  `imgprincipal` varchar(80) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `latitud` varchar(120) NOT NULL,
  `longitud` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `estado`, `precio`, `formasdepago`, `envio`, `marca`, `stock`, `genero`, `categoria`, `palabrasClaves`, `descripcion`, `visitas`, `imgprincipal`, `idUsuario`, `latitud`, `longitud`) VALUES
(1, 'Zapatillas Modernas', 'Nuevo', 1200, 'Efectivo', 'Gratis', 'Nike', 12, 'Hombre', 'Productos y otros', 'palabra\nclave', 'descrip', 256, 'zm01.jpg', 1, '', ''),
(2, 'Zapatillas Adidas', 'Usado', 1400, 'Efectivo', 'Gratis', 'Adidas', 1200, 'Hombre', 'Productos y otros', 'palabra\nclave', 'Zapatillas Adidas usadas pero impecables', 232, 'adidaszz.jpg', 3, '', ''),
(3, 'Promociono Ojotas', 'Usado', 700, '', 'Domicilio con Cargo', 'Torres', 1200, 'Unisex', 'Productos y otros', 'palabra\nclave', 'Soy una descripcion ', 232, '15940444_1318220971550973_7681097437073195512_n.jpg', 3, '', ''),
(43, 'Vestido marinero PinUp', 'Nuevo', 3200, 'Transferencia Bancaria', 'Gratis', 'BrillaDark', 20, 'Mujer', 'Productos y otros', 'Vestido pinup', 'Hermoso vestido', 232, 'pinup.jpg', 7, '', ''),
(44, 'Remeras para colegios', 'Nuevo', 300, 'Efectivo', 'Domicilio con cargo', 'Suavicer', 2000, 'Infantil', 'Productos y otros', 'Remeras Dibujos Colegios', 'Remeras para colegios primarios', 232, 'b.jpg', 2, '', ''),
(45, 'Toyota Corola', 'Usado', 430000, 'Tarjeta', 'Entrega en local', 'Toyota', 1, 'Unisex', 'Vehiculos', 'Auto Usado Toyota', 'Auto Usado Toyota', 232, 'd.jpg', 2, '', ''),
(46, 'Depto. 2 ambientes', 'Usado', 2520000, 'Tarjeta', 'Entrega en local', 'Inmuebles Alfredo', 1, 'Unisex', 'Inmuebles', 'departamento', 'Departamento 2 ambientes capital', 238, 'dpto2.jpg', 2, '', ''),
(61, 'Cuadros de Arte', 'Nuevo', 2000, 'Mercado de Pago', 'Gratis', 'Torres', 200, 'Unisex', 'Productos y otros', '', 'Realizo cuadres de arte de todo tipo', 233, 'not_863107_20_215919.jpg', 6, '', ''),
(62, 'Cuadros', 'Nuevo', 10000, 'Mercado de Pago', 'Entrega en local', 'Cornelio ', 1, 'Unisex', 'Productos y otros', '', '', 232, 'not_863107_20_215919.jpg', 6, '-34.6163127', '-58.42878189999999');

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
(1, 2, 44, 1),
(2, 2, 46, 1),
(3, 2, 46, 1),
(4, 2, 45, 1),
(5, 2, 1, 1),
(6, 2, 1, 1),
(7, 2, 2, 1),
(8, 2, 2, 1),
(9, 2, 3, 7),
(10, 2, 3, 7),
(11, 2, 44, 9),
(12, 2, 46, 2),
(13, 2, 46, 2),
(14, 2, 46, 2),
(17, 2, 3, 5),
(18, 2, 1, 12),
(19, 2, 1, 2),
(20, 2, 44, 1),
(21, 21, 1, 1);

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
  `rol` varchar(100) NOT NULL,
  `idTipoUser` int(11),
  FOREIGN KEY (idTipoUser) references tipoUser(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tipoUser (id,tipo)
VALUES		(1,"Usuario Top"),
			(2,"Usuario Medio Pelo"),
            (3,"Usuario Pa'tras");
--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `Nombre`, `pais`, `latitud`, `longitud`, `rol`,`idTipoUser`) VALUES
(1, 'ejemplo1@gmail.com', '1234', 'Ejemplo', '', '0', '0', 'usuario',2),
(2, 'Nicolas@gmail.com', '1234', 'Nicolas', '', '0', '0', 'usuario',1),
(3, 'Nicolas7@gmail.com', '1234', 'Nicolas', '', '0', '0', 'usuario',1),
(4, 'Viendo@gmail.com', '1234', 'Viendo', '', '0', '0', 'usuario',2),
(5, 'Gustavo@gmail.com', '1234', 'Gustavo', '', '0', '0', 'usuario',3),
(6, 'Ivan@hotmail.com', '1234', 'Ivan', '', '0', '0', 'administrador',1),
(7, 'user@gmail.com', '12', 'Usuario', '', '0', '0', 'usuario',1),
(8, 'Roberto@hotmail.com', '12', 'Roberto', '', '0', '0', 'usuario',3),
(9, 'UserNew@gmail.com', '1234', 'UsuarioNuevo', '', '0', '0', 'usuario',2),
(10, 'Esteban@gmail.com', '12345', 'Esteban', '', '0', '0', 'usuario',3),
(11, 'Ismael@gmail.com', '145', 'Ismael', '', '0', '0', 'usuario',1),
(12, 'Diegote@gmail.com', '1234', 'Diego', '', '0', '0', 'usuario',3),
(13, 'Maicol@gmail.com', '1234', 'Maicol', '', '0', '0', 'usuario',1),
(14, 'Luis@gmail.com', 'abcd', 'Luis', '', '0', '0', 'usuario',2),
(15, 'ejemplo5@gmail.com', '123', 'ejemplo5', 'Colombia', '0', '0', 'usuario',1),
(16, 'ejemplo6@gmail.com', '123', 'ejemplo6', 'Bolivia', '0', '0', 'usuario',2),
(17, 'ejemplo7@gmail.com', '123', 'ejemplo7', 'Brasil', '0', '0', 'usuario',2),
(18, 'ejemplo8@gmail.com', '123', 'ejemplo8', 'Ecuador', '0', '0', 'usuario',1),
(19, 'ejemplo9@gmail.com', '123', 'ejemplo9', 'Chile', '0', '0', 'administrador',1),
(20, 'ejemplo99@gmail.com', '123', 'ejemplo99', 'Argentina', '0', '0', 'usuario',3),
(21, 'Domi@gmail.com', '1234', 'Dominio', 'Argentina', '-34.717815099999996', '-58.4841618', 'administrador',1),
(22, 'men@gmail.com', '1234', 'Men', 'Argentina', '-34.7178069', '-58.4841452', 'usuario',2),
(23, 'z@gmail.com', '1234', 'z', '', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario',2),
(24, 'zz@gmail.com', '1234', 'zz', 'Brasil', 'Null', 'Usuario nego la solicitud de Geolocalizacion.', 'usuario',3),
(25, 'DiegoteEEEE@gmail.com', '1234', 'Diegote', 'Argentina', '-34.7177995', '-58.4841682', 'usuario',1);

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
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);
ALTER TABLE `producto` ADD FULLTEXT KEY `imgprincipal` (`imgprincipal`,`nombre`,`formasdepago`,`envio`);
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


CREATE TABLE valoracion(
	id int(11) NOT NULL auto_increment,
    comentario varchar(600),
    puntaje int NOT NULL,
    idUsuario int(11),
    idVendedor int(11),
    primary key (id),
    foreign key (idUsuario) references usuario(id),
    foreign key (idVendedor) references usuario(id)
);



INSERT INTO valoracion(comentario, puntaje, idUsuario,idVendedor)
VALUES  ('muy amable',5,6,2),
		('tuve un problema con la compra y me lo solucionó rápidamente',4,3,2),
        ('genial',5,10,2);
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `imgprincipal`
--
ALTER TABLE `imgprincipal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `imgproducto`
--
ALTER TABLE `imgproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

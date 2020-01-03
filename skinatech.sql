-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2020 a las 06:05:17
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skinatech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `state`, `image`) VALUES
(1, 'Redes', 1, 'img\\red.jpg'),
(2, 'Movil', 1, 'img\\movil1.png'),
(3, 'Computacion', 1, 'img\\pc.jpg'),
(4, 'Electrodomesticos', 0, 'img\\electro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `id_category`, `id_subcategory`, `image`, `quantity`, `description`) VALUES
(1, 'Nevera LG', 4, 7, 'img\\nevera1.jpg', '2', 'Nevera Alpha LG 438 litros No Frost - Inverter'),
(2, 'Audifonos', 2, 2, 'img\\audifonos.jpg', '2', 'Audifonos Bluetooth Inalambricos Magneticos Con Microfono Ranura Micro Sd Para reproducir musica mp3'),
(3, 'Cable de datos', 2, 2, 'img\\cable.jpg', '4', 'Nuevo conector de Apple que te permite cargar y sincronizar el terminal, mucho más pequeño que el anterior del 30 pines.'),
(4, 'Cargador', 2, 2, 'img\\cargador.jpg', '1', 'Cargador Portatil Usb 2600mah Power Bank'),
(5, 'Pantalla LCD', 2, 1, 'img\\pantalla.jpg', '3', 'Pantalla Display Lcd Táctil Iphone 7 7g'),
(6, 'Camara trasera', 2, 1, 'img\\camara.jpg', '4', 'Camara Trasera 8mp Para iPhone 5'),
(7, 'Board', 3, 3, 'img\\board.jpg', '2', ' LGA 775 para Intel ® Core ™ 2 Extreme / Core'),
(8, 'Teclado', 3, 4, 'img\\teclado.png', '4', 'El teclado inalámbrico Apple A1314 es adecuado para usar con un iPad, Apple TV o Mac. Este teclado puede conectarse a su Mac o iPad a través de Bluetooth.'),
(9, 'Mouse', 3, 4, 'img\\mouse.png', '5', 'Mouse Logitech Usb M110 Silent, 90% Mas Silencioso Azul'),
(10, 'Router Cisco', 1, 5, 'img\\router.png', '4', 'El router inalámbrico N300 con configuración sencilla N301 está diseñado para hacer que el proceso de configuración resulte muy intuitivo para el usuario.'),
(11, 'Switch Cisco', 1, 6, 'img\\switch.jpg', '5', 'TL-SF1008D 8-port 10/100M mini Desktop Switch, 8 10/100M'),
(12, 'Nevera Samsung', 4, 7, 'img\\nevera2.jpg', '3', 'Nevera Samsung 305 LTS. No Frost Congelador Superior – RT29K571JS8/CO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `state`, `quantity`, `id_category`, `image`) VALUES
(1, 'Repuestos', 1, 2, 2, 'img\\repuesto.jpg'),
(2, 'Accesorios', 1, 3, 2, 'img\\accesorio.jpg'),
(3, 'Partes', 1, 1, 3, 'img\\partes.jpg'),
(4, 'Accesorios', 1, 2, 3, 'img\\accesorio.jpg'),
(5, 'Router', 1, 1, 1, 'img\\red.jpg'),
(6, 'Switch', 1, 1, 1, 'img\\red.jpg'),
(7, 'Nevera', 0, 2, 4, 'img\\electrodomestico2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `state`, `password`, `rol`) VALUES
(1, 'admin', 1, '1234', 1),
(2, 'usuario', 1, '123', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_subcategory` (`id_subcategory`);

--
-- Indices de la tabla `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_subcategory`) REFERENCES `subcategory` (`id`);

--
-- Filtros para la tabla `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

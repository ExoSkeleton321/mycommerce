-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-08-2016 a las 17:04:11
-- Versión del servidor: 5.6.31
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mycommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `super_user` int(2) DEFAULT '0',
  `time_joined` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `last_name`, `email`, `password`, `super_user`, `time_joined`) VALUES
(1, 'Admin1', 'Admin1', 'admin@yahoo.com', '$2y$10$iy/Eft1beQRRheaEA4RXbe9wPRpkMT81E2uffo/xLrZM1EAt6TaC6', 1, '1469664274'),
(2, 'Admin2', 'Admin2', 'admin2@yahoo.com', '$2y$10$iy/Eft1beQRRheaEA4RXbe9wPRpkMT81E2uffo/xLrZM1EAt6TaC6', 0, '1469664274');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Accesorios para Vehiculos'),
(2, 'Animales y Mascotas'),
(3, 'Arte y Antiguedades'),
(4, 'Bebes'),
(5, 'Camaras y Accesorios'),
(6, 'Celulares y Telefonia'),
(7, 'Coleccionables'),
(8, 'Computacion'),
(9, 'Consolas y Videojuegos'),
(10, 'Deportes y Fitness'),
(11, 'Electrodomesticos'),
(12, 'Electronica, Audio y Video'),
(13, 'Hogar, Muebles y Jardin'),
(14, 'Industrias y Oficinas'),
(15, 'Instrumentos Musicales'),
(16, 'Joyas y Relojes'),
(17, 'Juegos y Juguetes'),
(18, 'Libros, Revistas y Comics'),
(19, 'Musica, Peliculas y Series'),
(20, 'Ropa, Bolsas y Calzado'),
(21, 'Salud y Belleza'),
(22, 'Otras Categorias'),
(23, 'Vehiculos'),
(25, 'Casas y Viviendas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `tags` text,
  `existence` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `price` float(11,3) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `uniqId` text,
  `time_joined` varchar(255) DEFAULT NULL,
  `disabled` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `tags`, `existence`, `stock`, `price`, `category_id`, `uniqId`, `time_joined`, `disabled`) VALUES
(1, 'Sony Playstation 3 Nuevo', '<h5 style="text-align: center;"><strong>PLAYSTATION 3 PERFECTO ESTADO</strong></h5>\n<p>Se entrega con:</p>\n<ul>\n<li>1 Consola</li>\n<li>1 Control</li>\n<li>Cables</li>\n<li>Juego (Call Of Duty Black Ops 3)</li>\n</ul>\n<p>Cupcake ipsum dolor sit amet chocolate cake. Icing I love cookie I love oat cake pudding. Candy I love dessert gummies. I love pie apple pie chocolate bar I love sesame snaps.</p>\n<p>Cake drag&eacute;e tootsie roll tootsie roll. Gummi bears jelly tiramisu biscuit bonbon I love. Jelly beans gingerbread candy canes jujubes I love lollipop pastry. I love lollipop lollipop.</p>\n<p>Sugar plum biscuit pie bear claw I love icing lollipop pastry chocolate. Oat cake jelly lemon drops gingerbread. Sesame snaps carrot cake topping.</p>\n<p>Sesame snaps ice cream I love marzipan. Carrot cake cotton candy gummi bears bear claw I love pie drag&eacute;e. I love liquorice ice cream I love tootsie roll icing.</p>\n<p>Lemon drops drag&eacute;e donut cake icing muffin cotton candy. Oat cake bonbon chocolate marshmallow jelly-o lemon drops jelly beans jelly beans. Macaroon gummi bears marzipan muffin fruitcake gummies pie cookie.</p>', 'playstation,sony,ps3', 1, NULL, 2500.000, 9, '19da938c56fae41d9002f2947cc67d94565b70e392cbb7.85566247:19da938c56fae41d9002f2947cc67d9456708647c58cd9.18376247:19da938c56fae41d9002f2947cc67d94567848aa888531.00231433:19da938c56fae41d9002f2947cc67d94567848aa890238.37670591:19da938c56fae41d9002f2947cc67d9456992230c77528.70150229:19da938c56fae41d9002f2947cc67d9456992230c7f226.11003043', '1448833251', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_details`
--

CREATE TABLE `site_details` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(50) DEFAULT NULL,
  `site_phone` varchar(20) DEFAULT NULL,
  `site_email` varchar(50) DEFAULT NULL,
  `site_theme` varchar(8) DEFAULT NULL,
  `site_nav_letters` int(2) NOT NULL DEFAULT '1',
  `site_paypal_client_id` text,
  `site_paypal_secret` text,
  `last_updated` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `site_details`
--

INSERT INTO `site_details` (`site_id`, `site_name`, `site_phone`, `site_email`, `site_theme`, `site_nav_letters`, `site_paypal_client_id`, `site_paypal_secret`, `last_updated`) VALUES
(1, 'Mi Tiendita Chida', '+(52) 712 190 4449', 'morenojorge1994@yahoo.com', '#ffb33e', 1, NULL, NULL, '1471198956');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_last_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_pass` text,
  `user_phone` varchar(15) DEFAULT '',
  `user_street` varchar(150) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `local_id` int(11) NOT NULL,
  `user_cp` varchar(5) NOT NULL,
  `time_joined` varchar(255) DEFAULT NULL,
  `user_token` varchar(255) DEFAULT NULL,
  `verified` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_last_name`, `user_email`, `user_pass`, `user_phone`, `user_street`, `state_id`, `city_id`, `local_id`, `user_cp`, `time_joined`, `user_token`, `verified`) VALUES
(1, 'Brian', 'Moreno', 'morenojorge1994@yahoo.com', '$2y$10$mzQlXcwuROgxDXAK5LKDlesDjrgewPyzAxCmfHm9Lf/ljErXrMLK.', '7121863773', '2250 West Darby Street Sp. 16 CP 92407', 0, 0, 0, '', '1448676363', '19da938c56fae41d9002f2947cc67d94', 1),
(2, 'Pablo', 'Gomez', 'pabgo@yahoo.com', '$2y$10$wjFpjjZo7pKcf60flYrjCerK80lcyMCUv4jiRrxrH.EZFAy00b.Nq', '5512345678', 'Direccion', 0, 0, 0, '', '1456444618', '125e0e175788e905a8cfb9a140d59775', 0),
(11, 'Brian', 'Moreno', 'email', '$2y$10$LTB2wlJoLdf7dciWB.ml5Otw.OxRnTYPeiuOy9z5e9SQug9isK.d.', '', 'Calle #32', 1, 1, 1, '321', '1471201074', '0c83f57c786a0b4a39efab23731c7ebc', 0),
(12, 'Brian', 'Moreno', 'email', '$2y$10$bQRHEc8a3P/O0Wi4/G4FZOQPghLq4K60BwM7ZL3MQ36qI5zO6JrAa', '', 'Calle #32', 1, 1, 1, '321', '1471201202', '0c83f57c786a0b4a39efab23731c7ebc', 0),
(13, 'Brian', 'Moreno', 'email', '$2y$10$Ahz5kJPbvp1OP4RwEX7Aa.PUxActNXfJ92Cn3gVrPybgIPP.OCmhm', '', 'Calle #32', 1, 1, 1, '321', '1471201769', '0c83f57c786a0b4a39efab23731c7ebc', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indices de la tabla `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`site_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `site_details`
--
ALTER TABLE `site_details`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2022 a las 21:33:15
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(255) NOT NULL,
  `id_creador` int(255) NOT NULL,
  `id_publicacion` int(255) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `msg_id` int(11) NOT NULL,
  `receptor_id` varchar(12) NOT NULL,
  `emisor_id` varchar(12) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`msg_id`, `receptor_id`, `emisor_id`, `mensaje`) VALUES
(1, '12123123', '221212122', '0'),
(2, '12123123', '221212122', '0'),
(3, '12123123', '221212122', 'hola pancho, yo soy juanito perez'),
(4, '221212122', '12123123', 'junito juanito'),
(5, '221212122', '12123123', 'poepeadpoakpda'),
(6, '221212122', '12123123', 'dasd'),
(7, '221212122', '12123123', 'as'),
(8, '221212122', '12123123', 'd'),
(9, '221212122', '12123123', 'yo soy juanito'),
(10, '221212122', '12123123', 'mentira'),
(11, '221212122', '12123123', 'yo soy pancho'),
(12, '12123123', '221212122', 'y yo soy juanitop'),
(13, '12123123', '221212122', 'hola'),
(14, '221212122', '12123123', 'que pasa'),
(15, '12345345', '221212122', 'papu'),
(16, '12123123', '221212122', 'hola'),
(17, '12123123', '221212122', 'asdasd'),
(18, '221212122', '12123123', 'hoola'),
(19, '221212122', '12123123', 'cpomo esptastas?'),
(20, '221212122', '12123123', 'como has estado'),
(21, '221212122', '12123123', 'me puedes ayudar?'),
(22, '12123123', '221212122', 'hola'),
(23, '12123123', '221212122', 'cabron'),
(24, '12123123', '221212122', 'te odio'),
(25, '12123123', '221212122', 'uwu'),
(26, '12123123', '221212122', 'mentira'),
(27, '221212122', '12123123', 'ya pero pa que tan choro'),
(28, '221212122', '12123123', 'papu'),
(29, '221212122', '12123123', 'oye'),
(30, '221212122', '12123123', 'tio'),
(31, '221212122', '12123123', 'hablame'),
(32, '221212122', '12123123', 'que no conozco tiooo'),
(33, '221212122', '12123123', 'olaaa'),
(34, '12123123', '221212122', 'chao'),
(35, '12123123', '221212122', '::::::::::::::::CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC'),
(36, '888888888', '221212122', 'a'),
(37, '12123123', '221212122', 'hola'),
(38, '1585931118', '510713707', 'ola'),
(39, '1585931118', '510713707', 'papu'),
(40, '1585931118', '510713707', 'probando'),
(41, '1585931118', '510713707', 'el chat'),
(42, '1585931118', '510713707', 'para '),
(43, '1585931118', '510713707', 'vcer '),
(44, '1585931118', '510713707', 'qe tal'),
(45, '1585931118', '510713707', 'funciona'),
(46, '1585931118', '510713707', 'el chat'),
(47, '1585931118', '510713707', 'peo'),
(48, '1585931118', '510713707', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac sagittis tellus. Proin tincidunt nisi id sapien interdum, id rutrum mauris convallis. Nulla facilisi. Pellentesque semper dapibus lacus, pharetra suscipit nunc pellentesque sit amet. Se'),
(49, '756541665', '510713707', 'hola'),
(50, '510713707', '756541665', 'hola'),
(51, '702676742', '756541665', 'hola'),
(52, '702676742', '756541665', 'como estás'),
(53, '756541665', '702676742', 'yo estoy muy bien'),
(54, '756541665', '702676742', 'porque '),
(55, '756541665', '702676742', 'todo fiunciona'),
(56, '756541665', '702676742', 'aaaaaaaaaa'),
(57, '510713707', '756541665', 'hoal biuenas'),
(58, '510713707', '756541665', 'tardes'),
(59, '510713707', '756541665', 'qiuero pan'),
(60, '756541665', '702676742', 'hola'),
(61, '756541665', '702676742', 'como'),
(62, '756541665', '702676742', 'te ecuntras'),
(63, '756541665', '702676742', 'amigo mio'),
(64, '702676742', '756541665', 'peo'),
(65, '510713707', '756541665', 'holas'),
(66, '756541665', '1308197748', 'hola'),
(67, '756541665', '1308197748', 'hola causa'),
(68, '1308197748', '756541665', 'hola'),
(69, '510713707', '702676742', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dolor sem, hendrerit nec vestibulum quis, pellentesque vel massa. Proin dictum porta turpis eget sagittis. Duis tristique porttitor velit, at porttitor felis rhoncus in. In dapibus sit amet se'),
(70, '1585931118', '510713707', 'hola diegito'),
(71, '510713707', '1585931118', 'golazxo'),
(72, '1585931118', '510713707', 'peo'),
(73, '1585931118', '749106186', 'oye'),
(74, '1585931118', '749106186', 'sigues disponible?'),
(75, '1585931118', '749106186', 'necesito ayuida'),
(76, '702676742', '749106186', 'hola'),
(77, '756541665', '749106186', 'HOLA'),
(78, '756541665', '749106186', 'COMO ESTÁS'),
(79, '749106186', '474820388', 'hola'),
(80, '749106186', '474820388', 'yo quiero'),
(81, '749106186', '474820388', 'trabjar'),
(82, '749106186', '474820388', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(255) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `info` text NOT NULL,
  `creador` int(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` int(1) NOT NULL,
  `imagen` text NOT NULL DEFAULT 'nofoto.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `titulo`, `info`, `creador`, `fecha`, `estado`, `imagen`) VALUES
(47, 'Busco alguien que pueda limpiar mi casa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac magna accumsan metus iaculis facilisis. In hac habitasse platea dictumst. Integer semper neque ut ipsum luctus, vitae pretium tortor congue. Suspendisse sit amet lectus at orci posuere tempor at varius nulla. Nunc eget malesuada nulla. In ornare purus luctus nisl maximus feugiat. Sed placerat dictum nulla eu eleifend. Maecenas interdum quam vel auctor ultrices. Praesent malesuada purus nulla, vitae mollis lectus sodales in. Aliquam sed libero id augue eleifend porttitor et non magna. Vivamus eget sapien nec orci tempor elementum. Aliquam eros mi, sollicitudin vel suscipit ut, ultrices a leo. Nullam sit amet sem metus.', 1101560582, '2022-11-27 17:20:32', 1, 'IMG-6383c690de06e2.44491203.jpg'),
(48, 'Busco alguien que pueda cortar el pasto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac magna accumsan metus iaculis facilisis. In hac habitasse platea dictumst. Integer semper neque ut ipsum luctus, vitae pretium tortor congue. Suspendisse sit amet lectus at orci posuere tempor at varius nulla. Nunc eget malesuada nulla. In ornare purus luctus nisl maximus feugiat. Sed placerat dictum nulla eu eleifend. Maecenas interdum quam vel auctor ultrices. Praesent malesuada purus nulla, vitae mollis lectus sodales in. Aliquam sed libero id augue eleifend porttitor et non magna. Vivamus eget sapien nec orci tempor elementum. Aliquam eros mi, sollicitudin vel suscipit ut, ultrices a leo. Nullam sit amet sem metus.', 1101560582, '2022-11-27 17:20:59', 1, 'IMG-6383c6abd7d608.32171839.jpg'),
(49, 'Busco trabajo, puedo limpiar, cortar pasto,etc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac magna accumsan metus iaculis facilisis. In hac habitasse platea dictumst. Integer semper neque ut ipsum luctus, vitae pretium tortor congue. Suspendisse sit amet lectus at orci posuere tempor at varius nulla. Nunc eget malesuada nulla. In ornare purus luctus nisl maximus feugiat. Sed placerat dictum nulla eu eleifend. Maecenas interdum quam vel auctor ultrices. Praesent malesuada purus nulla, vitae mollis lectus sodales in. Aliquam sed libero id augue eleifend porttitor et non magna. Vivamus eget sapien nec orci tempor elementum. Aliquam eros mi, sollicitudin vel suscipit ut, ultrices a leo. Nullam sit amet sem metus.', 1667823315, '2022-11-27 17:22:30', 1, 'nofoto.png'),
(50, 'Necesito alguien que saque a pasear a mi perro el fin de semana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac magna accumsan metus iaculis facilisis. In hac habitasse platea dictumst. Integer semper neque ut ipsum luctus, vitae pretium tortor congue. Suspendisse sit amet lectus at orci posuere tempor at varius nulla. Nunc eget malesuada nulla. In ornare purus luctus nisl maximus feugiat. Sed placerat dictum nulla eu eleifend. Maecenas interdum quam vel auctor ultrices. Praesent malesuada purus nulla, vitae mollis lectus sodales in. Aliquam sed libero id augue eleifend porttitor et non magna. Vivamus eget sapien nec orci tempor elementum. Aliquam eros mi, sollicitudin vel suscipit ut, ultrices a leo. Nullam sit amet sem metus.', 1667823315, '2022-11-27 17:26:00', 1, 'IMG-6383c7d8ad22f2.06909642.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id` int(11) NOT NULL,
  `rut_reseñador` varchar(12) NOT NULL,
  `rut_reseñado` varchar(12) NOT NULL,
  `Calificacion` int(1) NOT NULL,
  `reseña` text NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL,
  `desc_trabajo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `desc_trabajo`) VALUES
(1, 'No trabajador'),
(2, 'Trabajador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut` varchar(12) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `mail` varchar(80) DEFAULT NULL,
  `contraseña` varchar(30) DEFAULT NULL,
  `trabajo_id` int(11) NOT NULL,
  `img_perfil` text NOT NULL,
  `estado` varchar(255) NOT NULL,
  `ig` text NOT NULL DEFAULT 'No tiene',
  `fb` text NOT NULL DEFAULT 'No tiene',
  `ws` text NOT NULL DEFAULT 'No tiene',
  `tg` text NOT NULL DEFAULT 'No tiene'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut`, `unique_id`, `nombre`, `apellido`, `mail`, `contraseña`, `trabajo_id`, `img_perfil`, `estado`, `ig`, `fb`, `ws`, `tg`) VALUES
('11111111-1', 1101560582, 'Juan ', 'Bodoque', 'Bodoque123@gmail.com', 'Juancarlosbodoque123', 1, 'IMG-6383c8bf804f13.72988291.jpg', 'Activo ahora', 'https:/instagram.com/juan777', 'https:/instagram.com/juanbodoque', '987654321', 'https:/t.me/bodoque123'),
('22222222-2', 1667823315, 'Alejandro', 'Rojas', 'Alerojas@hotmail.com', 'Alejorojas1234#', 2, 'IMG-6383c72c3f7d31.97041818.jpg', 'Desconectado ahora', 'https://www.instagram.com/nombrecuenta/', 'https://facebook.com/juan', '987654321', 'https://t.me/juan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_creador` (`id_creador`),
  ADD KEY `id_publicacion` (`id_publicacion`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creador` (`creador`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`unique_id`),
  ADD KEY `trabajo_id` (`trabajo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_creador`) REFERENCES `usuario` (`unique_id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`creador`) REFERENCES `usuario` (`unique_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`trabajo_id`) REFERENCES `trabajos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

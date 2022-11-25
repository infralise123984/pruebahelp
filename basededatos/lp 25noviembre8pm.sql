-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2022 a las 00:01:02
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

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_creador`, `id_publicacion`, `comentario`, `fecha`) VALUES
(1, 749106186, 40, 'aaaaaa', '2022-11-25 19:03:07'),
(2, 749106186, 40, 'aaaaaa', '2022-11-25 19:21:14'),
(3, 749106186, 40, 'asdasdasdasd', '2022-11-25 19:32:12'),
(4, 749106186, 40, 'asdadasd', '2022-11-25 19:32:45'),
(5, 749106186, 40, 'asdasd', '2022-11-25 19:34:09'),
(6, 749106186, 40, 'asdasdasd', '2022-11-25 19:35:37'),
(7, 749106186, 40, 'asdasd', '2022-11-25 19:40:20'),
(8, 749106186, 38, '123123213', '2022-11-25 19:41:35'),
(9, 749106186, 40, 'hola', '2022-11-25 19:43:01'),
(10, 749106186, 38, 'peo', '2022-11-25 19:45:37'),
(11, 749106186, 38, 'peo', '2022-11-25 19:51:39'),
(12, 749106186, 40, 'merequetengue', '2022-11-25 19:51:49');

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
(76, '702676742', '749106186', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(255) NOT NULL,
  `titulo` varchar(40) NOT NULL,
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
(38, 'Maradooo', 'd10s', 1585931118, '2022-11-23 17:12:09', 1, 'IMG-637e7e99640bd2.99006078.jpg'),
(39, 'pepepi', 'pintamos', 1585931118, '2022-11-23 17:43:22', 1, 'nofoto.png'),
(40, 'Busco persona que me quiera ayuudar a ar', 'no tengo plata :C', 749106186, '2022-11-23 19:49:10', 1, 'nofoto.png');

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
('31528908-4', 510713707, 'Rigoberto', 'Gonzales', 'Peo@gmail.com', 'exzWRky9#PVn', 1, 'defaultpf.png', 'Desconectado ahora', 'No tiene', 'No tiene', 'No tiene', 'No tiene'),
('23882397-8', 702676742, 'Pedro', 'Aguirre', 'Pedroa@gmail.com', 'Pedritoa123', 1, 'IMG-63767ce07dc098.71314104.gif', 'Desconectado ahora', 'No tiene', 'No tiene', 'No tiene', 'No tiene'),
('22222222-2', 749106186, 'Roberto', 'Muso', 'roberto1223@gmail.com', 'Robertomuso1234', 1, 'IMG-637ea28b2ec291.91505251.png', 'Activo ahora', ' instagram.com/nombrecuenta', 'facebook.com/machaliconectado.cl', '912345678', 't.me/nombre'),
('21694102-0', 756541665, 'Alberto', 'Caroca', 'albertocaroca@gmail.com', 'a', 1, 'IMG-6374fc324d50d7.73702579.png', 'Desconectado ahora', 'No tiene', 'No tiene', 'No tiene', 'No tiene'),
('38058842-0', 1308197748, 'Demetrio', 'Delgado', 'Demetriodelgado@gmail.com', 'Demetrioseo123', 1, 'defaultpf.png', 'Activo ahora', 'No tiene', 'No tiene', 'No tiene', 'No tiene'),
('40280300-2', 1585931118, 'Diego', 'Maradona', 'Maradona10@gmail.com', 'Manodedios10', 2, 'IMG-637e6e304da078.23458180.jpg', 'Desconectado ahora', 'https://www.instagram.com/felissemana/', 'No tiene', '966699100', 'No tiene');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 19:12:43
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
(68, '1308197748', '756541665', 'hola');

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
(17, 'Publicacion de prueba con foto', 'está es un apublicacion con foto para probar que es posible subir fotos', 756541665, '2022-11-13 19:47:27', 1, 'IMG-637173ff9b7892.14480443.png'),
(18, 'Ejemp´lo sin foto', 'esta es una públicacion que no contiene una foto para demostrar que se puede subir sin foto', 756541665, '2022-11-13 19:48:06', 1, 'nofoto.png'),
(19, 'hla busco gente que hafga cosa cheveres', '123123123123131', 756541665, '2022-11-13 19:58:46', 1, 'nofoto.png'),
(20, 'hola soy el papu mas papu de los papus', 'Estoy buscando un aperonsa que sea capaz de hacerme millonaroio en 5 minutpos con bitcoins xddzxxd pero eso subs por sub en mi canal', 756541665, '2022-11-13 22:08:44', 1, 'IMG-6371951c0c1b22.51122459.jpg'),
(21, 'Busco alguien que me cuide la casa', 'Necesito que alguien pueda ir a mi casa desde las 4 de la tarde hasta las 7 de la tarde para cuidar a mi perro blablabalb', 756541665, '2022-11-13 22:19:40', 1, 'nofoto.png'),
(22, 'soy una persona con habilidades de repar', 'puedo hacer mano de obra solo a autos que sean diesel', 756541665, '2022-11-13 22:20:50', 1, 'nofoto.png'),
(23, 'hola soy el pepe ', 'quiero alguien que me venda pasta base con un poco que me pinte toda la casa sin dejar caer una sola gota de pintura queseso ', 756541665, '2022-11-16 12:04:44', 1, 'IMG-6374fc0c344af2.36367271.jpg'),
(24, 'Lorem Ipsum', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae velit eget tellus lobortis pharetra a eu nisi. Quisque cursus egestas augue ac pharetra. Donec tempor et arcu quis tincidunt. Aliquam auctor consequat est sit amet rhoncus. Phasellus rutrum at sapien condimentum auctor. Quisque ut convallis urna. Ut feugiat ex ex, non sollicitudin augue pulvinar et. Praesent tincidunt nibh a nulla pulvinar, nec lacinia massa aliquet. Quisque pulvinar elit vel velit aliquet laoreet ut at dolor. Maecenas non volutpat dolor, a gravida sem. Duis vehicula, tellus eget dapibus fringilla, augue metus mollis turpis, vitae interdum arcu erat a arcu.', 1308197748, '2022-11-17 14:21:28', 1, 'IMG-63766d989c4614.38332642.gif');

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
(2, 'pastero');

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
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut`, `unique_id`, `nombre`, `apellido`, `mail`, `contraseña`, `trabajo_id`, `img_perfil`, `estado`) VALUES
('31528908-4', 510713707, 'Rigoberto', 'Gonzales', 'Peo@gmail.com', 'Watonafea123', 1, 'defaultpf.png', 'Desconectado ahora'),
('23882397-8', 702676742, 'Pedro', 'Aguirre', 'Pedroa@gmail.com', 'Pedritoa123', 1, 'IMG-636d753d305377.05403802.png', 'Desconectado ahora'),
('21694102-0', 756541665, 'Alberto', 'Caroca', 'albertocaroca@gmail.com', 'a', 1, 'IMG-6374fc324d50d7.73702579.png', 'Desconectado ahora'),
('38058842-0', 1308197748, 'Demetrio', 'Delgado', 'Demetriodelgado@gmail.com', 'Demetrioseo123', 1, 'defaultpf.png', 'Activo ahora'),
('40280300-2', 1585931118, 'Diego', 'Maradona', 'Maradona2@gmail.com', 'Manodedios98', 1, 'defaultpf.png', 'Activo ahora');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`trabajo_id`) REFERENCES `trabajos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

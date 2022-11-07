-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 06:53:59
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
(14, '221212122', '12123123', 'que pasa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(50) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `titulo`, `info`) VALUES
(1, 'trabajo formateos', 'soy bueno en formateos esas cosas blablabla'),
(2, 'armado muebles', 'armo bueble de tooo');

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
(1, 'carpintero'),
(2, 'pastero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut` varchar(12) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `mail` varchar(80) DEFAULT NULL,
  `contraseña` varchar(30) DEFAULT NULL,
  `trabajo_id` int(11) NOT NULL,
  `img_perfil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut`, `nombre`, `apellido`, `mail`, `contraseña`, `trabajo_id`, `img_perfil`, `status`) VALUES
('12123123', 'Panchito', 'Rojas', 'Pancho777@gmail.com', 'Besitosenlacola123', 1, '', ''),
('12312312-3', 'Rigoberto', 'Gonzalez', 'sokotroko123@gmail.com', 'Contrasena123', 1, '', ''),
('12345345', 'Pedro', 'Pascal', 'Pascalgamer123@gmail.com', 'Pedrogamer45', 2, '', ''),
('2123123', 'Panchjo', 'Lepre', 'pancho@outlook.com', 'Perocomo123', 1, '', ''),
('221212122', 'juanito', 'perez', 'waton@gmail.com', '123', 2, '', ''),
('888888888', 'chupete', 'suazo', 'chupetin@gmail.com', 'Chupete98', 2, '', '');

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
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `trabajo_id` (`trabajo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 01:59:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `waste`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresoresiduo`
--

CREATE TABLE `ingresoresiduo` (
  `id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `costo` decimal(10,2) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `residuo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingresoresiduo`
--

INSERT INTO `ingresoresiduo` (`id`, `monto`, `fecha`, `costo`, `usuario_id`, `residuo_id`) VALUES
(1, 3, '2023-12-01', 2.00, 1, 1),
(2, 2, '2023-11-21', 3.00, 1, 1),
(5, 3, '2023-11-25', 2.00, 6, 6),
(6, 3, '2023-11-24', 4.00, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reciclado`
--

CREATE TABLE `reciclado` (
  `id` int(11) NOT NULL,
  `id_residuo` int(11) NOT NULL,
  `id_reciclaje` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `montoReciclado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reciclado`
--

INSERT INTO `reciclado` (`id`, `id_residuo`, `id_reciclaje`, `id_usuario`, `fecha`, `montoReciclado`) VALUES
(1, 5, 1, 1, '2023-11-23', 1),
(2, 2, 1, 1, '2023-11-30', 2),
(3, 1, 2, 1, '2023-11-22', 3),
(4, 1, 2, 7, '2023-11-24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residuo`
--

CREATE TABLE `residuo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `residuo`
--

INSERT INTO `residuo` (`id`, `nombre`, `cantidad`) VALUES
(1, 'Vidrio', 1),
(2, 'Papel', 5),
(4, 'Carton', 2),
(5, 'Botella', 1),
(6, 'Hierro', 10),
(7, 'Papel Reciclado', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treciclado`
--

CREATE TABLE `treciclado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `treciclado`
--

INSERT INTO `treciclado` (`id`, `nombre`, `cantidad`) VALUES
(1, 'Papel Reciclado', 2),
(2, 'Vidrio Reciclado', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `username`, `password`, `role`) VALUES
(1, 'Alan', 'Morales', 'admin', 'password', 'Administrador'),
(4, '2', '2', '2', '2', 'vendedor'),
(5, 'Juan Jose', 'Prado', 'User23', '1234', 'operador'),
(6, 'Paty', 'Chavez', 'user3', 'user1', 'operador'),
(7, 'juan', 'peres', 'user123', 'admin45', 'clasificador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingresoresiduo`
--
ALTER TABLE `ingresoresiduo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `residuo_id` (`residuo_id`);

--
-- Indices de la tabla `reciclado`
--
ALTER TABLE `reciclado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_residuo` (`id_residuo`),
  ADD KEY `id_reciclaje` (`id_reciclaje`);

--
-- Indices de la tabla `residuo`
--
ALTER TABLE `residuo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `treciclado`
--
ALTER TABLE `treciclado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingresoresiduo`
--
ALTER TABLE `ingresoresiduo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reciclado`
--
ALTER TABLE `reciclado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `residuo`
--
ALTER TABLE `residuo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `treciclado`
--
ALTER TABLE `treciclado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingresoresiduo`
--
ALTER TABLE `ingresoresiduo`
  ADD CONSTRAINT `ingresoresiduo_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `ingresoresiduo_ibfk_2` FOREIGN KEY (`residuo_id`) REFERENCES `residuo` (`id`);

--
-- Filtros para la tabla `reciclado`
--
ALTER TABLE `reciclado`
  ADD CONSTRAINT `reciclado_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `reciclado_ibfk_2` FOREIGN KEY (`id_residuo`) REFERENCES `residuo` (`id`),
  ADD CONSTRAINT `reciclado_ibfk_3` FOREIGN KEY (`id_reciclaje`) REFERENCES `treciclado` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

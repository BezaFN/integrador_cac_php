-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2023 a las 23:39:58
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
-- Base de datos: `integrador_cac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tema` varchar(250) NOT NULL,
  `fecha_alta` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(1, 'Steve ', 'Jobs', 'stive23j@gmail.com', 'Javascript', '2023-11-12 19:16:05'),
(2, 'Bill ', 'Gates', 'bill88Gates@gmial.com', 'Javascript', '2023-11-12 19:19:41'),
(3, 'Ada ', 'Lovelace', 'adalove@gmail.com', 'Negocios ', '2023-11-12 19:20:52'),
(4, 'Jon', 'Conor', 'scainet@gmail.com', 'Inteligencia Artificial', '2023-11-12 19:23:01'),
(5, 'Jhon ', 'Anderson', 'matrix@gmail.com', 'Domotica', '2023-11-12 19:24:59'),
(6, 'Jessica ', 'Person', 'personyharman@gmail.com', 'Leyes en Informática ', '2023-11-12 19:27:31'),
(7, 'Ethan ', 'Hunt ', 'fmi@gmail.com', 'Herramientas de Monitoreo Digital', '2023-11-12 19:29:33'),
(8, 'Juan Bautista ', 'Alberdi', 'nacionalberdi@gmail.com', 'La era digital y la nacionalidad', '2023-11-12 19:31:39'),
(9, 'Jose ', 'San Martin', 'seamoslibres@gmail.com', 'La libertad y la tecnología.', '2023-11-12 19:33:45'),
(10, 'Bruce ', 'Wayne', 'brucecompani@gmail.com', 'El tele trabajo y la sociedad.', '2023-11-12 19:36:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

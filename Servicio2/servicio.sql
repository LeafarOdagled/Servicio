-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2022 a las 22:27:21
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donativo`
--

CREATE TABLE `donativo` (
  `Titulo` varchar(25) NOT NULL,
  `Autor` varchar(25) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `pie` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donativo`
--

INSERT INTO `donativo` (`Titulo`, `Autor`, `ISBN`, `pie`) VALUES
('', 'juanga', 'asdad', 'asdajs'),
('los arroyos', 'juanga', 'asdad', 'asdajs'),
('los arroyos', 'juanga', 'asdad', 'asdajs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donativoa`
--

CREATE TABLE `donativoa` (
  `tipo` varchar(25) NOT NULL,
  `integrantes` int(25) NOT NULL,
  `integrantes2` int(15) NOT NULL,
  `asesores` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donativoa`
--

INSERT INTO `donativoa` (`tipo`, `integrantes`, `integrantes2`, `asesores`) VALUES
('libro', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `APaterno` varchar(30) DEFAULT NULL,
  `AMaterno` varchar(30) DEFAULT NULL,
  `Boleta` int(10) DEFAULT NULL,
  `Programa` varchar(30) DEFAULT NULL,
  `Contra` varchar(8) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `sexo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombre`, `APaterno`, `AMaterno`, `Boleta`, `Programa`, `Contra`, `Correo`, `sexo`) VALUES
(1, 'Karen', 'Esparza', 'Cuevas', 2019670203, 'Sistemas', 'karencia', 'karencia@gmail.com', NULL),
(2, 'Dany', 'Gutierrez', 'Sando', 2019670205, 'sistemas', 'dany', 'daniela@hotmail.com', NULL),
(4, 'Rafael', 'Delgado', 'Calzada', 2019670206, 'Sistemas', '20196702', 'rdelgado1801@alumno.ipn.mx', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioad`
--

CREATE TABLE `usuarioad` (
  `id_admin` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `ApellidoP` varchar(20) NOT NULL,
  `ApellidoM` varchar(20) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarioad`
--

INSERT INTO `usuarioad` (`id_admin`, `Nombre`, `ApellidoP`, `ApellidoM`, `Usuario`, `Pass`) VALUES
(1, 'Hector Alejandro', 'Acuna', 'Cid', 'Admin', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarioad`
--
ALTER TABLE `usuarioad`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarioad`
--
ALTER TABLE `usuarioad`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2022 a las 01:07:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

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
  `ID_DonB` int(10) NOT NULL,
  `Titulo` varchar(25) NOT NULL,
  `Autor` varchar(25) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `Pie` varchar(15) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donativo`
--

INSERT INTO `donativo` (`ID_DonB`, `Titulo`, `Autor`, `ISBN`, `Pie`, `id_usuario`) VALUES
(1, 'sdfsd', 'sfad', 'sfdsf', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donativoa`
--

CREATE TABLE `donativoa` (
  `ID_DonA` int(10) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `integrante` varchar(50) NOT NULL,
  `integrante2` varchar(50) NOT NULL,
  `integrante3` varchar(30) DEFAULT NULL,
  `asesores` int(15) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donativoa`
--

INSERT INTO `donativoa` (`ID_DonA`, `tipo`, `integrante`, `integrante2`, `integrante3`, `asesores`, `id_usuario`) VALUES
(1, 'libro', '1', '2', NULL, 1, 0),
(2, 'DFSD', 'DanielaGutiérrezSandoval', 'sdfsd', 'SDFS', 1, 2),
(3, 'dsfsdf', 'DanielaGutiérrezSandoval', 'sdfsd', 'fsdfsd', 1, 2),
(4, 'dsfsdf', 'Daniela Gutiérrez Sandoval', 'sdfsd', 'fsdfsd', 1, 2),
(5, 'dsfsdf', 'Daniela Gutiérrez Sandoval', 'sdfsd', '', 1, 2),
(6, 'dsfsdf', 'Daniela Gutiérrez Sandoval', 'NULL', 'NULL', 1, 2),
(7, 'dsfsdf', 'Daniela Gutiérrez Sandoval', 'sdfsd', 'NULL', 1, 2),
(8, 'dsfsdf', 'Daniela Gutiérrez Sandoval', 'sdfsd', 'NULL', 1, 2),
(9, 'dsfsdf', 'Daniela Gutiérrez Sandoval', 'NULL', 'NULL', 1, 2);

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
  `Sexo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombre`, `APaterno`, `AMaterno`, `Boleta`, `Programa`, `Contra`, `Correo`, `Sexo`) VALUES
(1, 'Karen', 'Esparza', 'Cuevas', 2019670085, 'Sistemas', 'karencia', 'karencia@gmail.com', 'Femenino'),
(2, 'Daniela', 'Gutiérrez', 'Sandoval', 2019670018, 'Sistemas', '16554651', 'dgutierrezs1501@alumno.ipn.mx', 'femenino');

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
-- Indices de la tabla `donativo`
--
ALTER TABLE `donativo`
  ADD PRIMARY KEY (`ID_DonB`),
  ADD KEY `ID_Donante` (`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `donativoa`
--
ALTER TABLE `donativoa`
  ADD PRIMARY KEY (`ID_DonA`),
  ADD KEY `ID_Donante` (`id_usuario`);

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
-- AUTO_INCREMENT de la tabla `donativo`
--
ALTER TABLE `donativo`
  MODIFY `ID_DonB` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `donativoa`
--
ALTER TABLE `donativoa`
  MODIFY `ID_DonA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarioad`
--
ALTER TABLE `usuarioad`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

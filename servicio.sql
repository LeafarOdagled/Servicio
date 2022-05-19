-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2022 a las 22:54:03
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
-- Estructura de tabla para la tabla `constancia`
--

CREATE TABLE `constancia` (
  `id_constancia` int(5) NOT NULL,
  `FechaExpide` date NOT NULL,
  `FechaAcepta` date NOT NULL,
  `estadoC` varchar(15) NOT NULL DEFAULT 'pendiente',
  `id_usuario` int(11) DEFAULT NULL,
  `nombreC` varchar(50) NOT NULL DEFAULT 'constancia de no adeudo',
  `ComentarioC` varchar(500) NOT NULL,
  `NoConstancia` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `constancia`
--

INSERT INTO `constancia` (`id_constancia`, `FechaExpide`, `FechaAcepta`, `estadoC`, `id_usuario`, `nombreC`, `ComentarioC`, `NoConstancia`) VALUES
(20, '2022-03-02', '2022-04-30', 'Aceptado', 1, 'constancia de no adeudo', 'juan paco pedro de la mar', 0),
(23, '2022-03-03', '2022-04-14', 'Aceptado', 1, 'constancia de no adeudo', 'a', 0),
(25, '2022-04-20', '0000-00-00', 'Rechazado', 1, 'constancia de no adeudo', 'no porque eres joto', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donativo`
--

CREATE TABLE `donativo` (
  `ID_DonB` int(10) NOT NULL,
  `Titulo` varchar(25) NOT NULL,
  `Autor` varchar(25) NOT NULL,
  `ISBN` varchar(15) NOT NULL,
  `anio` int(10) DEFAULT NULL,
  `editorial` varchar(50) DEFAULT NULL,
  `Fecha` date NOT NULL DEFAULT current_timestamp(),
  `FechaAceptado` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombreB` varchar(50) NOT NULL DEFAULT 'Donativo Bibliográfico ',
  `estadoB` varchar(25) NOT NULL DEFAULT 'Pendiente',
  `ComentarioB` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donativo`
--

INSERT INTO `donativo` (`ID_DonB`, `Titulo`, `Autor`, `ISBN`, `anio`, `editorial`, `Fecha`, `FechaAceptado`, `id_usuario`, `nombreB`, `estadoB`, `ComentarioB`) VALUES
(14, 'wasd', 'wasd', 'wasd', NULL, NULL, '2022-03-02', '2022-04-16', 1, 'Donativo Bibliográfico ', 'Aceptado', 'hijoesuputamadre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donativoa`
--

CREATE TABLE `donativoa` (
  `ID_DonA` int(10) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `integrante` varchar(50) NOT NULL,
  `integrante2` varchar(50) DEFAULT NULL,
  `integrante3` varchar(30) DEFAULT NULL,
  `integrante4` varchar(50) DEFAULT NULL,
  `integrante5` varchar(50) DEFAULT NULL,
  `integrante6` varchar(50) DEFAULT NULL,
  `integrante7` varchar(50) DEFAULT NULL,
  `integrante8` varchar(50) DEFAULT NULL,
  `asesor1` varchar(15) NOT NULL,
  `asesor2` varchar(15) DEFAULT NULL,
  `asesor3` varchar(15) DEFAULT NULL,
  `asesor4` varchar(50) DEFAULT NULL,
  `asesor5` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `fechaExpide` date NOT NULL DEFAULT current_timestamp(),
  `fechaAceptado` date NOT NULL,
  `nombreA` varchar(50) NOT NULL DEFAULT 'Donativo Académico ',
  `estadoA` varchar(25) NOT NULL DEFAULT 'Pendiente',
  `ComentarioA` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donativoa`
--

INSERT INTO `donativoa` (`ID_DonA`, `tipo`, `integrante`, `integrante2`, `integrante3`, `integrante4`, `integrante5`, `integrante6`, `integrante7`, `integrante8`, `asesor1`, `asesor2`, `asesor3`, `asesor4`, `asesor5`, `id_usuario`, `fechaExpide`, `fechaAceptado`, `nombreA`, `estadoA`, `ComentarioA`) VALUES
(17, '', 'Rafael Delgado Calzada', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'asd', 'NULL', 'NULL', 'NULL', 'NULL', 1, '2022-05-12', '0000-00-00', 'Donativo Académico ', 'Pendiente', ''),
(18, 'TT', 'Rafael Delgado Calzada', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'asdas', 'NULL', 'NULL', 'NULL', 'NULL', 1, '2022-05-12', '0000-00-00', 'Donativo Académico ', 'Pendiente', ''),
(19, 'Tesis', 'Rafael Delgado Calzada', 'dasd', 'weqeq', 'eqw', 'NULL', 'NULL', 'NULL', 'NULL', 'sad', 'asda', 'asdasd', 'NULL', 'NULL', 1, '2022-05-19', '0000-00-00', 'Donativo Académico ', 'Pendiente', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_admin`
--

CREATE TABLE `eventos_admin` (
  `ID_evento` int(11) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `tiempoEventoHoras` int(11) NOT NULL,
  `fechaEvento` date NOT NULL,
  `creadorEvento` varchar(100) NOT NULL,
  `tiempoEventoMinutos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos_admin`
--

INSERT INTO `eventos_admin` (`ID_evento`, `nombreEvento`, `tiempoEventoHoras`, `fechaEvento`, `creadorEvento`, `tiempoEventoMinutos`) VALUES
(2, 'Tutorial de como no morir de sobrepeso', 3, '2022-03-08', 'Rafa', 0),
(5, 'Me quiero morir .png\r\n', 0, '0000-00-00', '', 0),
(13, 'Y somos amigos', 2, '2022-03-31', 'DANI', 0),
(14, 'Odio los modales.com', 10, '2022-04-28', 'DANI', 0),
(15, 'Cambio de horario ', 0, '2022-05-19', 'DANI', 0),
(16, 'Cambio de horario 2', 0, '2022-05-18', 'DANI', 0),
(18, 'Cambio de hora 3', 11, '2022-06-01', 'DANI', 0),
(19, 'Cambios bien hechos horas', 0, '2022-05-26', 'DANI', 0),
(21, 'Guarda las horas porfa 2', 10, '2022-05-25', 'DANI', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_constancia`
--

CREATE TABLE `eventos_constancia` (
  `id_evento_cons` int(100) NOT NULL,
  `FechaExpide` date NOT NULL,
  `FechaAcepta` date NOT NULL,
  `EstadoC` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `ComentarioC` varchar(100) NOT NULL,
  `NoConstancia` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos_constancia`
--

INSERT INTO `eventos_constancia` (`id_evento_cons`, `FechaExpide`, `FechaAcepta`, `EstadoC`, `id_usuario`, `id_evento`, `ComentarioC`, `NoConstancia`) VALUES
(1, '2022-05-10', '0000-00-00', 'Rechazado', 1, 5, 'asasasas', 1),
(2, '2022-05-17', '2022-05-09', 'Aceptado', 1, 13, 'a', 1),
(4, '2022-05-05', '2022-05-09', 'Aceptado', 1, 14, '', 0),
(5, '2022-05-05', '2022-05-09', 'Aceptado', 1, 15, 'A huevo que jala', 0),
(6, '2022-05-05', '0000-00-00', 'Pendiente', 13, 16, '', 0),
(7, '2022-05-05', '0000-00-00', 'Pendiente', 1, 21, 'Sobres', 0),
(8, '2022-05-05', '0000-00-00', 'Pendiente', 1, 2, '', 0);

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
  `Sexo` varchar(10) DEFAULT NULL,
  `id_constancia` int(11) DEFAULT NULL,
  `ID_DonA` int(11) DEFAULT NULL,
  `ID_DonB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombre`, `APaterno`, `AMaterno`, `Boleta`, `Programa`, `Contra`, `Correo`, `Sexo`, `id_constancia`, `ID_DonA`, `ID_DonB`) VALUES
(1, 'Rafael', 'Delgado', 'Calzada', 2019670203, 'Sistemas', 'karencia', 'rdelgado1801@alumno.ipn.mx', 'masculino', NULL, NULL, NULL),
(13, 'juan', 'paco', 'pedro', 2019670204, 'Sistemas', 'karencia', 'juan', 'masculino', NULL, NULL, NULL);

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
-- Indices de la tabla `constancia`
--
ALTER TABLE `constancia`
  ADD PRIMARY KEY (`id_constancia`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `donativo`
--
ALTER TABLE `donativo`
  ADD PRIMARY KEY (`ID_DonB`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `donativoa`
--
ALTER TABLE `donativoa`
  ADD PRIMARY KEY (`ID_DonA`),
  ADD KEY `ID_Donante` (`id_usuario`);

--
-- Indices de la tabla `eventos_admin`
--
ALTER TABLE `eventos_admin`
  ADD PRIMARY KEY (`ID_evento`);

--
-- Indices de la tabla `eventos_constancia`
--
ALTER TABLE `eventos_constancia`
  ADD PRIMARY KEY (`id_evento_cons`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_constancia` (`id_constancia`),
  ADD KEY `ID_DonA` (`ID_DonA`),
  ADD KEY `ID_DonB` (`ID_DonB`);

--
-- Indices de la tabla `usuarioad`
--
ALTER TABLE `usuarioad`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `constancia`
--
ALTER TABLE `constancia`
  MODIFY `id_constancia` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `donativo`
--
ALTER TABLE `donativo`
  MODIFY `ID_DonB` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `donativoa`
--
ALTER TABLE `donativoa`
  MODIFY `ID_DonA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `eventos_admin`
--
ALTER TABLE `eventos_admin`
  MODIFY `ID_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `eventos_constancia`
--
ALTER TABLE `eventos_constancia`
  MODIFY `id_evento_cons` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarioad`
--
ALTER TABLE `usuarioad`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `constancia`
--
ALTER TABLE `constancia`
  ADD CONSTRAINT `constancia_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `donativo`
--
ALTER TABLE `donativo`
  ADD CONSTRAINT `donativo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `donativoa`
--
ALTER TABLE `donativoa`
  ADD CONSTRAINT `donativoa_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_DonB`) REFERENCES `donativo` (`ID_DonB`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_constancia`) REFERENCES `constancia` (`id_constancia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`ID_DonA`) REFERENCES `donativoa` (`ID_DonA`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

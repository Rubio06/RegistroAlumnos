-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-02-2023 a las 03:48:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caso003`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `codigo` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `codespecialidad` int(11) NOT NULL,
  `codciclo` int(11) NOT NULL,
  `codcurso` int(11) NOT NULL,
  `promedio` float NOT NULL,
  `codciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`codigo`, `nombres`, `apellidos`, `codespecialidad`, `codciclo`, `codcurso`, `promedio`, `codciudad`) VALUES
(1, 'LUIS', 'CALLA QUEVEDO', 1, 1, 1, 12.35, 1),
(2, 'MARIA', 'DIAZ RONCAL', 1, 1, 2, 10.52, 2),
(3, 'JORGE', 'CHAVEZ MOYA', 2, 2, 3, 8, 3),
(4, 'MAGALI', 'ROSARIO LUNA', 3, 3, 4, 14.56, 1),
(5, 'MIGUEL', 'ALVAREZ PONCE', 4, 4, 5, 13, 4),
(6, 'CARLOS', 'BUSTAMANTE COLLAZOS', 4, 4, 5, 6.36, 3),
(7, 'MARISOL', 'AGUIRRE CHUMBA', 2, 1, 1, 9.3, 3),
(8, 'GILMER', 'SANCHEZ VACA', 5, 4, 6, 15.32, 3),
(9, 'CAMILA', 'QUISPE PALOMINO', 9, 9, 4, 8.3, 2),
(10, 'CRISTIAN ', 'SILVA BAZAN', 9, 4, 9, 8.36, 3),
(11, 'OSCAR MARIO', 'MENDEZ PEREZ', 4, 3, 7, 18.5, 1),
(12, 'ALEJANDRO ', 'BALDIVIA NEGRERO', 2, 8, 3, 12.6, 5),
(13, 'SILVIA', 'RODRIGUEZ AFTER', 3, 9, 4, 15.8, 8),
(14, 'ROBERTO', 'FABREGAS ROSSARD', 8, 1, 9, 17.6, 4),
(15, 'ROXANA ', 'FERNANDEZ MALDONADO', 8, 2, 1, 18.3, 4),
(16, 'JULIO', 'ALFREDO ROLDAN', 7, 2, 2, 15.3, 5),
(17, 'FRANCO', 'CONDE ARIAS', 6, 4, 4, 11.3, 2),
(18, 'ROBERTO ', 'PEREZ MELENDEZ', 5, 6, 6, 16.9, 3),
(19, 'SAMUEL ', 'RUBIO PAUCAR', 4, 2, 6, 13, 4),
(20, 'MACO', 'ARSET MURRUGARRA', 4, 3, 5, 14, 2),
(22, 'JEREMIAS', 'SALAS ZEGARRA', 4, 4, 3, 18, 3),
(23, 'JAIME', 'NIETO PERALTA', 2, 2, 2, 16.3, 4),
(24, 'RICARDO', 'PRADO ARNALDO', 2, 1, 3, 17, 1),
(25, 'RAUL', 'DEL PRADO FLOKER', 2, 7, 7, 16.9, 1),
(26, 'PEDRO', 'GARCIA RENEZ', 2, 3, 10, 16.36, 4),
(27, 'MIGUEL IGNACIO', 'DE LAS CASAS PICASO', 5, 0, 2, 14.36, 7),
(28, 'SONIA', 'CABRERA ABALOS', 3, 3, 5, 5.6, 2),
(29, 'MARIO', 'RUBIO PAUCAR', 3, 4, 2, 17, 2),
(30, 'GRACIELA ', 'HERNANDEZ EMIRIO', 3, 4, 8, 14.36, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo`
--

CREATE TABLE `ciclo` (
  `codigocliclo` int(11) NOT NULL,
  `ciclo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciclo`
--

INSERT INTO `ciclo` (`codigocliclo`, `ciclo`) VALUES
(1, 'PRIMERO'),
(2, 'SEXTO'),
(3, 'DECIMO'),
(4, 'CUARTO'),
(5, 'DECIMO'),
(6, 'OCTAVO'),
(7, 'NOVENO'),
(8, 'QUINTO'),
(9, 'SEPTIMO'),
(10, 'SEGUNDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `codigociudad` int(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`codigociudad`, `ciudad`) VALUES
(1, 'CAJAMARCA'),
(2, 'LIMA'),
(3, 'TRUJILLO'),
(4, 'AREQUIPA'),
(5, 'AYACUCHO'),
(6, 'CUSCO'),
(7, 'ICA'),
(8, 'TUMBES'),
(9, 'LORETO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `codigocurso` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`codigocurso`, `curso`) VALUES
(1, 'LENGUAJE'),
(2, 'MATEMATICAS'),
(3, 'ESTADOS FINANCIEROS'),
(4, 'PRACTICAS II'),
(5, 'PSICOLOGIA CLINICA'),
(6, 'FILOSOFIA'),
(7, 'INGLES I'),
(8, 'REDES Y COMUNICACIONES'),
(9, 'QUIMICA ORGANICA'),
(10, 'PSICOLOGIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `codigoespecialidad` int(11) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`codigoespecialidad`, `especialidad`) VALUES
(1, 'CIENCIAS DE LA COMUNICACION'),
(2, 'CONTABILIDAD'),
(3, 'OBSTETRICIA'),
(4, 'PSICOLOGIA'),
(5, 'MEDICINA'),
(6, 'INGENIERIA DE SITEMAS E INFORMATICA'),
(7, 'FISIOTERAPIA'),
(8, 'FARMACIA Y BIOQUIMICA'),
(9, 'INGENIERIA INDUSTRIAL'),
(10, 'ARQUITECTURA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fkespecialidad` (`codespecialidad`),
  ADD KEY `fkciclo` (`codciclo`),
  ADD KEY `fkcurso` (`codcurso`),
  ADD KEY `fkciudad` (`codciudad`);

--
-- Indices de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  ADD PRIMARY KEY (`codigocliclo`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`codigociudad`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigocurso`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`codigoespecialidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `ciclo`
--
ALTER TABLE `ciclo`
  MODIFY `codigocliclo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `codigociudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `codigocurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `codigoespecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

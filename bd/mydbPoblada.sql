-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2015 a las 18:55:29
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `idBus` int(11) NOT NULL,
  `Marca` varchar(45) DEFAULT NULL,
  `Modelo` varchar(45) DEFAULT NULL,
  `Placa` varchar(45) DEFAULT NULL,
  `Propietario` varchar(45) DEFAULT NULL,
  `Capacidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bus`
--

INSERT INTO `bus` (`idBus`, `Marca`, `Modelo`, `Placa`, `Propietario`, `Capacidad`) VALUES
(1023, 'Mercedez Benz', '2015', 'HJK094', 'Tiberio Lopez', '98'),
(1028, 'Mercedez Benz', '2014', 'DFG456', 'Carlos Villamizar', '98'),
(1048, 'Volvo', '2015', 'ERT789', 'Kelly Gonzalez', '102'),
(1074, 'Volvo', '2015', 'THY453', 'Liliana Estupiñan', '102');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bus_has_conductor`
--

CREATE TABLE IF NOT EXISTS `bus_has_conductor` (
  `Bus_idBus` int(11) NOT NULL,
  `Conductor_idConductor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bus_has_conductor`
--

INSERT INTO `bus_has_conductor` (`Bus_idBus`, `Conductor_idConductor`) VALUES
(1023, 1029345829);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE IF NOT EXISTS `conductor` (
  `idConductor` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Sueldo` varchar(45) DEFAULT NULL,
  `ARL` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `EPS` varchar(45) DEFAULT NULL,
  `FechaDeNacimiento` date DEFAULT NULL,
  `RH` varchar(45) DEFAULT NULL,
  `GrupoSanguineo` varchar(45) DEFAULT NULL,
  `FechaVinculacion` date DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idConductor`, `Nombre`, `Apellido`, `Sueldo`, `ARL`, `EPS`, `FechaDeNacimiento`, `RH`, `GrupoSanguineo`, `FechaVinculacion`, `Password`) VALUES
(1029345829, 'Andres', 'Maldonado Vargas', '2300250', 'SURA', 'UniSalud', '1994-12-25', '-', 'A', '2015-05-13', 'Andres'),
(1098234850, 'Yurley Katherine', 'Sanchez', '2500231', 'Liberty Seguros', 'Nueva EPS', '1992-01-20', '+', 'O', '2015-04-09', 'Yurley'),
(1098772979, 'Javier Alejandro', 'Perez Fernandez', '2200300', 'SURA', 'Coomeva', '1995-07-27', '+', 'O', '2015-05-13', 'JulianAndres0712');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE IF NOT EXISTS `estaciones` (
  `idEstaciones` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Latitud` double DEFAULT NULL,
  `Longitud` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`idEstaciones`, `Nombre`, `Latitud`, `Longitud`) VALUES
(1, 'Estacion UIS', 7.1376718, -73.118959),
(2, 'Estación Terminal de transportes', 7.0876912, -73.1364687),
(3, 'Estación parque de los niños', 7.1247492, -73.117962),
(4, 'Estación colegio la Salle', 7.0998583, -73.1131649),
(5, 'Estación Lagos', 7.0660561, -73.0980913),
(6, 'Estación quebradaSeca', 7.122558, -73.1281364),
(7, 'Estación el diamante', 7.0954413, -73.1106727),
(8, 'Estación la Isla', 7.1081123, -73.1162209),
(9, 'Estación alcaldia', 7.1170495, -73.1297719),
(10, 'Estación alcaldia', 7.1190036, -73.11053498),
(11, 'Estación Conucos', 7.1039052, -73.110801),
(12, 'Estación Unab', 7.1174544, -73.1053597),
(13, 'Estación Cacique', 7.0994319, -73.1066597),
(14, 'Estación parque San Pio', 7.1190036, -73.11053498),
(15, 'Estación parque del Agua', 7.1311197, -73.1099239),
(16, 'Estación San Francisco', 7.1317356, -73.1249277),
(17, 'Estación Lagos', 7.0660561, -73.0980913);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE IF NOT EXISTS `monitores` (
  `User` varchar(45) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`User`, `Nombre`, `Password`) VALUES
('japf0727', 'JAVIER ALEJANDRO', 'JulianAndres0712'),
('skyuis', 'SKYUIS', 'skyuis');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `idRutas` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `TiempoDeOperacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`idRutas`, `Nombre`, `TiempoDeOperacion`) VALUES
(1, 'P1', '150 minutos'),
(2, 'P2', '162 minutos'),
(3, 'P3', '147 minutos'),
(4, 'P6', '172 minutos'),
(5, 'P8', '168 minutos'),
(6, 'P10', '215 minutos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas_has_bus`
--

CREATE TABLE IF NOT EXISTS `rutas_has_bus` (
  `Rutas_idRutas` int(11) NOT NULL,
  `Bus_idBus` int(11) NOT NULL,
  `HoraDeOperacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutas_has_bus`
--

INSERT INTO `rutas_has_bus` (`Rutas_idRutas`, `Bus_idBus`, `HoraDeOperacion`) VALUES
(1, 1023, '2015-09-25 16:28:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas_has_estaciones`
--

CREATE TABLE IF NOT EXISTS `rutas_has_estaciones` (
  `Rutas_idRutas` int(11) NOT NULL,
  `Estaciones_idEstaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`idBus`);

--
-- Indices de la tabla `bus_has_conductor`
--
ALTER TABLE `bus_has_conductor`
  ADD PRIMARY KEY (`Bus_idBus`,`Conductor_idConductor`),
  ADD KEY `fk_Bus_has_Conductor_Conductor1_idx` (`Conductor_idConductor`),
  ADD KEY `fk_Bus_has_Conductor_Bus1_idx` (`Bus_idBus`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`idConductor`);

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`idEstaciones`);

--
-- Indices de la tabla `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`User`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`idRutas`);

--
-- Indices de la tabla `rutas_has_bus`
--
ALTER TABLE `rutas_has_bus`
  ADD PRIMARY KEY (`Rutas_idRutas`,`Bus_idBus`,`HoraDeOperacion`),
  ADD KEY `fk_Rutas_has_Bus_Bus1_idx` (`Bus_idBus`),
  ADD KEY `fk_Rutas_has_Bus_Rutas1_idx` (`Rutas_idRutas`);

--
-- Indices de la tabla `rutas_has_estaciones`
--
ALTER TABLE `rutas_has_estaciones`
  ADD PRIMARY KEY (`Rutas_idRutas`,`Estaciones_idEstaciones`),
  ADD KEY `fk_Rutas_has_Estaciones_Estaciones1_idx` (`Estaciones_idEstaciones`),
  ADD KEY `fk_Rutas_has_Estaciones_Rutas_idx` (`Rutas_idRutas`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bus_has_conductor`
--
ALTER TABLE `bus_has_conductor`
  ADD CONSTRAINT `fk_Bus_has_Conductor_Bus1` FOREIGN KEY (`Bus_idBus`) REFERENCES `bus` (`idBus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bus_has_Conductor_Conductor1` FOREIGN KEY (`Conductor_idConductor`) REFERENCES `conductor` (`idConductor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rutas_has_bus`
--
ALTER TABLE `rutas_has_bus`
  ADD CONSTRAINT `fk_Rutas_has_Bus_Bus1` FOREIGN KEY (`Bus_idBus`) REFERENCES `bus` (`idBus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rutas_has_Bus_Rutas1` FOREIGN KEY (`Rutas_idRutas`) REFERENCES `rutas` (`idRutas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rutas_has_estaciones`
--
ALTER TABLE `rutas_has_estaciones`
  ADD CONSTRAINT `fk_Rutas_has_Estaciones_Estaciones1` FOREIGN KEY (`Estaciones_idEstaciones`) REFERENCES `estaciones` (`idEstaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rutas_has_Estaciones_Rutas` FOREIGN KEY (`Rutas_idRutas`) REFERENCES `rutas` (`idRutas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

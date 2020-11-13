-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-11-2020 a las 13:08:04
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuinformatico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
CREATE TABLE IF NOT EXISTS `candidatos` (
  `csClaveServicio` int NOT NULL,
  `ciClaveInformaticos` int NOT NULL,
  PRIMARY KEY (`csClaveServicio`,`ciClaveInformaticos`),
  KEY `ciClaveInformaticos` (`ciClaveInformaticos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`csClaveServicio`, `ciClaveInformaticos`) VALUES
(1, 1),
(1, 7),
(1, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

DROP TABLE IF EXISTS `contratos`;
CREATE TABLE IF NOT EXISTS `contratos` (
  `cClave` int NOT NULL AUTO_INCREMENT COMMENT 'Clave de la relacion',
  `ciClaveInformaticos` int NOT NULL COMMENT 'Clave de Informaticos',
  `ceClaveEmpresas` int NOT NULL COMMENT 'Clave de Empresas',
  `cFechaInicio` date DEFAULT NULL,
  `cFechaFin` date DEFAULT NULL,
  `cPuntuacion` int DEFAULT NULL COMMENT 'Valores 1-5',
  `cSalario` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`cClave`),
  KEY `ceClaveEmpresas` (`ceClaveEmpresas`),
  KEY `ciClaveInformaticos` (`ciClaveInformaticos`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`cClave`, `ciClaveInformaticos`, `ceClaveEmpresas`, `cFechaInicio`, `cFechaFin`, `cPuntuacion`, `cSalario`) VALUES
(1, 3, 5, '2020-05-15', '2020-06-10', 4, 0),
(2, 8, 1, '2020-03-01', '2020-04-10', 5, 0),
(3, 8, 3, '2020-05-15', '2020-06-10', 4, 0),
(5, 6, 3, '2020-05-05', '2020-06-16', 4, 0),
(9, 2, 5, '2020-06-11', NULL, 3, 0),
(12, 21, 6, '2019-03-01', '2019-04-03', 4, 0),
(14, 21, 6, '2019-05-01', '2019-08-20', 4, 0),
(38, 1, 5, NULL, NULL, 4, 200),
(39, 1, 5, NULL, NULL, 4, 200),
(40, 1, 5, NULL, NULL, 2, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `eClave` int NOT NULL AUTO_INCREMENT,
  `eNombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `eCIF` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `eMunicipio` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `eProvincia` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `eCP` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ePais` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'España',
  `eEmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ePass` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`eClave`),
  UNIQUE KEY `eEmailIndice` (`eEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`eClave`, `eNombre`, `eCIF`, `eMunicipio`, `eProvincia`, `eCP`, `ePais`, `eEmail`, `ePass`) VALUES
(1, 'Repuestos Albacete S.L.', 'B02456785', 'Albacete', 'Albacete', '02003', 'España', NULL, ''),
(2, 'Desarrollos de Software Asturias S.L.', 'B33565866', 'Oviedo', 'Asturias', '33256', 'España', NULL, ''),
(3, 'Calimero S.A.', 'B5082564', 'Cuenca', 'Cuenca', '16032', 'España', NULL, ''),
(4, 'Cristales de Gafas Bartolo S.A.', 'B2563522', 'Madrid', 'Madrid', '28080', 'España', NULL, ''),
(5, 'Calzados Astrolopitecus S.A.', 'B2323569', 'Chinchilla de Montearagon', 'Albacete', '02605', 'España', NULL, ''),
(6, 'Software As Services S.L.U.', 'B2922522', 'Torrejón de Ardoz', 'Madrid', '28055', 'España', NULL, ''),
(7, 'Servicios Informáticos Integrales S.L.', 'B0232356', 'Albacete', 'Albacete', '02001', 'España', NULL, ''),
(8, 'sf', '53245698', 'asdfa', 'Albacete', '02005', 'Spain', 'alqaid@gmail.com', '333'),
(10, 'Angel Alcaide', '2345678', 'albacete', 'Albacete', '02005', 'Spain', 'alqaid1@gmail.com', '2121'),
(11, 'Vinos la Mancha S.L.', '987458', 'Albacete', 'Albacete', '02005', 'Spain', 'vinos@gmail.com', '444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informaticos`
--

DROP TABLE IF EXISTS `informaticos`;
CREATE TABLE IF NOT EXISTS `informaticos` (
  `iClave` int NOT NULL AUTO_INCREMENT COMMENT 'clave',
  `iNombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'nombre completo',
  `iDNI` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `iEmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `iTelefono` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'telefono ',
  `iPass` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `iMunicipio` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `iProvincia` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `iCP` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `iPais` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'España',
  `iDescripcionCorta` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `iDescripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`iClave`),
  UNIQUE KEY `iDNI` (`iDNI`),
  UNIQUE KEY `iEmail` (`iEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `informaticos`
--

INSERT INTO `informaticos` (`iClave`, `iNombre`, `iDNI`, `iEmail`, `iTelefono`, `iPass`, `iMunicipio`, `iProvincia`, `iCP`, `iPais`, `iDescripcionCorta`, `iDescripcion`) VALUES
(1, 'José Miguel Aguilar Rico', '63258741', 'jmcaras@gmail.com', '987654321', '81dc9bdb52d04dc20036dbd8313ed055', 'Albacete', 'Albacete', '02005', 'España', '', 'Programador Senior.\r\nExperto en Php, HTML5, JAVASCRIPT, ANGULAR, PYTHON.'),
(2, 'Raúl Martínez García', '41236589', 'rmgarc@gmail.com', '671825963', '81dc9bdb52d04dc20036dbd8313ed055', 'Albacete', 'Albacete', '02002', 'España', '', 'Experto en JAVASCRIPT, JAVA.'),
(3, 'Javier Olmedo Santos', '36548789', 'josantos@gmail.com', '698547852', '81dc9bdb52d04dc20036dbd8313ed055', 'Almansa', 'Albacete', '02354', 'España', '', 'Programador Junior.\r\nExperto en Php, HTML5.'),
(4, 'Marcial Ruiz Escribano', '50896541', 'mrescrib@gmail.com', '674852147', '81dc9bdb52d04dc20036dbd8313ed055', 'Madrigueras', 'Albacete', '02598', 'España', '', NULL),
(5, 'Lorenzo Ruíz Cabrera', '41852369', 'lorenzr@gmail.com', NULL, '81dc9bdb52d04dc20036dbd8313ed055', 'Alcantarilla', 'Múrcia', '31022', 'España', '', 'Programador Junior.\r\nExperto en  HTML5, JAVASCRIPT.'),
(6, 'Ángel Alcaide Romero', '52987456', 'angel@gmail.com', '689722587', '81dc9bdb52d04dc20036dbd8313ed055', 'Madrid', 'Madrid', '28080', 'España', '', 'Programador Senior.\r\nExperto en Php, HTML5, JAVASCRIPT, ANGULAR, C#.'),
(7, 'José Ángel González Martínez', '52478963', 'jagonza@gmail.com', '689587951', '81dc9bdb52d04dc20036dbd8313ed055', 'Albacete', 'Albacete', '02005', 'España', '', 'Programador Senior.\r\nExperto en Php, HTML5, JAVASCRIPT, ANGULAR, .NET.'),
(8, 'Damian Escobar Blázquez\r\n', '42568985', 'damian@gmail.com', '685987456', '81dc9bdb52d04dc20036dbd8313ed055', 'Orihuela', 'Alicante', '03258', 'España', '', 'Programador Senior.\r\nExperto en Php, HTML5, JAVASCRIPT, ANGULAR, JAVA.'),
(19, 'María Martínez Martínez ', '91236583', 'mariamgarc@gmail.com', '691825663', '81dc9bdb52d04dc20036dbd8313ed055', 'Barcelona', 'Barcelona', '05002', 'España', '', 'Experto en JAVASCRIPT, JAVA.'),
(20, 'Elena Santos Gutierrez', '63548789', 'elena@gmail.com', '698547852', '81dc9bdb52d04dc20036dbd8313ed055', 'León', 'León', '25354', 'España', '', 'Programador Junior.\r\nExperto en Php, HTML5.'),
(21, 'Lucía García Escribano', '30896541', 'rauiz@gmail.com', '673852147', '81dc9bdb52d04dc20036dbd8313ed055', 'Albacete', 'Albacete', '02598', 'España', '', NULL),
(22, 'Raquel Sánchez Sánchez', '32478963', 'sanchez@gmail.com', '639582351', '81dc9bdb52d04dc20036dbd8313ed055', 'Albacete', 'Albacete', '02005', 'España', '', 'Programador Senior.\r\nExperto en Php, HTML5, JAVASCRIPT, ANGULAR, .NET.'),
(23, 'Cristina Escobar Blázquez\r\n', '32568985', 'crisn@gmail.com', '685987123', '81dc9bdb52d04dc20036dbd8313ed055', 'Alicante', 'Alicante', '03258', 'España', '', 'Programador Senior.\r\nExperto en Php, HTML5, JAVASCRIPT, ANGULAR, JAVA.'),
(28, 'Jose Angel Gonzalez Martined', '49212403Q', 'joestheorigen@gmail.com', '636249688', '$2y$10$uq6RIq.IV1bcjVk2hiwLReCeyYWEcam.3wf6On10j6.BEmq8texl6', 'albacete', 'Albacete', '02006', 'España', 'as', 'as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `sClave` int NOT NULL AUTO_INCREMENT,
  `sAsunto` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sDescripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sFechaPublicacion` date NOT NULL,
  `sFechaFinPublicacion` date NOT NULL,
  `seClaveEmpresa` int NOT NULL,
  `sSalario` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`sClave`),
  KEY `seClaveEmpresa` (`seClaveEmpresa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`sClave`, `sAsunto`, `sDescripcion`, `sFechaPublicacion`, `sFechaFinPublicacion`, `seClaveEmpresa`, `sSalario`) VALUES
(1, 'Se requiere consultor de seguridad', 'Se precisa profesional para auditoría de seguridad en sucursal de Alicante', '2020-11-05', '2021-01-05', 3, 0),
(15, 'Desarrollar APP Android', 'Necesitamos programador para desarrollar App en Android', '2020-11-06', '2020-12-06', 1, 5000),
(27, 'Se requiere consultor de seguridad', 'Presisamos profesional para auditoría de seguridad', '2020-11-08', '2021-01-01', 8, 1500),
(29, 'Desarrollar APP IOS', 'prueba', '2020-11-07', '2020-12-02', 7, 2341),
(34, 'oo', 'fdsfdg', '2020-11-07', '2020-12-07', 6, 333),
(35, 'Desarrollar APP IOS', 'PRIEBA', '2020-11-07', '2020-12-07', 3, 3333),
(36, 'Se necesita informático', 'urgente...', '2020-11-08', '2020-12-08', 10, 1000),
(37, 'Se necesita fontanero', 'no es urgente', '2020-11-08', '2020-12-08', 10, 500),
(38, 'Buscamos desarrollador PHYTON', 'Trabajo de 3 meses de duración, requerimos experiencia y conocimientos en ORACLE', '2020-11-08', '2020-12-08', 7, 2500),
(39, 'Visual Studio', 'Borland c++', '2020-11-08', '2020-12-08', 7, 333),
(40, 'as', 'as', '2020-11-13', '2020-12-13', 10, 320);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistacontrataciones`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vistacontrataciones`;
CREATE TABLE IF NOT EXISTS `vistacontrataciones` (
`Puntuacion` int
,`Fecha_Inicio` date
,`Fecha_Fin` date
,`NOMBRE` varchar(100)
,`CIF` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistacontratacionesinformaticosempresas`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vistacontratacionesinformaticosempresas`;
CREATE TABLE IF NOT EXISTS `vistacontratacionesinformaticosempresas` (
`Empresa` varchar(100)
,`Informatico` varchar(100)
,`Puntuacion` int
,`cFechaInicio` date
,`cFechaFin` date
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vistacontrataciones`
--
DROP TABLE IF EXISTS `vistacontrataciones`;

DROP VIEW IF EXISTS `vistacontrataciones`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistacontrataciones`  AS  select `contratos`.`cPuntuacion` AS `Puntuacion`,`contratos`.`cFechaInicio` AS `Fecha_Inicio`,`contratos`.`cFechaFin` AS `Fecha_Fin`,`empresas`.`eNombre` AS `NOMBRE`,`empresas`.`eCIF` AS `CIF` from (`contratos` join `empresas`) where (`contratos`.`ceClaveEmpresas` = `empresas`.`eClave`) order by `empresas`.`eNombre`,`contratos`.`cFechaInicio` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vistacontratacionesinformaticosempresas`
--
DROP TABLE IF EXISTS `vistacontratacionesinformaticosempresas`;

DROP VIEW IF EXISTS `vistacontratacionesinformaticosempresas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistacontratacionesinformaticosempresas`  AS  select `empresas`.`eNombre` AS `Empresa`,`informaticos`.`iNombre` AS `Informatico`,`contratos`.`cPuntuacion` AS `Puntuacion`,`contratos`.`cFechaInicio` AS `cFechaInicio`,`contratos`.`cFechaFin` AS `cFechaFin` from ((`contratos` join `empresas`) join `informaticos`) where ((`contratos`.`ceClaveEmpresas` = `empresas`.`eClave`) and (`contratos`.`ciClaveInformaticos` = `informaticos`.`iClave`)) order by `empresas`.`eNombre`,`informaticos`.`iNombre`,`contratos`.`cPuntuacion` ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `candidatos_ibfk_1` FOREIGN KEY (`ciClaveInformaticos`) REFERENCES `informaticos` (`iClave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `candidatos_ibfk_2` FOREIGN KEY (`csClaveServicio`) REFERENCES `servicios` (`sClave`);

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `ceClaveEmpresasF` FOREIGN KEY (`ceClaveEmpresas`) REFERENCES `empresas` (`eClave`),
  ADD CONSTRAINT `ciClaveInformaticosF` FOREIGN KEY (`ciClaveInformaticos`) REFERENCES `informaticos` (`iClave`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`seClaveEmpresa`) REFERENCES `empresas` (`eClave`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

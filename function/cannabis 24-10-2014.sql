-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2014 a las 16:09:23
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cannabis`
--
CREATE DATABASE IF NOT EXISTS `cannabis` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `cannabis`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `mail`) VALUES
(1, 'admin', '123', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
  `COM_ID` int(11) NOT NULL,
  `REG_ID` int(11) DEFAULT NULL,
  `COM_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`COM_ID`),
  KEY `FK_RELATIONSHIP_3` (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`COM_ID`, `REG_ID`, `COM_NOMBRE`) VALUES
(0, 0, 'Sin definir'),
(1, 11, 'Aisén'),
(2, 5, 'Algarrobo'),
(3, 13, 'Alhué'),
(4, 8, 'Alto Biobío'),
(5, 3, 'Alto Del Carmen'),
(6, 1, 'Alto Hospicio'),
(7, 10, 'Ancud'),
(8, 4, 'Andacollo'),
(9, 9, 'Angol'),
(10, 12, 'Antártica'),
(11, 2, 'Antofagasta'),
(12, 8, 'Antuco'),
(13, 8, 'Arauco'),
(14, 15, 'Arica'),
(15, 13, 'Buin'),
(16, 8, 'Bulnes'),
(17, 5, 'Cabildo'),
(18, 12, 'Cabo De Hornos'),
(19, 8, 'Cabrero'),
(20, 2, 'Calama'),
(21, 10, 'Calbuco'),
(22, 3, 'Caldera'),
(23, 5, 'Calera'),
(24, 13, 'Calera De Tango'),
(25, 5, 'Calle Larga'),
(26, 15, 'Camarones'),
(27, 1, 'Camiña'),
(28, 4, 'Canela'),
(29, 8, 'Cañete'),
(30, 9, 'Carahue'),
(31, 5, 'Cartagena'),
(32, 5, 'Casablanca'),
(33, 10, 'Castro'),
(34, 5, 'Catemu'),
(35, 7, 'Cauquenes'),
(36, 13, 'Cerrillos'),
(37, 13, 'Cerro Navia'),
(38, 10, 'Chaiten'),
(39, 3, 'Chañaral'),
(40, 7, 'Chanco'),
(41, 6, 'Chépica'),
(42, 8, 'Chiguayante'),
(43, 11, 'Chile Chico'),
(44, 8, 'Chillán'),
(45, 8, 'Chillán Viejo'),
(46, 6, 'Chimbarongo'),
(47, 9, 'Chol Chol'),
(48, 10, 'Chonchi'),
(49, 11, 'Cisnes'),
(50, 8, 'Cobquecura'),
(51, 10, 'Cochamó'),
(52, 11, 'Cochrane'),
(53, 6, 'Codegua'),
(54, 8, 'Coelemu'),
(55, 11, 'Coihaique'),
(56, 8, 'Coihueco'),
(57, 6, 'Coinco'),
(58, 7, 'Colbún'),
(59, 1, 'Colchane'),
(60, 13, 'Colina'),
(61, 9, 'Collipulli'),
(62, 6, 'Coltauco'),
(63, 4, 'Combarbalá'),
(64, 8, 'Concepción'),
(65, 13, 'Conchalí'),
(66, 5, 'Concón'),
(67, 7, 'Constitución'),
(68, 8, 'Contulmo'),
(69, 3, 'Copiapó'),
(70, 4, 'Coquimbo'),
(71, 8, 'Coronel'),
(72, 14, 'Corral'),
(73, 9, 'Cunco'),
(74, 9, 'Curacautín'),
(75, 13, 'Curacaví'),
(76, 10, 'Curaco De Velez'),
(77, 8, 'Curanilahue'),
(78, 9, 'Curarrehue'),
(79, 7, 'Curepto'),
(80, 7, 'Curicó'),
(81, 10, 'Dalcahue'),
(82, 3, 'Diego De Almagro'),
(83, 6, 'Doñihue'),
(84, 13, 'El Bosque'),
(85, 8, 'El Carmen'),
(86, 13, 'El Monte'),
(87, 5, 'El Quisco'),
(88, 5, 'El Tabo'),
(89, 7, 'Empedrado'),
(90, 9, 'Ercilla'),
(91, 13, 'Estación Central'),
(92, 8, 'Florida'),
(93, 9, 'Freire'),
(94, 3, 'Freirina'),
(95, 10, 'Fresia'),
(96, 10, 'Frutillar'),
(97, 10, 'Futaleufú'),
(98, 14, 'Futrono'),
(99, 9, 'Galvarino'),
(100, 15, 'General Lagos'),
(101, 9, 'Gorbea'),
(102, 6, 'Graneros'),
(103, 11, 'Guaitecas'),
(104, 5, 'Hijuelas'),
(105, 10, 'Hualaihué'),
(106, 7, 'Hualañé'),
(107, 8, 'Hualpén'),
(108, 8, 'Hualqui'),
(109, 1, 'Huara'),
(110, 3, 'Huasco'),
(111, 13, 'Huechuraba'),
(112, 4, 'Illapel'),
(113, 13, 'Independencia'),
(114, 1, 'Iquique'),
(115, 13, 'Isla De Maipo'),
(116, 5, 'Isla De Pascua'),
(117, 5, 'Juan Fernandez'),
(118, 13, 'La Cisterna'),
(119, 5, 'La Cruz'),
(120, 6, 'La Estrella'),
(121, 13, 'La Florida'),
(122, 13, 'La Granja'),
(123, 4, 'La Higuera'),
(124, 5, 'La Ligua'),
(125, 13, 'La Pintana'),
(126, 13, 'La Reina'),
(127, 4, 'La Serena'),
(128, 14, 'La Unión'),
(129, 14, 'Lago Ranco'),
(130, 11, 'Lago Verde'),
(131, 12, 'Laguna Blanca'),
(132, 8, 'Laja'),
(133, 13, 'Lampa'),
(134, 14, 'Lanco'),
(135, 6, 'Las Cabras'),
(136, 13, 'Las Condes'),
(137, 9, 'Lautaro'),
(138, 8, 'Lebu'),
(139, 7, 'Licantén'),
(140, 5, 'Limache'),
(141, 7, 'Linares'),
(142, 6, 'Litueche'),
(143, 5, 'Llaillay'),
(144, 10, 'Llanquihue'),
(145, 13, 'Lo Barnechea'),
(146, 13, 'Lo Espejo'),
(147, 13, 'Lo Prado'),
(148, 6, 'Lolol'),
(149, 9, 'Loncoche'),
(150, 7, 'Longaví'),
(151, 9, 'Lonquimay'),
(152, 8, 'Los Alamos'),
(153, 5, 'Los Andes'),
(154, 8, 'Los Ángeles'),
(155, 14, 'Los Lagos'),
(156, 10, 'Los Muermos'),
(157, 9, 'Los Sauces'),
(158, 4, 'Los Vilos'),
(159, 8, 'Lota'),
(160, 9, 'Lumaco'),
(161, 6, 'Machalí'),
(162, 13, 'Macul'),
(163, 14, 'Máfil'),
(164, 13, 'Maipú'),
(165, 6, 'Malloa'),
(166, 6, 'Marchigüe'),
(167, 2, 'María Elena'),
(168, 13, 'María Pinto'),
(169, 14, 'Mariquina'),
(170, 7, 'Maule'),
(171, 10, 'Maullín'),
(172, 2, 'Mejillones'),
(173, 9, 'Melipeuco'),
(174, 13, 'Melipilla'),
(175, 7, 'Molina'),
(176, 4, 'Monte Patria'),
(177, 6, 'Mostazal'),
(178, 8, 'Mulchén'),
(179, 8, 'Nacimiento'),
(180, 6, 'Nancagua'),
(181, 12, 'Natales'),
(182, 6, 'Navidad'),
(183, 8, 'Negrete'),
(184, 8, 'Ninhue'),
(185, 8, 'Ñiquén'),
(186, 5, 'Nogales'),
(187, 9, 'Nueva Imperial'),
(188, 13, 'Ñuñoa'),
(189, 11, 'O''higgins'),
(190, 6, 'Olivar'),
(191, 2, 'Ollagüe'),
(192, 5, 'Olmué'),
(193, 10, 'Osorno'),
(194, 4, 'Ovalle'),
(195, 13, 'Padre Hurtado'),
(196, 9, 'Padre Las Casas'),
(197, 4, 'Paihuano'),
(198, 14, 'Paillaco'),
(199, 13, 'Paine'),
(200, 10, 'Palena'),
(201, 6, 'Palmilla'),
(202, 14, 'Panguipulli'),
(203, 5, 'Panquehue'),
(204, 5, 'Papudo'),
(205, 6, 'Paredones'),
(206, 7, 'Parral'),
(207, 13, 'Pedro Aguirre Cerda'),
(208, 7, 'Pelarco'),
(209, 7, 'Pelluhue'),
(210, 8, 'Pemuco'),
(211, 13, 'Peñaflor'),
(212, 13, 'Peñalolén'),
(213, 7, 'Pencahue'),
(214, 8, 'Penco'),
(215, 6, 'Peralillo'),
(216, 9, 'Perquenco'),
(217, 5, 'Petorca'),
(218, 6, 'Peumo'),
(219, 1, 'Pica'),
(220, 6, 'Pichidegua'),
(221, 6, 'Pichilemu'),
(222, 8, 'Pinto'),
(223, 13, 'Pirque'),
(224, 9, 'Pitrufquén'),
(225, 6, 'Placilla'),
(226, 8, 'Portezuelo'),
(227, 12, 'Porvenir'),
(228, 1, 'Pozo Almonte'),
(229, 12, 'Primavera'),
(230, 13, 'Providencia'),
(231, 5, 'Puchuncaví'),
(232, 9, 'Pucón'),
(233, 13, 'Pudahuel'),
(234, 13, 'Puente Alto'),
(235, 10, 'Puerto Montt'),
(236, 10, 'Puerto Octay'),
(237, 10, 'Puerto Varas'),
(238, 6, 'Pumanque'),
(239, 4, 'Punitaqui'),
(240, 12, 'Punta Arenas'),
(241, 10, 'Puqueldón'),
(242, 9, 'Purén'),
(243, 10, 'Purranque'),
(244, 5, 'Putaendo'),
(245, 15, 'Putre'),
(246, 10, 'Puyehue'),
(247, 10, 'Queilén'),
(248, 10, 'Quellón'),
(249, 10, 'Quemchi'),
(250, 8, 'Quilaco'),
(251, 13, 'Quilicura'),
(252, 8, 'Quilleco'),
(253, 8, 'Quillón'),
(254, 5, 'Quillota'),
(255, 5, 'Quilpué'),
(256, 10, 'Quinchao'),
(257, 6, 'Quinta De Tilcoco'),
(258, 13, 'Quinta Normal'),
(259, 5, 'Quintero'),
(260, 8, 'Quirihue'),
(261, 6, 'Rancagua'),
(262, 8, 'Ránquil'),
(263, 7, 'Rauco'),
(264, 13, 'Recoleta'),
(265, 9, 'Renaico'),
(266, 13, 'Renca'),
(267, 6, 'Rengo'),
(268, 6, 'Requínoa'),
(269, 7, 'Retiro'),
(270, 5, 'Rinconada'),
(271, 14, 'Río Bueno'),
(272, 7, 'Río Claro'),
(273, 4, 'Río Hurtado'),
(274, 11, 'Río Ibañez'),
(275, 10, 'Río Negro'),
(276, 12, 'Río Verde'),
(277, 7, 'Romeral'),
(278, 9, 'Saavedra'),
(279, 7, 'Sagrada Familia'),
(280, 4, 'Salamanca'),
(281, 5, 'San Antonio'),
(282, 13, 'San Bernardo'),
(283, 8, 'San Carlos'),
(284, 7, 'San Clemente'),
(285, 13, 'San Esteban'),
(286, 8, 'San Fabián'),
(287, 5, 'San Felipe'),
(288, 6, 'San Fernando'),
(289, 12, 'San Gregorio'),
(290, 8, 'San Ignacio'),
(291, 7, 'San Javier'),
(292, 13, 'San Joaquín'),
(293, 13, 'San José De Maipo'),
(294, 10, 'San Juan De La Costa'),
(295, 13, 'San Miguel'),
(296, 8, 'San Nicolás'),
(297, 10, 'San Pablo'),
(298, 13, 'San Pedro'),
(299, 2, 'San Pedro De Atacama'),
(300, 8, 'San Pedro De La Paz'),
(301, 7, 'San Rafael'),
(302, 13, 'San Ramón'),
(303, 8, 'San Rosendo'),
(304, 6, 'San Vicente'),
(305, 8, 'Santa Bárbara'),
(306, 6, 'Santa Cruz'),
(307, 8, 'Santa Juana'),
(308, 5, 'Santa María'),
(309, 13, 'Santiago'),
(310, 5, 'Santo Domingo'),
(311, 2, 'Sierra Gorda'),
(312, 13, 'Talagante'),
(313, 7, 'Talca'),
(314, 8, 'Talcahuano'),
(315, 2, 'Taltal'),
(316, 9, 'Temuco'),
(317, 7, 'Teno'),
(318, 9, 'Teodoro Schmidt'),
(319, 3, 'Tierra Amarilla'),
(320, 13, 'Tiltil'),
(321, 12, 'Timaukel'),
(322, 8, 'Tirúa'),
(323, 2, 'Tocopilla'),
(324, 9, 'Toltén'),
(325, 8, 'Tomé'),
(326, 12, 'Torres Del Paine'),
(327, 11, 'Tortel'),
(328, 9, 'Traiguén'),
(329, 8, 'Treguaco'),
(330, 8, 'Tucapel'),
(331, 14, 'Valdivia'),
(332, 3, 'Vallenar'),
(333, 5, 'Valparaíso'),
(334, 7, 'Vichuquén'),
(335, 9, 'Victoria'),
(336, 4, 'Vicuña'),
(337, 9, 'Vilcún'),
(338, 7, 'Villa Alegre'),
(339, 5, 'Villa Alemana'),
(340, 9, 'Villarrica'),
(341, 5, 'Viña Del Mar'),
(342, 13, 'Vitacura'),
(343, 7, 'Yerbas Buenas'),
(344, 8, 'Yumbel'),
(345, 8, 'Yungay'),
(346, 5, 'Zapallar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `PRO_ID` int(11) NOT NULL,
  `PED_ID` int(11) NOT NULL,
  `DET_CANTIDAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`PRO_ID`,`PED_ID`),
  KEY `FK_RELATIONSHIP_6` (`PED_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`PRO_ID`, `PED_ID`, `DET_CANTIDAD`) VALUES
(1, 8, 1),
(1, 9, 1),
(2, 8, 1),
(2, 9, 1),
(3, 8, 1),
(3, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `DIR_ID` int(11) NOT NULL,
  `USU_ID` int(11) DEFAULT NULL,
  `COM_ID` int(11) DEFAULT NULL,
  `DIR_DIRECCION` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`DIR_ID`),
  KEY `FK_RELATIONSHIP_1` (`USU_ID`),
  KEY `FK_RELATIONSHIP_2` (`COM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`DIR_ID`, `USU_ID`, `COM_ID`, `DIR_DIRECCION`) VALUES
(1, 1, 1, 'ble ble'),
(2, 2, NULL, NULL),
(9, 9, NULL, 'Sin Definir'),
(11, 11, 1, 'Sin Definir'),
(12, 12, 1, 'Sin Definir'),
(13, 13, 1, 'Sin Definir'),
(14, 14, 1, 'Sin Definir'),
(15, 15, 2, 'El Almendro 4321'),
(16, 16, 59, 'El Almendro 123'),
(18, 18, 167, 'asdasdasd1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `PED_ID` int(11) NOT NULL,
  `USU_ID` int(11) DEFAULT NULL,
  `PED_VALOR` int(11) DEFAULT NULL,
  `PED_ESTADO` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PED_FECHA` date NOT NULL,
  PRIMARY KEY (`PED_ID`),
  KEY `FK_RELATIONSHIP_4` (`USU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`PED_ID`, `USU_ID`, `PED_VALOR`, `PED_ESTADO`, `PED_FECHA`) VALUES
(1, 1, 621560, 'aprobado', '0000-00-00'),
(2, 4, 123, 'p', '2014-10-27'),
(3, 1, 621560, 'rechazado', '0000-00-00'),
(4, 1, 40570, 'rechazado', '0000-00-00'),
(5, 1, 40570, 'pendiente', '0000-00-00'),
(6, 1, 19990, 'pendiente', '0000-00-00'),
(7, 1, 19990, 'pendiente', '2014-08-20'),
(8, 18, 19990, 'pendiente', '2014-10-08'),
(9, 18, 33900, 'pendiente', '2014-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PRO_DESCRIPCION` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PRO_IMG` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PRO_VALOR` int(11) DEFAULT NULL,
  PRIMARY KEY (`PRO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRO_ID`, `PRO_NOMBRE`, `PRO_DESCRIPCION`, `PRO_IMG`, `PRO_VALOR`) VALUES
(1, 'CREMA FACIAL DE CANNABIS', 'Crema Facial Hidratante y Nutritiva, con Aceite de Cannabis Sativa 100 % puro, rico en Ácidos Grasos esenciales, Omega 3, Omega 6 y Acido Linoleico que previenen el envejecimiento prematuro de la piel. Recomendado para pieles Secas y Sensibles. Atenúa líne', '1.png', 12900),
(2, 'SERUM CONTORNO DE OJOS', 'Actúa en forma Antiedematosa, restaurando los signos propios del envejecimiento y micro agresiones del área del ojo, ayudando a la flacidez, descongestionando bolsas y ojeras, reforzando y suavizando la piel. Contenido Neto: 15 ml.', '2.png', 12500),
(3, 'CREMA MANOS Y CUERPO DE CANNABIS', 'Especialmente formulada para proteger su piel otorgando suavidad, humectación e hidratación dada la presencia de Ácidos Grasos esenciales contenidos en el Aceite de Cannabis Sativa OMEGA 3, 6 Y 9. Producto ANTI-AGE, con Pantalla solar. Contenido Neto: 150 ', '3.png', 8500),
(4, 'ACEITE PARA MASAJES DE CANNABIS', 'Aceite corporal para Masajes con las propiedades del Aceite de Cannabis Sativa, los cuales regeneran y aumentan la resistencia de la piel, otorgando elasticidad y suavidad al tacto, devolviendo humedad y tersura a su piel. Contenido Neto: 60 ml.', '4.png', 8500),
(5, 'ACEITE DE CANNABIS', 'Aceite de cáñamo especialmente indicado para pieles secas y/o agrietadas, mantiene hidratada la piel de cutis, manos y cuerpo, restaura los aceites naturales de la piel, rico en aceites esenciales Omega 3 y Omega 6. \r\nContenido Neto: 110 ml.', '5.png', 9900),
(6, 'SHAMPOO Y ACONDICIONADOR', 'Shampoo Hidratante del cabello, con Aceite de Cannabis Sativa 100% puro, rico en Omega 3 y 6, previene el resecamiento del cuero cabelludo, ayuda a prevenir la caspa. Por su PH neutro esta formulado para todo tipo de cabellos. Contenido Neto: 280 ml.\r\nAcon', '6.png', 4500),
(7, 'GEL DE BAÑO DE CANNABIS', 'Producto enriquecido con Aceite 100% puro de Cannabis Sativa, el cual provoca en su piel hidratación y nutrición dejándola suave y confortable durante todo el día. PH neutro para uso familiar. Contenido Neto: 400 ml.', '7.png', 4500),
(8, 'JABÓN DE CANNABIS', 'Jabón de Cannabis elaborado a base de aceite de semilla de cáñamo 100% puro, cuyos componentes naturales como Omega 3 y Omega 6 regeneran y aumentan la resistencia y elasticidad de la piel. Recomendado para pieles dañadas, sensibles o secas. Así como para ', '8.png', 3500),
(9, 'EXFOLIANTE DE CANNABIS', 'Exfoliante de cáñamo limpia y suaviza profundamente la piel, impidiendo la acomulación de toxinas, acelera la circulación sanguínea, aumenta la oxigenación de la piel, mejora la absorción, gracias a  los principios activos de los aceites. Contenido Neto: 1', '9.png', 3900),
(10, 'ACEITE DE CÁÑAMO GOURMET', 'Aceite Gourmet 100% puro Semilla de cáñamo. Rico en Omegas 3 - 6 y 9.\r\nIngredientes\r\nAceite de semilla de cáñamo (cannabis sativa, orgánico), menor al 0.4% de acidez.\r\nContenido Neto: 250 cc.', '10.png', 12900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REG_ID` int(11) NOT NULL,
  `REG_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`REG_ID`, `REG_NOMBRE`) VALUES
(0, 'Sin definir'),
(1, 'I. Tarapacá'),
(2, 'II. Antofagasta'),
(3, 'III. Atacama'),
(4, 'IV. Coquimbo'),
(5, 'V. Valparaiso'),
(6, 'VI. O''Higgins'),
(7, 'VII. Maule'),
(8, 'VIII. Biobío'),
(9, 'IX. La Araucanía'),
(10, 'X. Los Lagos'),
(11, 'XI. Aysén'),
(12, 'XII. Magallanes'),
(13, 'RM. Metropolitana'),
(14, 'XIV. Los Ríos'),
(15, 'XV. Arica y Parinacota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USU_NOMBRE` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `USU_FONO` int(11) DEFAULT NULL,
  `USU_MAIL` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `USU_EDAD` date DEFAULT NULL,
  `USU_PASS` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_fecha` date NOT NULL,
  PRIMARY KEY (`USU_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USU_ID`, `USU_NOMBRE`, `USU_FONO`, `USU_MAIL`, `USU_EDAD`, `USU_PASS`, `usu_fecha`) VALUES
(1, 'mario', 1111111, 'mario@mario.cl', '2014-07-16', 'mario', '0000-00-00'),
(2, 'pablo', 22222222, 'pablo@pablo.cl', '2014-07-31', 'pablo', '0000-00-00'),
(3, 'pedro', NULL, 'pedro@pedro.cl', '1905-05-04', '123', '0000-00-00'),
(4, 'agua', NULL, 'agua@aaa.aa', '1962-11-08', 'agua', '0000-00-00'),
(5, 'caca', NULL, 'caca@caca.ca', '1900-01-01', 'caca', '0000-00-00'),
(6, 'peroo', NULL, 'peroo@ppp.cl', '1905-03-03', '123', '0000-00-00'),
(7, 'gato', NULL, 'gato@gato.cl', '1901-03-03', '123', '0000-00-00'),
(8, 'cana', NULL, 'cana@cana.cl', '1901-03-04', 'asd', '0000-00-00'),
(9, 'perico', NULL, 'perico@perico.cl', '1903-05-04', '123', '0000-00-00'),
(10, 'popo', NULL, 'popo@popo.cl', '1902-04-04', 'popo', '0000-00-00'),
(11, 'nana', NULL, 'nana@nana.cl', '1903-04-03', '1234', '0000-00-00'),
(12, 'pali', NULL, 'pali@pali.cl', '1902-04-03', 'pali', '0000-00-00'),
(13, 'hugo', NULL, 'hugo@hugo.cl', '1962-04-03', 'hugo', '0000-00-00'),
(14, 'keko', NULL, 'keko@keko.cl', '1905-04-06', 'keko', '2014-08-20'),
(15, 'jeje', NULL, 'jeje@jeje.cl', '1915-09-18', 'jeje', '2014-08-29'),
(16, 'huhu', 123456, 'huhu@huhu.cl', '1915-10-17', 'huhu', '2014-09-25'),
(17, 'kkkk', NULL, 'kkkk@kkkk.cl', '1916-10-14', 'kkkk', '2014-10-24'),
(18, 'jjjjj', NULL, 'jjjj@jjjj.cl', '1943-07-16', 'jjjj', '2014-10-24');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`REG_ID`) REFERENCES `region` (`REG_ID`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`PED_ID`) REFERENCES `pedido` (`PED_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`PRO_ID`) REFERENCES `producto` (`PRO_ID`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`USU_ID`) REFERENCES `usuario` (`USU_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`COM_ID`) REFERENCES `comuna` (`COM_ID`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`USU_ID`) REFERENCES `usuario` (`USU_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

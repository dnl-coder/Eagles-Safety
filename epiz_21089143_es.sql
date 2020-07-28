-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-07-2020 a las 06:27:48
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_21089143_es`
--
CREATE DATABASE IF NOT EXISTS `epiz_21089143_es` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `epiz_21089143_es`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `CATCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO DE LA CATEGORÍA',
  `CATNOMBRE` varchar(30) NOT NULL COMMENT 'NOMBRE DE LA CATEGORÍA',
  `CATIMAGEN` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'IMAGEN DE LA CATEGORIA',
  `CATICONO` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ICONO DE LA CATEGORIA',
  PRIMARY KEY (`CATCODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CATCODIGO`, `CATNOMBRE`, `CATIMAGEN`, `CATICONO`) VALUES
(1, 'Protección Anticaída', 'anticaida.png', 'p-anticaida.png'),
(2, 'Protección Auditiva', 'auditiva.png', 'p-auditiva.png'),
(3, 'Protección Cabeza', 'cabeza.png', 'p-cabeza.png'),
(4, 'Protección Manos', 'manos.png', 'p-manos.png'),
(5, 'Protección Respiratoria', 'respiratoria.png', 'p-respiratoria.png'),
(6, 'Protección Visual', 'visual.png', 'p-visual.png'),
(7, 'Ropa Impermeable', 'impermeable.png', 'p-impermeable.png'),
(8, 'Ropa Descartable', 'descartable.png', 'p-descartable.png'),
(9, 'Protección Pies', 'pies.png', 'p-pies.png'),
(10, 'Protección Corporal', 'corporal.png', 'p-corporal.png'),
(11, 'Señalización', 'señalizacion.png', 'p-señalizacion.png'),
(12, 'Otros Equipos de Protección', 'otros.png', 'p-otros.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente1-presentacion`
--

DROP TABLE IF EXISTS `componente1-presentacion`;
CREATE TABLE IF NOT EXISTS `componente1-presentacion` (
  `C1CODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO DEL COMPONENTE 1',
  `C1TITULO` varchar(100) NOT NULL COMMENT 'TITULO DEL COMPONENTE 1',
  `C1SUBTITULO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'SUBTITULO DEL COMPONENTE 1',
  `C1DESCRIPCION` text NOT NULL COMMENT 'DESCRIPCION DEL COMPONENTE 1',
  `C1IMAGEN` text COMMENT 'IMAGEN DEL COMPONENTE 1',
  `C1DESTACAMOS` text COMMENT 'DESTACAMOS DEL COMPONENTE 1',
  `C1CARACTERISTICA1` text COMMENT 'CARACTERISTICA 1 DEL COMPONENTE 1',
  `C1CARACTERISTICA2` text COMMENT 'CARACTERISTICA 2 DEL COMPONENTE 1',
  `C1CARACTERISTICA3` text COMMENT 'CARACTERISTICA 3 DEL COMPONENTE 1',
  `C1CARACTERISTICA4` text COMMENT 'CARACTERISTICA 4 DEL COMPONENTE 1',
  `C1CARACTERISTICA5` text COMMENT 'CARACTERISTICA 5 DEL COMPONENTE 1',
  `C1CARACTERISTICA6` text COMMENT 'CARACTERISTICA 6 DEL COMPONENTE 1',
  PRIMARY KEY (`C1CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='COMPONENTE 1 DEL INDEX DE LA PAGINA';

--
-- Volcado de datos para la tabla `componente1-presentacion`
--

INSERT INTO `componente1-presentacion` (`C1CODIGO`, `C1TITULO`, `C1SUBTITULO`, `C1DESCRIPCION`, `C1IMAGEN`, `C1DESTACAMOS`, `C1CARACTERISTICA1`, `C1CARACTERISTICA2`, `C1CARACTERISTICA3`, `C1CARACTERISTICA4`, `C1CARACTERISTICA5`, `C1CARACTERISTICA6`) VALUES
(1, 'EXPERIENCIA, SEGURIDAD Y GARANTÍA', 'Calidad al alcance de todos', 'Somos una empresa importadora, comercializadora y exportadora de equipos de proteccion personal (epp\'s) enfocada en brindar un buen nivel de servicio. Nuestros productos aseguran calidad, seguridad y confiabilidad. Todo lo que el cliente necesita para llegar seguro a casa.', 'ES-FrontEnd/Elementos/Imagenes/Componentes/ES-Banner1.png', 'SIN DESCRIPCION', 'Todas nuestros productos son de alta calidad', 'Toda venta es importante para nosotros', 'La mejor selección de marcas para nuestros clientes', 'Nuestros clientes nos respaldan y prefieren', 'Proceso rápido y seguro recomendado por quienes nos eligen', 'Los mejores EPPS en un solo lugar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componente2-adicional`
--

DROP TABLE IF EXISTS `componente2-adicional`;
CREATE TABLE IF NOT EXISTS `componente2-adicional` (
  `C2CODIGO` int(11) NOT NULL COMMENT 'CODIGO DEL COMPONENTE',
  `C2TITULO` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'TITULO DEL COMPONENTE 2',
  `C2DESCRIPCION` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'DESCRIPCION DEL COMPONENTE',
  `C2IMAGEN1` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'IMAGEN 1 DEL COMPONENTE ',
  `C2IMAGEN2` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'IMAGEN 2 DEL COMPONENTE',
  `C2T1TITULO` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'TITULO DEL TEXTO 1',
  `C2T1DESCRIPCION` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'DESCRIPCION DEL TEXTO 1',
  `C2T2TITULO` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'TITULO DEL TEXTO 2',
  `C2T2DESCRIPCION` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'DESCRIPCION DEL TEXTO 2',
  `C2T3TITULO` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'TITULO DEL TEXTO 3',
  `C2T3DESCRIPCION` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'DESCRIPCION DEL TEXTO 3',
  PRIMARY KEY (`C2CODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='COMPONENTE 2 DEL INDEX DE LA PAGINA';

--
-- Volcado de datos para la tabla `componente2-adicional`
--

INSERT INTO `componente2-adicional` (`C2CODIGO`, `C2TITULO`, `C2DESCRIPCION`, `C2IMAGEN1`, `C2IMAGEN2`, `C2T1TITULO`, `C2T1DESCRIPCION`, `C2T2TITULO`, `C2T2DESCRIPCION`, `C2T3TITULO`, `C2T3DESCRIPCION`) VALUES
(1, 'Los mejores EPPS en un solo lugar', 'Protección anticaída, cabeza, manos, pies y más...', 'ES-FrontEnd/Elementos/Imagenes/Componentes/proteccion-puesto-de-trabajo.jpg', 'ES-FrontEnd/Elementos/Imagenes/Componentes/banner2.jpg', '✔ EPPS DE CALIDAD', 'Protección anticaída, cabeza, manos, pies y más...', 'SIN DESCRIPCION', 'SIN DESCRIPCION', 'SIN DESCRIPCION', 'SIN DESCRIPCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

DROP TABLE IF EXISTS `componentes`;
CREATE TABLE IF NOT EXISTS `componentes` (
  `COMPCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO DEL COMPONENTE',
  `COMPSLIDER` int(11) NOT NULL COMMENT 'ESTILO DEL SLIDER',
  `COMP1` int(11) NOT NULL COMMENT 'ESTILO DEL COMPONENTE 1',
  `COMP2` int(11) NOT NULL COMMENT 'ESTILO DEL COMPONENTE 2',
  `COMP3` int(11) NOT NULL COMMENT 'ESTILO DEL COMPONENTE 3',
  `COMPDESTACADOS` int(11) NOT NULL COMMENT 'ESTILO DE LOS PRODUCTOS DESTACADOS',
  `COMPCATEGORIAS` int(11) NOT NULL COMMENT 'ESTILO CATEGORIAS DESTACADAS',
  `COMPMARCAS` int(11) NOT NULL COMMENT 'ESTILO MARCAS',
  PRIMARY KEY (`COMPCODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='ESTILOS DE COMPONENTES';

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`COMPCODIGO`, `COMPSLIDER`, `COMP1`, `COMP2`, `COMP3`, `COMPDESTACADOS`, `COMPCATEGORIAS`, `COMPMARCAS`) VALUES
(1, 3, 5, 4, 1, 3, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE IF NOT EXISTS `configuracion` (
  `CONFIGCODIGO` int(11) NOT NULL COMMENT 'CODIGO DE LA CONFIGURACION',
  `CONFIGCARRITO` int(11) NOT NULL COMMENT 'OPCION CARRITO DE COMPRAS',
  `CONFIGCOMPRA` int(11) NOT NULL COMMENT 'OPCION VENTA DE PRODUCTOS',
  PRIMARY KEY (`CONFIGCODIGO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='CONFIGURACION DE LA PAGINA';

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`CONFIGCODIGO`, `CONFIGCARRITO`, `CONFIGCOMPRA`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

DROP TABLE IF EXISTS `contactanos`;
CREATE TABLE IF NOT EXISTS `contactanos` (
  `CONTACCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO DEL REGISTRO DE PETICIÓN DE CONTACTO',
  `CONTACCORREO` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'CORREO DE LA ENTIDAD A CONTACTAR',
  `CONTACASUNTO` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'NOMBRE DE LA ENTIDAD A CONTACTAR',
  `CONTACMENSAJE` text NOT NULL COMMENT 'MENSAJE DE LA ENTIDAD A CONTACTAR',
  PRIMARY KEY (`CONTACCODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

DROP TABLE IF EXISTS `informacion`;
CREATE TABLE IF NOT EXISTS `informacion` (
  `INFEMPCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DE LA INFORMACIÓN DE LA EMPRESA',
  `INFEMPTITULO_PAGINA` varchar(40) NOT NULL COMMENT 'TITULO DE LA PÁGINA',
  `INFEMPICONO` varchar(200) NOT NULL COMMENT 'ÍCONO DE LA PÁGINA',
  `INFEMPLOGO` varchar(200) NOT NULL COMMENT 'LOGO DE LA EMPRESA',
  `INFEMPCORREO` varchar(30) NOT NULL COMMENT 'CORREO DE LA EMPRESA',
  `INFEMPTELEFONO1` varchar(11) NOT NULL COMMENT 'TELÉFONO 1 DE LA EMPRESA',
  `INFEMPTELEFONO2` varchar(11) NOT NULL COMMENT 'TELÉFONO 2 DE LA EMPRESA',
  `INFEMPRED_SOCIAL1` varchar(200) NOT NULL COMMENT 'RED SOCIAL 1 DE LA EMPRESA',
  `INFEMPRED_SOCIAL2` varchar(200) NOT NULL COMMENT 'RED SOCIAL 2 DE LA EMPRESA',
  `INFEMPDOMICILIO` varchar(200) NOT NULL COMMENT 'DOMICILIO DE LA EMPRESA',
  `INFEMPDISTRITO` varchar(30) NOT NULL COMMENT 'DISTRITO DE LA EMPRESA',
  `INFEMPPROVINCIA` varchar(30) NOT NULL COMMENT 'PROVINCIA DE LA EMPRESA',
  `INFEMPPAIS` varchar(30) NOT NULL COMMENT 'PAÍS DE LA EMPRESA',
  `REGCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE CAMBIOS',
  PRIMARY KEY (`INFEMPCODIGO`),
  KEY `FK_INFORMACION` (`REGCODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`INFEMPCODIGO`, `INFEMPTITULO_PAGINA`, `INFEMPICONO`, `INFEMPLOGO`, `INFEMPCORREO`, `INFEMPTELEFONO1`, `INFEMPTELEFONO2`, `INFEMPRED_SOCIAL1`, `INFEMPRED_SOCIAL2`, `INFEMPDOMICILIO`, `INFEMPDISTRITO`, `INFEMPPROVINCIA`, `INFEMPPAIS`, `REGCODIGO`) VALUES
(1, 'Eagles Safety', 'ES-FrontEnd/Elementos/Imagenes/Logo.png', 'ES-FrontEnd/Elementos/Imagenes/Logo.png', 'rmanrique@es.com.pe', '999229937', '923289190', 'https://www.facebook.com/EaglesSafetyEIRL/', 'https://www.linkedin.com/company/eagles-safety-eirl/', 'Calle Los Tornos 259 - Urb Ind Naranjal', 'SMP', 'LIMA', 'PERU', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `MARCCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO DE LA MARCA',
  `MARCNOMBRE` varchar(50) NOT NULL COMMENT 'NOMBRE DE LA MARCA',
  `MARCIMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DE LA MARCA',
  PRIMARY KEY (`MARCCODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`MARCCODIGO`, `MARCNOMBRE`, `MARCIMAGEN`) VALUES
(39, 'PROTECTA', 'ES-FrontEnd/Elementos/Imagenes/Marcas/protecta.png'),
(33, '3M', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca1.png'),
(34, 'EINS', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca2.png'),
(35, 'HOLZ&STEIN', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca3.png'),
(36, 'MSA', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca4.png'),
(37, 'NORTH', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca5.png'),
(38, 'STEELPRO SAFETY', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca6.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

DROP TABLE IF EXISTS `nosotros`;
CREATE TABLE IF NOT EXISTS `nosotros` (
  `NOSTCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE LA VISTA NOSOTROS',
  `NOSTDESCRIPCION` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'DESCRIPCIÓN DE LA VISTA NOSOTROS',
  `NOSTVISION` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'DESCRIPCIÓN DE LA VISIÓN DE LA EMPRESA',
  `NOSTVISION_IMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DE LA VISIÓN',
  `NOSTMISION` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'DESCRIPCIÓN DE LA MISIÓN DE LA EMPRESA',
  `NOSTMISION_IMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DE LA MISIÓN',
  `REGCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE CAMBIOS',
  PRIMARY KEY (`NOSTCODIGO`),
  KEY `FK_NOSOTROS` (`REGCODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`NOSTCODIGO`, `NOSTDESCRIPCION`, `NOSTVISION`, `NOSTVISION_IMAGEN`, `NOSTMISION`, `NOSTMISION_IMAGEN`, `REGCODIGO`) VALUES
(1, 'Somos una empresa importadora, comercializadora y exportadora de equipos de proteccion personal (epp\'s) enfocada en brindar un buen nivel de servicio. Nuestros productos aseguran calidad, seguridad y confiabilidad. Todo lo que el cliente necesita para llegar seguro a casa.', 'Convertirnos en una empresa reconocida en su sector por brindar una atención de calidad a sus clientes en la comercialización de equipos de protección, seguridad y afines.', 'ES-FrontEnd/Elementos/Imagenes/Nosotros/Logo.png', 'Proveer equipos de protección personal de calidad que cumplan con los requerimientos de los clientes y brinden un desenvolvimiento seguro de cada usuario en todos los sectores productivos del Perú.', 'ES-FrontEnd/Elementos/Imagenes/Nosotros/Logo.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paleta-colores`
--

DROP TABLE IF EXISTS `paleta-colores`;
CREATE TABLE IF NOT EXISTS `paleta-colores` (
  `COLORCODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `COLORPRIMARY` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR PRIMARIO DE LA PAGINA',
  `COLORSECUNDARY` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR SECUNDARIO DE LA PAGINA',
  `COLORENFASIS1` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR DE ENFASIS 1 DE LA PAGINA',
  `COLORENFASIS2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR DE ENFASIS 2 DE LA PAGINA',
  `COLORENFASIS3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR DE ENFASIS 3 DE LA PAGINA',
  `COLORLIGHT1` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR CLARO 1 DE LA PAGINA',
  `COLORLIGHT2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR CLARO 2 DE LA PAGINA',
  `COLORLIGHT3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'COLOR CLARO 3 DE LA PAGINA',
  PRIMARY KEY (`COLORCODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='PALETA DE COLORES DE LA PAGINA';

--
-- Volcado de datos para la tabla `paleta-colores`
--

INSERT INTO `paleta-colores` (`COLORCODIGO`, `COLORPRIMARY`, `COLORSECUNDARY`, `COLORENFASIS1`, `COLORENFASIS2`, `COLORENFASIS3`, `COLORLIGHT1`, `COLORLIGHT2`, `COLORLIGHT3`) VALUES
(1, '#5EAE27', '#666568', '#00838f', '#006064', '#00e676', '#e8f5e9', '#c8e6c9', '#a5d6a7'),
(2, '#4528af', '#666568', '#00838f', '#006064', '#00e676', '#e8f5e9', '#c8e6c9', '#a5d6a7'),
(3, '#3f6dd9', '#7c758a', '#0571ff', '#295eff', '#00e6d6', '#eaf6f5', '#c7dce6', '#a4b0d5'),
(8, '#ea55ec', '#665764', '#70008f', '#290066', '#a800e6', '#f4eaf6', '#d8c7e6', '#a4a6d5'),
(9, '#3f6dd9', '#7c758a', '#0571ff', '#295eff', '#00e6d6', '#eaf6f5', '#c7dce6', '#a4b0d5'),
(10, '#5eae27', '#666568', '#00838f', '#006064', '#00e676', '#e8f5e9', '#c8e6c9', '#a5d6a7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `PRODCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO DEL PRODUCTO',
  `PRODNOMBRE` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'NOMBRE DEL PRODUCTO',
  `PRODCODIGOES` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'CODIGO ESPECIFICO DEL PRODUCTO',
  `PRODIMAGEN` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'IMAGEN DEL PRODUCTO',
  `PRODPRESENTACION` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'PRESENTACION DEL PRODUCTO',
  `CODMARCA` int(11) NOT NULL COMMENT 'CODIGO DE LA MARCA',
  `PRODTAGS` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'TAGS DEL PRODUCTO',
  `PRODDESCRIPCION` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'DESCRIPCION DEL PRODUCTO',
  `PRODFICHATEC` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'FICHA TECNICA DEL PRODUCTO',
  `CATCODIGO` int(11) NOT NULL COMMENT 'CATEGORIA DEL PRODUCTO',
  `PRODDESTACADO` int(11) NOT NULL COMMENT 'ES PRODUCTO DESTACADO?',
  PRIMARY KEY (`PRODCODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='PRODUCTOS DE LA PAGINA';

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRODCODIGO`, `PRODNOMBRE`, `PRODCODIGOES`, `PRODIMAGEN`, `PRODPRESENTACION`, `CODMARCA`, `PRODTAGS`, `PRODDESCRIPCION`, `PRODFICHATEC`, `CATCODIGO`, `PRODDESTACADO`) VALUES
(2, 'Arnés 3 anillos PROTECTA', '1161560 ', 'ARNES%203%20ANILLOS%20COD.%201161560%20MARCA%20PROTECTA.jpg', 'El Arnés de recuperación de detención de caídas Protecta™ Comfort. Adquiere un estilo en (H) de 3 argollas, resistente, ergonómico, moderno, sutil, fácil de graduar para brindar mayor comodidad al usuario.<div><br><div><ul><li>1 anillo en D posterior y 2 anillos en D laterales\n</li><li>Correas para piernas con hebilla de paso\n</li><li>Reguladores tipo paracaídas para torso\n</li><li>Estructura resistente, tejido trenzado de poliéster, seguros de eslingas integrados\n</li><li>Indicador de impacto\n</li><li>Etiquetas de control de inspección protegidas\n</li><li>Unidad de Medida: unidad\n</li></ul></div></div>', 39, '3M; PROTECTA; ANTICAÍDA; ARNES; EPP', '<b>Características</b><div><b><br></b><div><ul><li>Arnés estilo “H”.\n</li><li>Posee 3 argollas en D inspeccionadas y probadas 100% a 16 kN (3600 lb) de alta\n&nbsp;<span style=\"font-size: 1rem;\">resistencia a la tensión de rotura.&nbsp;</span></li><li>Fabricado en reata de 43 mm de ancho.\n</li><li>Reata 100% poliéster de alta resistencia a la tensión y abrasión.\n</li><li>Indicador de impacto integrado en la parte dorsal en las dos tirantas.\n</li><li>Hebillas de ajuste tipo corredera con tambor que permiten la graduación de la reata.\n</li><li>Hebillas de conexión y ajuste a nivel pélvico y pectoral, para ajuste a la talla del\n&nbsp;<span style=\"font-size: 1rem;\">usuario. Resistencia mínima a la rotura 15 kN (3.372 lb) de acuerdo con norma&nbsp;&nbsp;</span><span style=\"font-size: 1rem;\">ANSI Z359.12 – 2009.&nbsp;</span></li><li>Pad posterior para asegurar que la argolla dorsal permanezca en su lugar y que las tirantas\n&nbsp;<span style=\"font-size: 1rem;\">se crucen en la parte dorsal.&nbsp;</span></li><li>Diseñado para suministrar comodidad al usuario: Porta eslinga, tensor dorsal tirantas y\n&nbsp;<span style=\"font-size: 1rem;\">hebillas de conexión y ajuste.&nbsp;</span></li><li>Costura fabricada en hilo poliéster de alta resistencia y de color diferente a la reata para\n&nbsp;<span style=\"font-size: 1rem;\">mayor visibilidad y para facilitar su identificación e inspección.&nbsp;</span></li><li>Funda cubre etiqueta para mantener la información y trazabilidad.\n</li><li>Peso físico: 1.45 kg.\n</li><li>Arnés avalado de acuerdo con norma, elemento por elemento, en conjunto en prueba\n&nbsp;<span style=\"font-size: 1rem;\">dinámica (simulando caída cabeza y caída de pie) y estática de acuerdo con los requisitos&nbsp;</span><span style=\"font-size: 1rem;\">de la norma.</span></li></ul><div><b>Ventajas:\n</b></div></div><div><b><br></b></div><div><ul><li>Argolla dorsal fija, mantiene su posición reduciendo la necesidad de reajustarla en el trabajo\n&nbsp;<span style=\"font-size: 1rem;\">diario.&nbsp;</span></li><li>Porta eslingas con sistema de auto retorno a su forma original para posicionar los ganchos\n&nbsp;<span style=\"font-size: 1rem;\">y carabiner, de fácil y rápido desenganche. Cumplimiento ASI Z359.11&nbsp;</span></li><li>Indicador de impacto que permite identificar de manera sencilla si el arnés ha sido sometido\n&nbsp;<span style=\"font-size: 1rem;\">a cargas y/o impactos.&nbsp;</span></li><li>Protector de etiquetas para asegurar la durabilidad de la información y permite identificar\n&nbsp;<span style=\"font-size: 1rem;\">el equipo con el nombre del usuario</span></li></ul></div></div>', '-', 1, 1),
(3, 'Arnés 4 anillos PROTECTA', '1191279 ', 'ARNES 4 ANILLOS COD. 1191279 MARCA PROTECTA.jpg', '<div></div><div>Arnés multipropósito tipo chaleco 3M™ Protecta® con anillo en D fijo para reducir la necesidad de reajustes durante la jornada diaria de trabajo y diseño moderno que proporciona una apariencia moderna y elegante al arnés. Además, cuenta con conexión de paso para pecho y para pierna y anillos en D dorsales y posterior. Diseñados para brindar practicidad adicional, estos nuevos arneses soportan hasta 190 kg de peso total de trabajo.</div><div><br></div><div><ul><li>1 anillo D posterior, 2 anillos den D laterales y 1 anillo en D dorsal de acero monta \r</li><li>Anillos con resistencia para 5400 Lbs de tensión\r</li><li>Correas para piernas con hebilla de paso para un fácil acomodo y 100% seguro\r</li><li>Fabricado en cinta de poliéster de 1,75\' de ancho, en color gris en la parte inferior del arnés y de color rojo en la parte superior\r</li><li>Etiquetas de control de inspección protegidas\r</li><li>Unidad de Medida: unidad\r</li></ul></div>', 33, '3M; PROTECTA; ANTICAÍDA; ARNES; EPP', '<b>Detalles\r</b><div><br><div><ul><li>Anillo en D fijo que reduce la necesidad de reajustes durante la jornada diaria de trabajo\r</li><li>Diseño moderno que le otorga una apariencia moderna y elegante al arnés\r</li><li>Porta-eslingas de cumplimiento ANSI y ajuste automático para un acople fácil y rápido de ganchos a presión y mosquetones\r</li><li>Indicadores de impacto que facilitan la inspección del arnés en búsqueda de cargas de impacto previas peligrosas\r</li><li>Protector de etiqueta para la identificación e inspección a largo plazo\r</li><li>Anillos en D dorsales y posterior y conexión de paso para pecho y para pierna</li></ul></div></div>', '-', 1, 1),
(4, 'Arnés 3 anillos CONTRACTOR FIRST', '1170185', 'ARNES%203%20ANILLOS%20EN%20H%20COD.%201170185%20MOD.%20CONTRACTOR%20MARCA%203M.jpg', 'Elemento parte de un sistema personal de detención de caídas. Posee argolla dorsal para\n<div>restricción y detención de caídas, argollas de cadera (laterales) para posicionamiento y argolla\n</div><div>esternal para detención de caídas limitada, restricción de desplazamiento o rescate.</div><div><br></div><div><ul><li>Anillo en D trasero y dos anillos D laterales para posicionamiento\n</li><li>Correas de piernas con hebilla de paso\n</li><li>regulador para torso\n</li><li>Etiquetas de control de inspección protegidas\n</li><li>Unidad de Medida: unidad\n</li></ul></div>', 33, '3M; FIRST; ANTICAÍDA; ARNES; EPP', '<b>Características\n</b><div><b><br></b><div><ul><li>Arnés estilo “H”\n</li><li>Fabricado en reata de 43 mm de ancho.\n</li><li>Reata en poliéster 100% de alta resistencia a la tensión y abrasión.\n</li><li>Elaborado con argollas inspeccionadas y probadas 100% a 16 kN (3600 lb) y herrajes de\n alta resistencia a la tensión de rotura y a la corrosión.&nbsp;</li><li>Hebillas de conexión y ajuste a nivel pélvico y pectoral, para ajuste a la talla del usuario.\nResistencia mínima a la rotura 15 kN (3.372 lb) de acuerdo con norma ANSI Z359.12-2009.&nbsp;</li><li>Costuras fabricadas en hilo poliéster de alta resistencia y de color diferente a la reata para\n facilitar su identificación e inspección.&nbsp;</li><li>Pad posterior para asegurar que la argolla dorsal permanezca en su lugar y que las tirantas\n&nbsp;<span style=\"font-size: 1rem;\">se crucen en la parte dorsal.&nbsp;</span></li><li>Funda cubre etiqueta para mantener la información y trazabilidad.\n</li><li>Peso físico 1.21 kg.\n</li><li>Arnés avalado, elemento por elemento, en conjunto en prueba dinámica (simulando caída\n&nbsp;<span style=\"font-size: 1rem;\">de cabeza y de pie) y estática de acuerdo con los requisitos de la norma de referencia.</span></li></ul></div></div>', '-', 1, 0),
(5, 'Arnés 4 anillos CONTRACTOR FIRST', '1170186', 'ARNES 4 ANILLOS 1170186 CONTRACTOR FIRST.jpg', 'Elemento parte de un sistema personal de detención de caídas. Posee argolla dorsal para\r<div>restricción y detención de caídas, argollas de cadera (laterales) para posicionamiento y argolla\r</div><div>esternal para detención de caídas limitada, restricción de desplazamiento o rescate.</div><div><br></div><div><ul><li>1 anillo D posterior, 2 anillos den D laterales y 1 anillo en D dorsal de acero monta \r</li><li>Anillos con resistencia para 5400 Lbs de tensión\r</li><li>Correas para piernas con hebilla de paso para un fácil acomodo y 100% seguro\r</li><li>Fabricado en cinta de poliéster de 1,75\' de ancho, en color gris en la parte inferior del arnés y de color rojo en la parte superior\r</li><li>Etiquetas de control de inspección protegidas\r</li><li>Unidad de Medida: unidad\r</li></ul></div>', 33, '3M; FIRST; ANTICAÍDA; ARNES; EPP', '<b>Características\r</b><div><b><br></b><div><ul><li>Arnés estilo “H”\r</li><li>Fabricado en reata de 43 mm de ancho.\r</li><li>Reata en poliéster 100% de alta resistencia a la tensión y abrasión.\r</li><li>Elaborado con argollas inspeccionadas y probadas 100% a 16 kN (3600 lb) y herrajes de\r alta resistencia a la tensión de rotura y a la corrosión.&nbsp;</li><li>Hebillas de conexión y ajuste a nivel pélvico y pectoral, para ajuste a la talla del usuario.\r</li><li>Resistencia mínima a la rotura 15 kN (3.372 lb) de acuerdo con norma ANSI Z359.12-2009.\r</li><li>Costuras fabricadas en hilo poliéster de alta resistencia y de color diferente a la reata para\r&nbsp;<span style=\"font-size: 1rem;\">facilitar su identificación e inspección.&nbsp;</span></li><li>Pad posterior para asegurar que la argolla dorsal permanezca en su lugar y que las tirantas\r&nbsp;<span style=\"font-size: 1rem;\">se crucen en la parte dorsal.&nbsp;</span></li><li>Funda cubre etiqueta para mantener la información y trazabilidad.\r</li><li>Peso físico 1.21 kg.\r</li><li>Arnés avalado, elemento por elemento, en conjunto en prueba dinámica (simulando caída\r&nbsp;<span style=\"font-size: 1rem;\">de cabeza y de pie) y estática de acuerdo con los requisitos de la norma de referencia.</span></li></ul></div></div>', '-', 1, 0),
(6, 'Línea de Vida Doble de 1.80 Mt PROTECTA', '1340180 ', 'LINEA%20DE%20VIDA%20DOBLE%20GANCHO%20GRANDE%201.80%20MTS%20COD%201340180%20MARCA%20PROTECTA.jpg', '<div>Nuestra eslinga amortiguadora PRO™ con protector proporciona cumplimiento de normas de&nbsp;<span style=\"font-size: 1rem;\">alta calidad a un precio económico y cuenta con la confianza de los trabajadores. Se destacan\n&nbsp;</span><span style=\"font-size: 1rem;\">por su tejido trenzado duradero y herrajes de acero aleado recubiertos para mayor firmeza y&nbsp;</span><span style=\"font-size: 1rem;\">resistencia a la corrosión. Las eslingas PRO™ Pack cuentan con una acción de desgarro&nbsp;</span><span style=\"font-size: 1rem;\">controlada cuando se someten a una caída, reduciendo las fuerzas que se ejercen sobre el&nbsp;</span><span style=\"font-size: 1rem;\">usuario a niveles seguros y deteniendo la caída. Además, las eslingas PRO™ son de peso liviano&nbsp;</span><span style=\"font-size: 1rem;\">y proporcionan comodidad y seguridad adicionales. Están disponibles en varios estilos,&nbsp;</span><span style=\"font-size: 1rem;\">longitudes y opciones de ganchos para adaptarse a las necesidades específicas del lugar de&nbsp;</span><span style=\"font-size: 1rem;\">trabajo.</span></div>', 33, '3M; PROTECTA; ANTICAÍDA; LINEA DE VIDA; EPP', '<b>ASPECTOS DESTACADOS DEL PRODUCTO\r\n</b><div><b><br></b><div><ul><li>Línea de Vida de 1.80 mts de longitud con amortiguador de impacto PRO™ Pack Ganchos de 2 ¼” \r\n</li><li>Cumplimiento de normas de alta calidad a un precio económico y cuentan con la confianza de los trabajadores.\r\n</li><li>Destacan por su tejido trenzado duradero y ganchos de acero aleado con cierre automático que aportan mayor firmeza y resistencia a la corrosión.\r\n</li><li>Además, las eslingas PRO™ son de peso liviano y proporcionan comodidad y seguridad adicionales.\r\n</li><li>Unidad de Medida: unidad</li></ul></div></div>', '-', 1, 0),
(7, 'Línea de Vida Doble de 1.20 Mt PROTECTA', '1340182 ', 'LINEA%20DE%20VIDA%20DOBLE%20GANCHO%20GRANDE%201.20%20MTS%20COD%201340182%20MARCA%20PROTECTA.jpg', 'PRO™ Shock Absorbing lanyards en reata polyester durable de 1\" (25 mm)\n&nbsp;<span style=\"font-size: 1rem;\">con mosquetones de 3.600 lb. (16kN) de resistencia en el gancho y un&nbsp;</span><span style=\"font-size: 1rem;\">absorvedor de energía diseñado para limitar el promedio de la fuerza de&nbsp;</span><span style=\"font-size: 1rem;\">detención de caída .a 900 lbs. (4kN) para mayor seguridad.</span>', 33, '3M; PROTECTA; ANTICAÍDA; LINEA DE VIDA; EPP', '<b>ASPECTOS DESTACADOS</b><div><br></div><div><ul><li>Línea de vida de 1.20 mts de longitud con amortiguador de impacto PRO™ Pack\n</li><li>Ganchos de 2 ¼”\n</li><li>Cumplimiento de normas de alta calidad a un precio económico y cuentan con la confianza de los trabajadores. \n</li><li>Destacan por su tejido trenzado duradero y ganchos de acero aleado con cierre automático que aportan mayor firmeza y resistencia a la corrosión. \n</li><li>Además, las eslingas PRO™ son de peso liviano y proporcionan comodidad y seguridad adicionales. \n</li><li>Unidad de medida: unidad \n</li></ul></div>', '-', 1, 1),
(8, 'Línea de Vida Doble de 1.80 Mt FIRST ', '1228019 ', 'LINEA DE VIDA DOBLE GANCHO GRANDE COD. 1228019 MARCA FIRST 3M.jpg', 'Eslinga para detención de caídas con doble terminal, dos ganchos de 2 1⁄4” de apertura y\r&nbsp;<span style=\"font-size: 1rem;\">uno de 3⁄4”. Longitud de 1.8m y absorvedor de energía.</span><div><span style=\"font-size: 1rem;\"><br></span></div><div><ul><li><span style=\"font-size: 1rem;\">Línea de Vida de 1.80 mts de longitud con amortiguador de impacto\r</span></li><li><span style=\"font-size: 1rem;\">Ganchos de 2 ¼” \r</span></li><li><span style=\"font-size: 1rem;\">Cumplimiento de normas de alta calidad a precio justo.\r</span></li><li><span style=\"font-size: 1rem;\">Unidad de medida : unidad\r</span></li></ul></div><div><span style=\"font-size: 1rem;\"><br></span></div>', 33, '3M; PROTECTA; ANTICAÍDA; LINEA DE VIDA; EPP', '<b>USOS\r</b><div><b><br></b><div>Subsistema parte de un sistema personal de detención de caídas, posee tres puntos de\r</div><div>anclaje. Este elemento permite al usuario desplazarse manteniéndose siempre anclado\r</div><div>por lo menos de un punto, alternando uno a uno los ganchos de los extremos de la\r</div><div>eslinga.</div><div><br></div><div><b>CARACTERÍSTICAS\r</b></div><div>\r</div><div><ul><li>El absorbedor de energía está diseñado para amortiguar y reducir la fuerza del\r&nbsp;<span style=\"font-size: 1rem;\">impacto producida en la detención.&nbsp;</span></li><li>Terminales: Reata poliéster de 25mm de ancho\r</li><li>Absorbedor: Reata poliéster de 45mm de ancho\r</li><li>Ganchos de apertura 2 1⁄4” y uno de 3⁄4”</li></ul></div></div>', '-', 1, 0),
(9, 'Bloque Retráctil con Cinta de Nylon  PROTECTA', '3100425 ', 'BLOQUE RETRACTIL CON CINTA PROTECTA 3100425.jpg', 'Bloque Retráctil de tejido trenzado de Poliester de 11 pies de largo (3.30 mts) y de 1” ancho (2.50 cm)\r<div><br><div><ul><li>Gancho de seguridad\r</li><li>Anclaje Giratorio\r</li><li>Mosquetón de Anclaje\r</li><li>Carcasa termoplástica apilable, robusta y resistente a impactos\r</li><li>Sistema de Freno con sensor de velocidad de activación rápida\r</li><li>Unidad de medida: unidad\r</li></ul></div><div><br></div></div>', 33, '3M; PROTECTA; ANTICAÍDA; BLOQUE RETRACTIL; EPP', '<b>ASPECTOS DESTACADOS</b><div><br></div><div><ul><li>Gancho de seguridad\r</li><li>Anclaje Giratorio\r</li><li>Mosquetón de Anclaje\r</li><li>Carcasa termoplástica apilable, robusta y resistente a impactos\r</li><li>Sistema de Freno con sensor de velocidad de activación rápida\r</li><li>Unidad de medida: unidad\r</li></ul></div>', '-', 1, 0),
(10, 'Bloque Retráctil con Cable de Acero PROTECTA', 'Varios', 'BLOQUE RETRACTIL CON CABLE ACERO PROTECTA.jpg', '<div>Protecta®\r&nbsp;<span style=\"font-size: 1rem;\">RebelTM&nbsp;</span><span style=\"font-size: 1rem;\">es una solución de protección anticaídas que no compromete el presupuesto ni la seguridad, y proporciona a los trabajadores una&nbsp;</span><span style=\"font-size: 1rem;\">mayor movilidad. Estos anticaídas autorretráctiles incorporan un anticaídas que se extiende y se retrae de forma automática, lo que permite el&nbsp;</span><span style=\"font-size: 1rem;\">libre movimiento alrededor del área de trabajo.&nbsp;</span></div><div><span style=\"font-size: 1rem;\"><br></span></div><div><b>Variedades\r</b></div><div>\r</div><div><ul><li>Bloque Retráctil 15 pies -&gt; Cod. 3590019 \r</li><li>Bloque Retráctil 20 pies -&gt; Cod. 3590514\r</li><li>Bloque Retráctil 33 pies -&gt; Cod. 3590500\r</li><li>Bloque Retráctil 50 pies -&gt; Cod. 3590550\r</li></ul></div>', 33, '3M; PROTECTA; ANTICAÍDA; BLOQUE RETRACTIL; EPP', '<div><b>ASPECTOS DESTACADOS</b></div><div><b><br></b></div><ul><li>Bloque Retráctil de Cable de Acero galvanizado 3/16” (5 mm) y recubierta polimérica \r</li><li>Gancho de seguridad\r</li><li>Anclaje Giratorio\r</li><li>Mosquetón de Anclaje con apertura ¾” \r</li><li>Carcasa termoplástica apilable, robusta y resistente a impactos\r</li><li>Sistema de Freno con sensor de velocidad de activación rápida\r</li><li>Unidad de medida: Unidad\r</li></ul><div><b>Variedades</b></div><div><b><br></b></div><div><ul><li>Bloque Retráctil 15 pies -&gt; Cod. 3590019 \r</li><li>Bloque Retráctil 20 pies -&gt; Cod. 3590514\r</li><li>Bloque Retráctil 33 pies -&gt; Cod. 3590500\r</li><li>Bloque Retráctil 50 pies -&gt; Cod. 3590550\r</li></ul></div>', '-', 1, 0),
(11, 'Línea de Vida Doble Cable de Acero de 1.80 Mt PROTECTA', '1340452', 'LINEA%20DE%20VIDA%20DOBLE%20CABLE%20DE%20ACERO%20DE%201.80%20MT%201340452%20PROTECTA.JPG', 'Nuestra eslinga amortiguadora PROTM con protector proporciona cumplimiento de normas\n&nbsp;<span style=\"font-size: 1rem;\">de alta calidad a un precio económico y cuenta con la confianza de los trabajadores. Se&nbsp;</span><span style=\"font-size: 1rem;\">destacan por su tejido trenzado duradero y herrajes de acero aleado recubiertos para&nbsp;</span><span style=\"font-size: 1rem;\">mayor firmeza y resistencia a la corrosión. Las eslingas PROTM Pack cuentan con una acción&nbsp;</span><span style=\"font-size: 1rem;\">de desgarro controlada cuando se someten a una caída, reduciendo las fuerzas que se&nbsp;</span><span style=\"font-size: 1rem;\">ejercen sobre el usuario a niveles seguros y deteniendo la caída. Además, las eslingas&nbsp;</span><span style=\"font-size: 1rem;\">PROTM son de peso liviano y proporcionan comodidad y seguridad adicionales. Están&nbsp;</span><span style=\"font-size: 1rem;\">disponibles en varios estilos, longitudes y opciones de ganchos para adaptarse a las&nbsp;</span><span style=\"font-size: 1rem;\">necesidades específicas del lugar de trabajo.</span><div><span style=\"font-size: 1rem;\"><br></span></div><div><ul><li><span style=\"font-size: 1rem;\">Línea de Vida de 1.80 Mts de longitud con amortiguador de impacto PRO™ Pack\n</span></li><li><span style=\"font-size: 1rem;\">Cuerda de Doble Brazo de Cable de Acero Galvanizado de ¼” (6.3 mm) con recubierta de PVC\n</span></li><li><span style=\"font-size: 1rem;\">Ganchos de 2 ¼”\n</span></li><li><span style=\"font-size: 1rem;\">Cumplimiento de normas de alta calidad, las eslingas PRO™ son de peso liviano y proporcionan comodidad y seguridad adicionales.\n</span></li><li><span style=\"font-size: 1rem;\">Indicador de Impacto\n</span></li><li><span style=\"font-size: 1rem;\">Unidad de medida: Unidad\n</span></li></ul></div>', 33, '3M; PROTECTA; ANTICAÍDA; LINEA DE VIDA; EPP', '<b>ASPECTOS DESTACADOS DEL PRODUCTO\n</b><div><b><br></b><div><ul><li>Eslinga de doble brazo de 1.8 m (6 ft) con conexión de 100 %.</li><li>Diseño liviano y fácil de usar.&nbsp;</li><li>Paquete amortiguador de PVC con etiqueta protegida.&nbsp;</li><li>Cable con revestimiento de vinilo de 6.3 mm (1/4 in).&nbsp;</li><li><span style=\"font-size: 1rem;\">El diseño de absorción de energía limita las fuerzas de detención de\n&nbsp;</span><span style=\"font-size: 1rem;\">caídas.&nbsp;</span></li><li>Ganchos de seguridad de cierre automático fáciles de usar en cada\n&nbsp;<span style=\"font-size: 1rem;\">extremo.&nbsp;</span></li><li>Indicador de impacto.</li></ul></div></div>', '-', 1, 0),
(12, 'GOLIAT GORDO Y PANZON', '1234', 'pantalla.jpg', 'lorem ipsum', 36, 'msa', 'lorem', 'RH JUNIO.pdf', 7, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocambios`
--

DROP TABLE IF EXISTS `registrocambios`;
CREATE TABLE IF NOT EXISTS `registrocambios` (
  `REGCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE CAMBIOS',
  `REGFECHA_CREACION` date NOT NULL COMMENT 'FECHA DE CREACIÓN DEL CAMPO',
  `REGFECHA_MODIFICACION` date NOT NULL COMMENT 'FECHA DE MODIFICACIÓN DEL CAMPO',
  `USUACODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL USUARIO',
  PRIMARY KEY (`REGCODIGO`),
  KEY `FK_REGISTROCAMBIOS` (`USUACODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrocambios`
--

INSERT INTO `registrocambios` (`REGCODIGO`, `REGFECHA_CREACION`, `REGFECHA_MODIFICACION`, `USUACODIGO`) VALUES
(1, '2019-04-18', '2019-04-18', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `SLDRCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO SLIDER',
  `SLDRNOMBRE` varchar(50) NOT NULL COMMENT 'NOMBRE DEL SLIDER',
  `SLDRDESCRIPCION` varchar(200) NOT NULL COMMENT 'DESCRIPCION DEL SLIDER',
  `SLDRIMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DEL SLIDER',
  PRIMARY KEY (`SLDRCODIGO`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`SLDRCODIGO`, `SLDRNOMBRE`, `SLDRDESCRIPCION`, `SLDRIMAGEN`) VALUES
(34, 'EQUIPOS QUE PROTEGEN TU VIDA', 'Tenemos los mejores productos para garantizar tu cuidado.', 'ES-FrontEnd/Elementos/Imagenes/Slider/recurso.png'),
(35, 'EXPERIENCIA, SEGURIDAD Y GARANTIA', 'Tenemos los mejores productos para garantizar tu cuidado.', 'ES-FrontEnd/Elementos/Imagenes/Slider/construction-709487_1920.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `USUACODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL USUARIO',
  `USUANOMBRE` varchar(30) NOT NULL COMMENT 'NOMBRE DE LA PERSONA',
  `USUAAPELLIDO` varchar(30) NOT NULL COMMENT 'APELLIDO DE LA PERSONA',
  `USUAUSER` varchar(20) NOT NULL COMMENT 'NOMBRE DEL USUARIO',
  `USUAPASSWORD` varchar(20) NOT NULL COMMENT 'CONTRASEÑA DEL USUARIO',
  `USUAIMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DEL USUARIO',
  `USUAESTADO` varchar(15) NOT NULL COMMENT 'ESTADO DEL USUARIO',
  `USUAACCESO` varchar(15) NOT NULL COMMENT 'NIVEL DEL ACCESO DEL USUARIO',
  PRIMARY KEY (`USUACODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`USUACODIGO`, `USUANOMBRE`, `USUAAPELLIDO`, `USUAUSER`, `USUAPASSWORD`, `USUAIMAGEN`, `USUAESTADO`, `USUAACCESO`) VALUES
(1, 'Angy', 'Chapa', 'micha', 'micha123', '-', 'ACTIVO', 'ADMINISTRADOR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

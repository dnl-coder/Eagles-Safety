-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-06-2020 a las 16:06:38
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
-- Estructura de tabla para la tabla `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `BANNCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL BANNER',
  `BANNTIPO` varchar(15) NOT NULL COMMENT 'TIPO DE BANNER',
  `BANNTITULO` varchar(35) NOT NULL COMMENT 'TITULO DE BANNER',
  `BANNDESCRIPCION` varchar(200) NOT NULL COMMENT 'DESCRIPCIÓN DEL BANNER',
  `BANNIMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN BANNER',
  `REGCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE CAMBIOS',
  PRIMARY KEY (`BANNCODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`BANNCODIGO`, `BANNTIPO`, `BANNTITULO`, `BANNDESCRIPCION`, `BANNIMAGEN`, `REGCODIGO`) VALUES
(1, 'B1', 'EXPERIENCIA, SEGURIDAD Y GARANTIA', 'Tenemos los mejores productos para garantizar que siempre regreses seguro a tu hogar.', 'ES-FrontEnd/Elementos/Imagenes/Banners/$_10.jpg', 1),
(2, 'B2', 'CONOCE MAS ACERCA DE NOSOTROS', 'Somos parte de Industrias Manrique S.A.C. empresa dedicada a diseñar, fabricar y comercializar productos para la protección personal desde 1996.', 'ES-FrontEnd/Elementos/Imagenes/Banners/ES-Banner2.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `CATCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO DE LA CATEGORÍA',
  `CATNOMBRE` varchar(30) NOT NULL COMMENT 'NOMBRE DE LA CATEGORÍA',
  PRIMARY KEY (`CATCODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CATCODIGO`, `CATNOMBRE`) VALUES
(1, 'Protección Anticaída'),
(2, 'Protección Auditiva'),
(3, 'Protección Cabeza'),
(4, 'Protección Manos'),
(5, 'Protección Respiratoria'),
(6, 'Protección Visual'),
(7, 'Protección Ropa Impermeable'),
(8, 'Protección Ropa Descartable'),
(9, 'Protección Pies'),
(10, 'Protección Corporal'),
(11, 'Señalización'),
(12, 'Otros Equipos de Protección');

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
(1, 'EXPERIENCIA, SEGURIDAD Y GARANTIA', 'Los mejores', 'Tenemos los mejores productos para garantizar que siempre regreses seguro a tu hogar.', 'ES-FrontEnd/Elementos/Imagenes/Banners/ES-Banner1.png', 'Tenemos los mejores productos para garantizar que siempre regreses seguro a tu hogar.', 'MICHA GATA GORDA PELUDA OREJONA CACHETONA JUGUETONA LINDA BELLA HERMOSA PRECIOSA X33333333', 'LEOPOLDO GATO GORDO PELUDO OREJON CACHETON JUGUETON LINDO BELLO HERMOSO PRECIOSO X33333333', 'GOLIAT GATO GORDO PELUDO OREJON CACHETON JUGUETON LINDO BELLO HERMOSO PRECIOSO X33333333', 'CUCHA GATA GORDA PELUDA OREJONA CACHETONA JUGUETONA LINDA BELLA HERMOSA PRECIOSA X33333333', 'CHUQUI GATA GORDA PELUDA OREJONA CACHETONA JUGUETONA LINDA BELLA HERMOSA PRECIOSA X33333333', 'MINI GATA GORDA PELUDA OREJONA CACHETONA JUGUETONA LINDA BELLA HERMOSA PRECIOSA X33333333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

DROP TABLE IF EXISTS `componentes`;
CREATE TABLE IF NOT EXISTS `componentes` (
  `COMPCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CODIGO DEL COMPONENTE',
  `COMP1` int(11) NOT NULL COMMENT 'ESTILO DEL COMPONENTE 1',
  `COMP2` int(11) NOT NULL COMMENT 'ESTILO DEL COMPONENTE 2',
  `COMP3` int(11) NOT NULL COMMENT 'ESTILO DEL COMPONENTE 3',
  PRIMARY KEY (`COMPCODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='ESTILOS DE COMPONENTES';

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`COMPCODIGO`, `COMP1`, `COMP2`, `COMP3`) VALUES
(1, 1, 1, 1);

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
(1, 'Eagles Safety', 'ES-FrontEnd/Elementos/Imagenes/sinImagen.png', 'ES-FrontEnd/Elementos/Imagenes/perfil.jpg', 'rmanrique@es.com.pe', '994654825', '996357254', 'https://www.facebook.com/EaglesSafetyEIRL/', 'https://www.linkedin.com/company/eagles-safety-eirl/', 'Calle Los Tornos 259 - Urb Ind Naranjal', 'SMP', 'LIMA', 'PERU', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`MARCCODIGO`, `MARCNOMBRE`, `MARCIMAGEN`) VALUES
(1, '3M', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca1.png'),
(2, 'STEELPRO', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca2.png'),
(3, 'eins', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca3.png'),
(4, 'MSA', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca4.png'),
(5, 'HOLZ&STEIN', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca5.png'),
(6, 'NORTH', 'ES-FrontEnd/Elementos/Imagenes/Marcas/marca6.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

DROP TABLE IF EXISTS `nosotros`;
CREATE TABLE IF NOT EXISTS `nosotros` (
  `NOSTCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE LA VISTA NOSOTROS',
  `NOSTDESCRIPCION` varchar(300) NOT NULL COMMENT 'DESCRIPCIÓN DE LA VISTA NOSOTROS',
  `NOSTVISION` varchar(300) NOT NULL COMMENT 'DESCRIPCIÓN DE LA VISIÓN DE LA EMPRESA',
  `NOSTVISION_IMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DE LA VISIÓN',
  `NOSTMISION` varchar(300) NOT NULL COMMENT 'DESCRIPCIÓN DE LA MISIÓN DE LA EMPRESA',
  `NOSTMISION_IMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DE LA MISIÓN',
  `REGCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DEL REGISTRO DE CAMBIOS',
  PRIMARY KEY (`NOSTCODIGO`),
  KEY `FK_NOSOTROS` (`REGCODIGO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`NOSTCODIGO`, `NOSTDESCRIPCION`, `NOSTVISION`, `NOSTVISION_IMAGEN`, `NOSTMISION`, `NOSTMISION_IMAGEN`, `REGCODIGO`) VALUES
(1, 'Somos una empresa importadora, comercializadora y exportadora de equipos de proteccion personal (epp\'s) enfocada en brindar un buen nivel de servicio. Nuestros productos aseguran calidad, seguridad y confiabilidad. Todo lo que el cliente necesita para llegar seguro a casa.', 'Convertirnos en una empresa reconocida en su sector por brindar una atención de calidad a sus clientes.', 'ES-FrontEnd/Elementos/Imagenes/ES-Icon.png', 'Nuestra misión es proveer equipos de protección personal epp\'s de calidad que cumplan con los requerimientos de los clientes y brinden un desenvolvimiento seguro de cada usuario en todos los sectores productivos del Perú.', 'ES-FrontEnd/Elementos/Imagenes/ES-Icon.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `PRODCODIGO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO DEL PRODUCTO',
  `PRODNOMBRE` varchar(100) NOT NULL COMMENT 'NOMBRE DEL PRODUCTO',
  `PRODIMAGEN` varchar(200) NOT NULL COMMENT 'RUTA DE LA IMAGEN DEL PRODUCTO',
  `PRODDESCRIPCION` text NOT NULL COMMENT 'DESCRIPCIÓN EXTENSA DEL PRODUCTO',
  `PRODDESCRIPCION_ESPECIFICA` varchar(900) NOT NULL COMMENT 'DESCRIPCIÓN BREVE DEL PRODUCTO',
  `CATCODIGO` int(11) NOT NULL COMMENT 'CÓDIGO DE LA CATEGORÍA',
  `PRODDESTACADO` int(1) NOT NULL COMMENT 'INDICADOR DE PRODUCTO DESTACADO',
  PRIMARY KEY (`PRODCODIGO`),
  KEY `FK_PRODUCTO` (`CATCODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRODCODIGO`, `PRODNOMBRE`, `PRODIMAGEN`, `PRODDESCRIPCION`, `PRODDESCRIPCION_ESPECIFICA`, `CATCODIGO`, `PRODDESTACADO`) VALUES
(1, 'ARNES 3 ANILLOS COD. 1191205 MARCA PROTECTA', 'ARNES 3 ANILLOS 1191205 PROTECTA.jpg', 'ARNES DE 3 ANILLOS 1191205 PROTECTA', 'ARNES 3 ANILLOS 1191205 PROTECTA \r\nAnillo en D trasero y anillos en D laterales, correas para piernas con hebilla de paso, reguladores paracaídas para torso.\r\nEstructura resistente, tejido trenzado de poliéster, seguros de eslingas integrados, indicador de impacto. Etiquetas protegidas\r\nUnidad de Medida : UND\r\nMarca: PROTECTA', 1, 1),
(2, 'ARNES 3 ANILLOS COD. 1161560 MARCA PROTECTA', 'ARNES 3 ANILLOS COD. 1161560 MARCA PROTECTA.jpg', 'ARNES DE 3 ANILLOS 1161560 PROTECTA', 'ARNES 3 ANILLOS 1161560 PROTECTA \r\nAnillo en D trasero y anillos en D laterales, correas para piernas con hebilla de paso, reguladores paracaídas para torso.\r\nEstructura resistente, tejido trenzado de poliéster, seguros de eslingas integrados, indicador de impacto. Etiquetas protegidas\r\nUnidad de Medida : UND\r\nMarca: PROTECTA\r\n', 1, 0),
(3, 'ARNES 3 ANILLOS EN H COD. 1170185 MOD. CONTRACTOR MARCA 3M', 'ARNES 3 ANILLOS EN H COD. 1170185 MOD. CONTRACTOR MARCA 3M.jpg', 'ARNES 3 ANILLOS COD. 1170185 3M', 'ARNES 3 ANILLOS MOD CONTRACTORN EN H 1170185\r\nAnillo en D trasero y dos anillos D laterales para posicionamiento\r\nCorreas de piernas con hebilla de paso\r\nregulador para torso\r\nEtiquetas protegidas\r\nUnidad de Medida : UND\r\nMarca : 3M\r\n', 1, 0),
(4, 'ARNES 4 ANILLOS COD. 1191279 MARCA PROTECTA', 'ARNES 4 ANILLOS COD. 1191279 MARCA PROTECTA.jpg', 'ARNES 4 ANILLOS 1191279 PROTECTA', 'ARNES 4 ANILLOS 1191279 PROTECTA\r\nArnés de un anillo D dorsal de acero ontado en pad plástico de alta resistencia a impacto, también de un anillo D frontal y de 2 hebillas de posicionamiento de acero  con resistencia para 5400 Lbs de tensión. Pasadores de conexión tipo hebilla, para un fácil acomodo y 100% seguro, colocado en las piernas y el pecho con ajustes para las piernas y el torso. Fabricado en cinta de poliéster de 1,75\'\' de ancho, en color gris en la parte inferior del arnés y de color rojo en la parte superior. Etiquetas para control de inspección\r\nLa fuerza minima de tensión es de 5000 Lbs.\r\nCumple y excede las regulaciones OSHA 1926 & ANSI Z359.\r\nMarca: Protecta - 3M\r\n', 1, 0),
(5, 'LINEA DE VIDA DOBLE GANCHO GRANDE 1.80 MTS COD 1340180 MARCA PROTECTA', 'LINEA DE VIDA DOBLE GANCHO GRANDE 1.80 MTS COD 1340180 MARCA PROTECTA.jpg', 'LINEA DE VIDA DOBLE GANCHO GRANDE 1.80 MT 1340180 PROTECTA', 'Línea de  vida de 1.80 mts de longitud con amortiguador de impacto PRO™ Pack que proporciona cumplimiento de normas de alta calidad a un precio económico y cuentan con la confianza de los trabajadores. Se destacan por su tejido trenzado duradero y ganchos de acero aleado con cierre automático que aportan mayor firmeza y resistencia a la corrosión. Además, las eslingas PRO™ son de peso liviano y proporcionan comodidad y seguridad adicionales. \r\nMarca: Protecta - 3M\r\n', 1, 0),
(6, 'LINEA DE VIDA DOBLE GANCHO GRANDE 1.20 MTS COD 1340182 MARCA PROTECTA', 'LINEA DE VIDA DOBLE GANCHO GRANDE 1.20 MTS COD 1340182 MARCA PROTECTA.jpg', 'LINEA DE VIDA DOBLE GANCHO GRANDE 1.20 MT 1340182 PROTECTA', 'Línea de  vida de 1.20 mts de longitud con amortiguador de impacto PRO™ Pack que proporciona cumplimiento de normas de alta calidad a un precio económico y cuentan con la confianza de los trabajadores. Se destacan por su tejido trenzado duradero y ganchos de acero aleado con cierre automático que aportan mayor firmeza y resistencia a la corrosión. Además, las eslingas PRO™ son de peso liviano y proporcionan comodidad y seguridad adicionales. \r\nMarca: Protecta - 3M\r\n', 1, 0),
(7, 'LINEA DE VIDA DOBLE GANCHO GRANDE COD. 1228019 MARCA FIRST 3M', 'LINEA DE VIDA DOBLE GANCHO GRANDE COD. 1228019 MARCA FIRST 3M.jpg', 'LINEA DE VIDA DOBLE GANCHO GRANDE 1228019 FIRST 3M', 'Linea de Vida Doble para detención de caídas, dos ganchos de 2 ¼” de apertura y uno de ¾”. Longitud de 1.8m y absorbedor de energía. \r\nSubsistema parte de un sistema personal de detención de caídas, posee tres puntos de anclaje. Este elemento permite al usuario desplazarse manteniéndose siempre anclado por lo menos de un punto, alternando uno a uno los ganchos de los extremos de la eslinga.\r\nMarca 3M\r\n', 1, 0),
(8, 'BLOQUE RETRACTIL CINTA NYLON Y MOSQUETON DE 8PIES WEB DEVICE', 'BLOQUE RETRACTIL CINTA NYLON Y MOSQUETON DE 8PIES WEB DEVICE.jpg', 'BLOQUE RETRACTIL NYLON CON MOSQUETON LARGO 8 PIES WEB DEVICE ', 'BLOQUE RETRACTIL 8 PIES WEB DEVICE\r\nLa longitud de 8 pies mejora la productividad y la movilidad del trabajador, casi duplicando el área de trabajo de una línea sin desconectarse. La robusta carcasa de aluminio y los componentes de trabajo de acero inoxidable pueden soportar un uso rudo, pero son extremadamente livianos. La cinta de salvamento se extenderá a medida que el usuario se aleje, y retraerse automáticamente permitiendo al usuario moverse dentro de un área de trabajo recomendada a velocidades normales. En caso de que ocurra una caída, se activará un sistema de frenos de detección de velocidad que detendrá la caída y reducirá las fuerzas impuestas al usuario a niveles seguros.\r\n', 1, 0),
(9, 'BLOQUE RETRACTIL CABLE ACERO Y MOSQUETON, LARGO DE 15 PIES COD. 3590019 MARCA PROTECTA', 'BLOQUE RETRACTIL CABLE ACERO Y MOSQUETON, LARGO DE 15 PIES COD. 3590019 MARCA PROTECTA.jpg', 'BLOQUE RETRACTIL CABLE DE ACERO CON MOSQUETON, LARGO 15 PIES 3590019 PROTECTA', 'BLOQUE RETRACTIL 3590019 PROTECTA\r\nLa longitud de 15 pies mejora la productividad y la movilidad del trabajador, casi duplicando el área de trabajo de una línea sin desconectarse. La robusta carcasa de aluminio y los componentes de trabajo de acero inoxidable pueden soportar un uso rudo, pero son extremadamente livianos. El cable de salvamento de una SRL se extenderá a medida que el usuario se aleje, y retraerse automáticamente permitiendo al usuario moverse dentro de un área de trabajo recomendada a velocidades normales. En caso de que ocurra una caída, se activará un sistema de frenos de detección de velocidad que detendrá la caída y reducirá las fuerzas impuestas al usuario a niveles seguros.\r\nMarca: Rebel - Protecta - 3M\r\n', 1, 0),
(10, 'ASEGURADOR DE FRENO PARA CUERDA DE 5/8” COD. GR85-5 MARCA WEB DEVICE', 'ASEGURADOR DE FRENO PARA CUERDA DE 5 8” COD. GR85 5 MARCA WEB DEVICE.jpg', 'FRENO PARA CUERDA DE 5/8” GR85-5 WEB DEVICE', 'Fácil de utilizar y e¬ficaz.\r\nSe instala y desinstala fácilmente en cualquier punto de la cuerda.\r\nSe desplaza a lo largo de la cuerda sin ninguna intervención manual.\r\nFreno para cuerda de 5/8” (16 mm)\r\nMaterial: Acero inoxidable\r\nMínima carga de rotura: 16 kN (3 600 lb)\r\nPeso: 572 g\r\nPeso Maximo del usuario incluidas las herramientas : 140 KG \r\nNormas: ANSI Z359.1  EN 353-1/2\r\nMarca : WEB DEVICE\r\n', 1, 0),
(11, 'PROTECTOR TIPO COPA ADAP/CASCO CM-501 ', 'PROTECTOR.TCOPA.ADAPTCASCO.CM-501.STEELPRO.jpg', 'OREJERA PARA CASCO CM-501 STEELPRO', 'Protector auditivo adosable al casco CM-501 de Steelpro, está diseñada para proteger contra los riesgos diarios a los trabajadores que laboran en lugares donde los niveles de ruido pueden provocar perdida de la audición\r\nPosee el suficiente espacio para generar el acople a todo tipo de orejas, sea cual fuere su tamaño.\r\nNRR 22dB  \r\nMarca : STEELPRO\r\n', 2, 1),
(12, 'PROTECTOR TIPO COPA ADAP/CASCO H9P3E PELTOR', 'PROTECTOR TCOPA ADAPTCASCO H9P3E PELTOR OPTIME 98 3M.jpg', 'OREJERA PARA CASCO H9P3E 3M', 'Los protectores auditivos PELTOR H9P3E están\r\ndiseñados para proveer efectiva protección contra ruido\r\ncuando se usan de acuerdo con las instrucciones de\r\ncolocación y se aplican los criterios para la selección de\r\nequipos de protección auditiva.\r\nNRR = 23 dB \r\nMarca 3M\r\n', 2, 0),
(13, 'PROTECTOR TIPO COPA ADAP/CASCO H10P3E PELTOR', 'PROTECTOR TCOPA ADAPTCASCO H10P3E PELTOR OPTIME 105 3M.jpg', 'OREJERA PARA CASCO H10P3E', 'Los protectores auditivos PELTOR H10P3E están\r\ndiseñados para proveer efectiva protección contra ruido\r\ncuando se usan de acuerdo con las instrucciones de\r\ncolocación y se aplican los criterios para la selección de\r\nequipos de protección auditiva.\r\nNRR = 27 dB \r\nMarca 3M\r\n', 2, 0),
(14, 'PROTECTOR TIPO COPA ADAP/CASCO HUNTER CLUTE', 'PROTECTOR TCOPA ADAPTCASCO HUNTER CLUTE.jpg', 'OREJERA PARA CASCO HUNTER CLUTE', 'Protector auditivo adosable al casco HUNTER está diseñada para proteger contra los riesgos diarios a los trabajadores que laboran en lugares donde los niveles de ruido pueden provocar perdida de la audición\r\nPosee el suficiente espacio para generar el acople a todo tipo de orejas, sea cual fuere su tamaño.\r\nNRR 21dB  \r\nMarca : CLUTE\r\n', 2, 0),
(17, 'PROTECTOR TIPO VINCHA H9A 3M', 'PROTECTOR TCOPA TVINCHA H9A 3M.jpg', 'OREJERA H9A 3M ', 'Protector auditivo de copas gemelas H9A 3M,ofrece protección en ambientes de trabajo con niveles de ruido superiores a 85 Db\r\nLas copas gemelas están acopladas acústicamente lo que minimiza la resonancia y resulta en un super atenuador que brinda protección efectiva contra ruido extremo, así como óptimo confort y un peso liviano\r\nNRR = 25 dB\r\nMarca 3M \r\n', 2, 0),
(18, 'TAPON REUTILIZABLE C/ESTUCHE 06TCBC ', 'TAPON REUTILIZABLE CESTUCHE 06TCBC STEELPRO.jpg', 'TAPON DE OIDO STEELPRO', 'TAPON OIDO C/ESTUCHE 06TCBC \r\nFABRICADO EN PVC SILICONADO HIPOALERGENICO, TEXTURA SUAVE Y BLANDA QUE FACILITA SU INSERCION EN EL CANAL AUDITIVO\r\nPRESENTACION EN CAJA HIGIENICA\r\nNRR 26 dB\r\nMARCA : STEELPRO\r\n', 2, 0),
(19, 'TAPON REUTILIZABLE C/ESTUCHE 1271 3M ', 'TAPON REUTILIZABLE CESTUCHE 1271 3M X50PARES.jpg', 'TAPON DE OIDO 1271 3M', 'Tapón de Oido 3M 1271 reutilizables\r\nMaterial suave y de gran comodidad al contacto con el canal  auditivo\r\nForma cónica que facilita la inserción en el oído sin tener que moldearlos. Se suministra con cajita provista de clip de sujeción que permite\r\n guardarlos entre usos.\r\nNRR 25 dB \r\nMarca 3M\r\n', 2, 0),
(20, 'TAPON REUTILIZABLE C/ESTUCHE 1291 3M ', 'TAPON REUTILIZABLE CESTUCHE 1291 25dB 3M.jpg', 'TAPON DE OIDO 1291 3M', 'Tapon de Oido 1291 3M\r\nGracias a su baja atenuación (SNR 21 dB) evitan la sobre-atenuación en casos donde el nivel de exposición no es alto.\r\nMaterial suave y de gran comodidad al contacto con el canal auditivo\r\nForma cónica que facilita la inserción en el oído sin tener que moldearlos, se suministra con cajita provista de clip de sujeción que permite\r\n guardarlos entre usos.\r\nNRR 21 dB\r\nMarca 3M\r\n', 2, 0),
(21, 'TAPON REUTILIZABLE C/ESTUCHE ELITE CLUTE ', 'TAPON REUTILIZABLE CESTUCHE ELITE CLUTE.jpg', 'TAPON DE OIDO CLUTE ', 'Tapon de Oido ELITE \r\nPara niveles de exposición de ruido no muy altos de ambientes de hasta 80 dB en turnos de 8 hrs \r\nMaterial suave (TPR) y de gran comodidad al contacto con el canal auditivo\r\nForma cónica que facilita la inserción en el oído, se suministra con cajita provista de clip de sujeción que permite guardarlos entre usos.\r\nNRR 21 dB\r\nMarca CLUTE\r\n', 2, 0),
(22, 'BARBIQUEJO CON MENTONERA DE DOS PUNTOS  TRIDENTE', 'BARBIQUEJO TRIDENTE.jpg', 'BARBIQUEJO CON MENTONERA TRIDENTE', 'Barbiquejo de dos puntas con elástico, diseñado para brindarle seguridad y estabilidad que ud. busca, es regulable lo que lo hace adaptable para todo tipo de rostro y de casco.\r\nMarca TRIDENTE\r\n', 3, 1),
(23, 'CASCO TIPO JOCKEY CON SUSPENSION FAST TRACK MARCA MSA', 'CASCO FORTE TIPO JOCKEY.jpg', 'CASCO JOCKEY SUSPENSION FAST TRACK MSA', 'Carcasa de polietileno de alta densidad, propiedades dieléctricas (no conduce electricidad).\r\nTiene suspensión Fas-Track, que brinda excelente distribución de impacto y fácil colocación, banda desudadora.\r\nPeso aproximado, carcasa 9 onzas, suspensión 2 onzas, distintiva V en la parte superior .\r\nMarca: MSA\r\n', 3, 0),
(24, 'CASCO TIPO JOCKEY CON SUSPENSION ONE TOUCH MARCA MSA', 'JOCKEY CON SLOT ONE TOUCH.jpg', 'CASCO JOCKEY SUSPENSION ONE TOUCH MSA', 'Los cascos de protección V-Gard de MSA consisten en una estructura de polietileno y un sistema de suspensión, Exceden los requisitos aplicables para un casco Tipo I (impacto superior),establecidos por la norma ANSI Z89.1 2003,Clase E.\r\nMarca: MSA\r\n', 3, 0),
(25, 'CASCO TIPO JOCKEY CON SUSPENSION RACHET MARCA FORTE', 'SUSPENSION RACHET MARCA FORTE.jpg', 'CASCO JOCKEY SUSPENSION RACHET FORTE', 'Casco Forte, fabricados en PHAD, polietileno de alta densidad lo que brinda alta resistencia al impacto y baja degradación. Ajuste tipo roler Arnés de cuatro puntas. Slot laterales de tamaño universal para complementar con accesorios y protección auditiva.\r\nMarca FORTE\r\n', 3, 0),
(26, 'CASCO TIPO JOCKEY CON SUSPENSION RACHET MOD. H700 MARCA 3M', 'CASCO TIPO JOCKEY CON SUSPENSION RACHET MOD. H700 MARCA 3M.jpg', 'CASCO JOCKEY SUSPENSION RACHET H700 3M', 'La serie ligera del modelo H-700 cuenta con un diseño único de casco con relieve en la parte superior y ala corta tanto en su versión ventilada como no ventilada. Este casco de seguridad está hecho de polietileno de alta densidad y cumple con los requerimientos de ANSI/ ISEA Z89.1-2009 Tipo I, Clase C, G y E\r\nMarca: 3M\r\n', 3, 0),
(27, 'CASCO TIPO JOCKEY CON SUSPENSION RACHET MARCA TRIDENTE', 'SUSPENSION RACHET MARCA TRIDENTE.jpg', 'CASCO JOCKEY SUSPENSION RACHET TRIDENTE', 'Fabricados en polietileno de alta densidad, dieléctrico (clase \"e\") y contra impactos (ANSI TIPO I), aprobado por la norma internacional ANSI Z89.1-1996.\r\nUnidad de medida: unidad\r\nMarca : TRIDENTE\r\n', 3, 0),
(28, 'CORTAVIENTO DE TELA DRILL COLOR NARANJA SIN FORRO ', 'CORTAVIENTO DE TELA DRILL COLOR NARANJA SIN FORRO.jpg', 'CORTAVIENTO DRILL NARANJA SIN FORRO', 'Cortaviento para protegerse contra el sol, confeccionado en tela drill - polystresh frontal para poder ser usado con o sin casco - velcro para ajuste en la parte frontal.', 3, 0),
(29, 'LINTERNA PARA CASCO 3 LENS DE 200 LUMENS MARCA ENERGIZER', 'LINTERNA PARA CASCO 3 LENS DE 200 LUMENS MARCA ENERGIZER.jpg', 'LINTERNA PARA CASCO 200 LUMENS', 'LINTERNA PARA CASCO\r\nMANOS LIBRES\r\n3LENS - 200 LUMENS\r\nMarca : ENERGIZER\r\n', 3, 0),
(32, 'FUNCIONA', 'club felino peruano.png', 'FUNCIONA', 'FUNCIONA', 4, 0),
(33, 'Daniel Daniel', 'ES-FrontEnd/Elementos/Imagenes/Imagen Prueba.jpeg', 'Daniel Daniel', 'Daniel Daniel', 1, 1),
(34, 'UMMMMM', '3858_ext_01_0.jpg', 'UMMMM', 'UMMMMM', 12, 1),
(35, 'UMMMMM', 'sinImagen.png', 'UMMMM', 'UMMMMM', 12, 1),
(36, 'TRAJE CONTRA PARTICULAS Y SALPICADURAS MACROGUARD', 'TRAJE DESCARTABLE MACROGUARD.jpg', 'TRAJE DESCARTABLE CONTRA POLVO Y SALPICADURAS MACROGUARD', 'Traje Descartable tipo 5/6 contra Polvo y salpicaduras Marca Macroguard', 10, 0),
(37, 'TRAJE CONTRA PARTICULAS Y SALPICADURAS A40 KLEENGUARD', 'TRAJE DESCARTABLE A40.jpg', 'TRAJE DESCARTABLE CONTRA POLVO Y SALPICADURAS A40 KLEENGUARD', 'Traje Descartable tipo 5/6 contra Polvo y salpicaduras Marca KLEENGUARD', 10, 0),
(38, 'TRAJE CONTRA PARTICULAS Y SALPICADURAS 1800 CONFORT BC CON CINTA REFLECTIVA', 'TRAJE DESCARTABLE 1800 BC.jpg', 'TRAJE DESCARTABLE CONTRA POLVO Y SALPICADURAS 1800 CONFORT BC Y CINTA REFLECTIVA', 'Traje Descartable tipo 5/6 contra Polvo y salpicaduras Marca ANSELL', 10, 0),
(39, 'TRAJE CONTRA PARTICULAS Y SALPICADURAS TYV CHF5S DUPONT', 'TRAJE DESCARTABLE TYV DUPONT.jpg', 'TRAJE DESCARTABLE CONTRA POLVO Y SALPICADURAS DUPONT TYVEK', 'Traje Descartable tipo 5/6 contra Polvo y salpicaduras Marca DUPONT', 10, 0),
(40, 'TRAJE CONTRA PARTICULAS Y SALPICADURAS A70 KLEENGUARD', 'TRAJE DESCARTABLE A70.jpg', 'TRAJE DESCARTABLE AMARILLO CONTRA PARTICULAS Y SALPICADURAS A70', 'Traje Descartable tipo 4/5/6 contra Polvo y salpicaduras Marca KLEENGUARD', 10, 0),
(41, 'TRAJE CONTRA PARTICULAS Y SALPICADURAS STEELPRO', 'TRAJE DESCARTABLE STEELPRO.jpg', 'TRAJE DESCARTABLE CONTRA POLVO Y SALPICADURAS STEELPRO', 'Traje Descartable tipo 5/6 contra Polvo y salpicaduras Marca Steelpro', 10, 0),
(42, 'CAT', '38444435_1294573810678659_7811279943475658752_n.jpg', 'CAT', 'CAT', 12, 1),
(43, 'CAT', 'yo.jpg', 'CAT', 'CAT', 12, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`SLDRCODIGO`, `SLDRNOMBRE`, `SLDRDESCRIPCION`, `SLDRIMAGEN`) VALUES
(33, 'EQUIPOS QUE PROTEGEN TU VIDA', 'Tenemos los mejores productos para garantizar tu cuidado', 'ES-FrontEnd/Elementos/Imagenes/Slider/pantalla.jpg'),
(32, 'EXPERIENCIA, SEGURIDAD Y GARANTIA', 'Tenemos los mejores productos para garantizar tu cuidado', 'ES-FrontEnd/Elementos/Imagenes/Slider/construction-709487_1920.jpg');

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

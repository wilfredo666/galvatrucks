-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2022 a las 15:33:41
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galvatrucks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_asignacion` int(20) NOT NULL,
  `nombre_asig` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_asig` date NOT NULL,
  `fecha_baja_asig` date NOT NULL,
  `id_camion` int(20) NOT NULL,
  `id_conductor` int(20) NOT NULL,
  `activo_asig` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_asignacion`, `nombre_asig`, `fecha_asig`, `fecha_baja_asig`, `id_camion`, `id_conductor`, `activo_asig`) VALUES
(1, 'ELIAS_1715XCR_0001', '2018-06-22', '2022-07-01', 1, 1, 1),
(2, 'MARCELINO_2452DSE_0002', '2022-07-01', '0000-00-00', 2, 2, 1),
(8, 'JUAN-CARLOS_3445-DEW', '2022-08-16', '0000-00-00', 14, 9, 1),
(9, 'ELISEO-WILFREDO_3445-XRF', '2022-06-17', '0000-00-00', 3, 21, 1),
(10, 'Asig-0008', '2022-08-02', '0000-00-00', 10, 2, 0),
(11, 'Asig-0009', '2022-04-08', '2022-08-20', 10, 14, 0),
(12, 'MARCELINO-QUISPE_3445-XRF', '2022-11-30', '0000-00-00', 3, 2, 1),
(13, 'RICARDO-RAMIREZ_1074-REE', '2022-10-08', '0000-00-00', 17, 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `id_camion` int(20) NOT NULL,
  `placa` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clase` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ejes` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `capacidad` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `chasis` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `activo_cam` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`id_camion`, `placa`, `clase`, `ejes`, `capacidad`, `chasis`, `marca`, `color`, `activo_cam`) VALUES
(1, '1715-XCR', 'REMOLQUE', '3 EJES', '21 TONELADAS', '12ZGR7587S5', 'NISSAN', 'ROJO', 0),
(3, '3445-XRF', 'TRACTO CAMIÓN', '3 EJES', '23 TONELADAS', '12ZGR7587S5SSD', 'VOLKSWAGEN', 'BEIS', 0),
(10, '4554 -DRT', 'SEMIREMOLQUE', '5 EJES', '23 TONELADAS', 'ASD43423G442Fawsd', 'NISSAN', 'ROJO', 1),
(14, '3445-DEW', 'CAMIÓN RÍGIDO', '2 EJES', '23 TONELADAS', 'ASD43423G442F', 'VOLKSWAGEN', 'BEIS', 1),
(17, '1074-REE', 'CAMIÓN RÍGIDO', '4 EJES', '21 TONELADAS', 'RTRGS55367667E', 'SCANIA', 'AZUL', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(20) NOT NULL,
  `nombre_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ci_nit_cli` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nac_cli` date NOT NULL,
  `estado_civil_cli` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_cuenta_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_cuenta2_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `razon_social_cli` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion_cli` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contacto_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_contacto_cli` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo_cli` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `imagen_cli` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `activo_cli` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cli`, `apellido_cli`, `ci_nit_cli`, `fecha_nac_cli`, `estado_civil_cli`, `num_cuenta_cli`, `num_cuenta2_cli`, `razon_social_cli`, `direccion_cli`, `email_cli`, `contacto_cli`, `persona_contacto_cli`, `tipo_cli`, `imagen_cli`, `id_usuario`, `activo_cli`) VALUES
(1, 'FIORELA', 'SANCHEZ DE LA CRUZ', '100985785', '1994-05-02', 'Casado/a', '2-245-59889588', '4156765468', 'FIORELA SANCHEZ DE LA CRUZ', 'ZONA/ ERNEST DEL VALLE C/FIGUEROA ESQ. TAMAYO NRO. 4597', 'fiorela123@gmail.com', '78556975', 'MAMA: SANDRA DE LA CRUZ CEL- 2-2216489', 'PERSONA NATURAL', '014.jpg', 0, 1),
(2, 'REMBERTO ', 'CHOQUE', '56984564', '0000-00-00', 'null', '50649846-5', '11565548766', 'IMPORTADORA ', 'LA PAZ. EL ALTO. SANTA CRUZ. COCHABAMBA. ORURO. SUCRE. TARIJA. LA PAZ. Agencia Alonso de Mendoza: C.', 'alcon@importadora.com', '226448945', 'REPRESENTANTEHUGO MENDOZA CEL-74849462', 'PERSONA JURÍDICA', '013.jpg', 0, 1),
(5, 'LUIS ENRIQUE', 'FEN CHEN', '5648887', '2004-12-01', 'Casado/a', '2-245-5492245689', '2-2-478327939256', 'IMPORTADORA ALCON SRL', 'Zona Sopocachi C. Francisco Bedregal, Campo Deportivo Luis Lastra Piso 1, 2651031', 'estrella@gmail.com', '2651031', 'REPRESENTANTEDAVID TORO CEL-78487845', 'PERSONA NATURAL', 'alcon.jpg', 0, 1),
(10, 'LUIS ', 'FEN CHEN', '2154984568', '2022-07-14', 'Casado/a', '22265459751', '4156765468', 'DEL FR RR', 'Z/ SENKATA,  PARADA W, ESQ. LOS ANDES, NRO 1457 4', 'tubosalcon@gmail.com', '+591 78827456', 'FEN CHI - CEL 458754741', 'PERSONA NATURAL', 'pngwing.com.png', 0, 1),
(17, 'LUIS ENRIQUESS', 'MURILLO GUZMAN', '12255464', '1988-01-15', 'Casado/a', '2655-2-546545', '', 'AGENCIA DESPACHANTE KRONOS SRL', 'Z/ 12 DE OCTUBRE , ALTURA CRUCE VIACHA', 'kronos@gmail.com', '+591 78546522', 'VICTOR SILLERICO CEL. 78548556', 'PERSONA JURÍDICA', 'kronos.jpg', 5, 1),
(19, 'ADOLFO ROLDAN', 'TERAN MAYTA', '215454855', '1975-11-05', 'Casado/a', '2336541-34224', '22665445658-5', 'EMPRESA MINERA \'YONG LI\' SRL', 'CALACOTO, CALLE 13,  IRPAVI ZONA SUR', 'minerayongli@gmail.com', '2-2545874', '74587458', 'PERSONA JURÍDICA', 'minera.jpg', 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `id_conductor` int(20) NOT NULL,
  `nombre_cond` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_cond` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ci_cond` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo_licencia` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nac_cond` date NOT NULL,
  `direccion_cond` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email_cond` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contacto_cond` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `persona_contacto_cond` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado_civil_cond` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_cuenta_cond` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_cuenta2_cond` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `imagen_cond` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `activo_cond` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`id_conductor`, `nombre_cond`, `apellido_cond`, `ci_cond`, `tipo_licencia`, `fecha_nac_cond`, `direccion_cond`, `email_cond`, `contacto_cond`, `persona_contacto_cond`, `estado_civil_cond`, `num_cuenta_cond`, `num_cuenta2_cond`, `imagen_cond`, `id_usuario`, `activo_cond`) VALUES
(1, 'ELIAS  RONALD', 'FERNANDEZ CALLISAYA', '3589745 LP', 'C', '1988-07-26', 'ZONA/ SAN FELIPE DE SEKE, C/ LOS ALAMOS, NRO 1458', 'elias@gmail.com', '78954875', 'ESPOSA: JUSTINA AMARU CEL-76548798', 'Casado/a', '235-245-4487564', '2-1-54895494563', '02.png', 0, 1),
(2, 'MARCELINO QUISPE', 'TICONA FLORES', '6587844', 'C', '1979-08-20', 'Z/ SAN JOSE DE YUNGUYO, C/ TUNGURAGUA, NRO 1078', 'marcelino@gmail.com', '78878758', 'ESPOSA: FELIPA DE FLORES CEL-76565987', 'Viudo/a', '34566653223', '', 'Foto-Carnet-4x4.jpg', 0, 1),
(9, 'JUAN CARLOS', 'AMARU ALANOCA', '4526589494', 'C', '1988-06-04', 'Z/ Seke Nro 7895, viviendas 16 de Febrero', 'carlitos@gmail.com', '78978710', 'ISIDORA BENITA CEL. 70502541', 'Casado/a', '1365-xxx-9644-44555', '554897486546', '09.jpg', 0, 1),
(14, 'ROBERTO', 'GOMEZ BOLAÑOS', '45687545', 'A', '2004-12-15', 'Z/ Seke Nro 7895, viviendas 16 de Febrero', 'd@gmail.com', '74879555', '', 'Casado/a', '1365-xxx-9644-4489', '678678-45-76532', '03.png', 0, 1),
(15, 'Juan Carlos', 'Alanoca Amaru', '8765454', 'A', '2004-12-02', 'Z/ Seke Nro 7895, viviendas 16 de Febrero', 'carlitos@gmail.com', '3534', '', 'Soltero/a', '', '', 'carnet.jpg', 0, 1),
(21, 'ELISEO WILFREDO ', 'GOMEZ BOLAÑOS', '45687545', 'B', '1995-08-25', 'Z/ Seke Nro 7895, viviendas 16 de Febrero', 'plama@gmail.com', '74879555', 'Antonio Amaru - 70503350', 'Soltero/a', '1365-xxx-9644-44555', '678678-45-76532', '08.jpg', 0, 1),
(22, 'JULIAN', 'TICONA FLORES', '65215548', 'C', '1988-12-03', 'Calle Tunguragua, Nro 1075 , Zona Estrellas de Belen', 'marce@gmail.com', '74587512', 'FELIPA FLORES, ESPOSA CEL: 74585558', 'Casado/a', '2665-548778854', '', 'daniel-rueda-silva-fotocarnet2.jpg', 0, 1),
(23, 'RICARDO', 'RAMIREZ CHOQUE', '458799524', 'B', '1991-01-16', 'AV SANTA FE, Z/ 16 DE FEBRERO', 'ricardo@gmail.com', '78545698', '', 'Casado/a', '66948754554-8', '', '4x4-cm-passport-photo-example.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_camion`
--

CREATE TABLE `contrato_camion` (
  `id_contrato_camion` int(20) NOT NULL,
  `fecha_inicio_contrato` date NOT NULL,
  `fecha_fin_contrato` date NOT NULL,
  `num_contrato` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `placa` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `propietario_camion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `contrato_camion`
--

INSERT INTO `contrato_camion` (`id_contrato_camion`, `fecha_inicio_contrato`, `fecha_fin_contrato`, `num_contrato`, `placa`, `propietario_camion`, `observacion`) VALUES
(1, '2020-07-01', '2022-07-08', 'LUIS ALFONSO_5566-ZTE', '5566-ZTE', 'LUIS ALFONSO LLIULLI ', 'EL CONTRATO QUEDA VIGENTE DURANTE UNA GESTION, SIN INTERRUCPION ALGUNA'),
(2, '2019-03-14', '0000-00-00', 'JUAN CARLO_4778-OPI', '4778-OPI', 'JUAN CARLO AMARU ALANOCA CEL-7845619 ', 'EL CONTRATO QUEDA VIGENTE A PARTIR DEL PRIMER DIA DE LA FIRMA DE CONTRATO'),
(3, '2019-09-12', '0000-00-00', 'LUIS ENRIQUE_3265-FFE', '3265-FFE', 'LUIS ENRIQUE MURILLO GUZMAN CEL 78979751', 'PRESTAMO, HASTA FINALIZAR CONTRATO'),
(5, '2022-05-14', '2022-08-27', 'LUIS SUAREZ_2472-DSE', '2472-DSE', 'LUIS SUAREZ GARICA ', 'HASTA PAGO DE 12 MENSUALIDADES CEL. 78827466'),
(6, '2022-03-04', '2022-08-30', 'LUIS SUAREZ_3498-RTT', '3498-RTT', 'LUIS SUAREZ GARICA T.', 'POR EL CONTRATO DE VEHICULO, CON SU RESPECTIVA POLIZA DE SEGURO'),
(11, '2022-10-04', '2023-10-04', 'Julián Ticona_4848-DTE', '4848-DTE', 'Julián Ticona Humerez', 'Alquiler de vehículo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_maritima`
--

CREATE TABLE `empresa_maritima` (
  `id_emp_maritima` int(20) NOT NULL,
  `razon_social_emp` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nit_emp` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion_emp` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_emp` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contacto_emp` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa_maritima`
--

INSERT INTO `empresa_maritima` (`id_emp_maritima`, `razon_social_emp`, `nit_emp`, `direccion_emp`, `correo_emp`, `contacto_emp`) VALUES
(1, 'COSCO SHIPPING', '2255497', 'LA PAZ. Representaciones Navieras Bolivia S.A.. Address. H Ferrecio St 1154, 5th floor Calacoto, La ', 'cosco@shipping.com', '+591 78987848'),
(2, 'MSC', '254987452', 'Mediterranean Shipping Company (bolivia) Limitada Msc (bolivia) Ltda.%s, Calle 20 De Calaco..., Teléfono. 24598744', 'msc@shipping.com', '245987449'),
(5, 'EVER GREEN', '4522168756', 'Calacoto calle 7, Edificio Los Andes nro 1075', 'evergreenshipping@gmail.com', '7878654'),
(16, 'HAPAG LLOYD', '4522168756', 'zona Sur, estrellas de velen Edf. DUO', 'hpa@gmail.com', '78898546'),
(17, 'MAERSK', '245987997', 'CALACTO, ZONA SUR EDIFICIO - ALEXANDER', 'maersk_import@gmail.com', '22454425');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_naviera`
--

CREATE TABLE `pago_naviera` (
  `id_pago` int(20) NOT NULL,
  `id_emp_maritima` int(20) NOT NULL,
  `concepto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `monto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_servicio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `id_ruta` int(20) NOT NULL,
  `ruta_inicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_fin` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `kilometros` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `combustible` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`id_ruta`, `ruta_inicio`, `ruta_fin`, `kilometros`, `combustible`) VALUES
(1, 'ARICA', 'SANTA  CRUZ', '250 km', '300 lts'),
(2, 'TAMBO QUEMADO', 'ADUANA INTERIOR  LA PAZ', '220 km', '190 lts'),
(3, 'CARACOLLO', 'ORURO PISIGA', '120 KMS', '80 LTS'),
(4, 'CARACOLLO', 'SANTA CRUZ  3ER ANILLO', '250 KMS', '180 LTS'),
(7, 'IQUIQUE', 'COCHABAMBA PATACAMAYA', '212 KM', '180 LTS'),
(8, 'ARICA', 'LA PAZ \'SENKATA\'', '180', '120 LTS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(20) NOT NULL,
  `cod_servicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `id_emp_maritima` int(20) NOT NULL,
  `fecha_inicio_servicio` date NOT NULL,
  `num_bill` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nro_contenedor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medida_contenedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `peso_mercaderia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `detalle_mercaderia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `origen_mercaderia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `destino_mercaderia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_arribo` date NOT NULL,
  `fecha_almacen` date NOT NULL,
  `id_asignacion` int(20) NOT NULL,
  `id_contrato_camion` int(20) NOT NULL,
  `id_ruta` int(20) NOT NULL,
  `costo_servicio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_solicitud` int(20) NOT NULL,
  `activo_serv` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `cod_servicio`, `id_cliente`, `id_emp_maritima`, `fecha_inicio_servicio`, `num_bill`, `nro_contenedor`, `medida_contenedor`, `peso_mercaderia`, `detalle_mercaderia`, `origen_mercaderia`, `destino_mercaderia`, `fecha_arribo`, `fecha_almacen`, `id_asignacion`, `id_contrato_camion`, `id_ruta`, `costo_servicio`, `documento`, `observaciones`, `id_solicitud`, `activo_serv`) VALUES
(1, 'Imp-0001', 10, 2, '2022-05-04', 'COSU42154685', 'TRHU521544', '', '800 kg', ' Sustancias productos o mercancías que causen o amenac causar efectos nocivos en la sal humana o medio ambiente o sustancias agotadoras de la capa de ozono.\r\n- 5000 cajas de Cohetillos - juegos artificiales ', 'Jiuzhaigou - CHINA', 'ARICA - CHILE', '2022-09-20', '0000-00-00', 8, 1, 1, '', '', ' Los porductos fueron traidos, en la naviera, y fueron decomizados, 43 cajas de cohetillos, porque no igualo la mercaderia con la lista de empaque ', 0, 1),
(2, 'Imp-0002', 1, 16, '2022-07-01', 'TRLU5456521', 'MSCU459865', '1x40', '8500 KG', '  PALLETS DE COCINA. VAJILLAS', 'CHINA - FENJ CHE', 'ARICA - CHILE', '2022-09-29', '0000-00-00', 9, 0, 2, '2500', '', '  ', 0, 0),
(4, 'Imp-0003', 17, 5, '2022-06-16', 'MSCS8556544', 'MSCU45445444', '1x20 Hight', '8500 KG', '   BICICLETAS Y MOTOS ', 'COLOMBIA', 'IQUIQUE - CHILE', '2022-10-14', '0000-00-00', 11, 0, 4, '2800', 'trans.png', '    no hay', 0, 1),
(5, 'Imp-0004', 5, 1, '2022-08-25', 'COSU45875598', 'MDSS4558745', '1x40', '9300 KG', '  180 KINTALES DE ARROZ, GRANO DE ORO CON SUS RESPECTIVAS ENVOLTURAS', 'SANTA CRUZ', 'LA PAZ - 16 DE JULIO', '2022-08-27', '0000-00-00', 11, 0, 3, '800', 'Pres 1.pdf', '  NO SE TUVO OBSERVACIONES', 0, 1),
(9, 'Imp-0006', 2, 1, '2022-08-13', 'TRLU5456521', 'MSCU459865', '1x40', '8500 KG', '      cocinas y microondas    ', 'CHINA - FENJ CHE', 'IQUIQUE - CHILE', '2022-08-04', '2022-08-25', 8, 6, 4, '900', 'Pres 1.pdf', 'Se entregaron todos los documentos pendientes', 0, 0),
(11, 'Imp-0007', 2, 1, '2022-08-12', 'TRLU5456521', 'MSCU459865', '1x40', '8500 KG', '  ', 'COLOMBIA', 'IQUIQUE - CHILE', '2022-08-11', '0000-00-00', 0, 2, 2, '520', '', '  ', 0, 1),
(13, 'Imp-0007', 1, 16, '2022-09-01', 'COSU22342345', 'TRHU254566', '1x40', '3000 KG', '    MOTOCICLEAS  ', 'CHINA - FENG', 'IQUIQUE CHILE', '2022-11-15', '0000-00-00', 8, 0, 7, '2000', '', '      ', 0, 0),
(16, 'Imp-0008', 19, 5, '2022-09-10', 'MSCU7425547', 'THDE744114', '1x40', '18000 KG', '  CAJAS DE MONITORES PC', 'CHINA - HONG', 'ARICA CHILE', '2022-11-30', '0000-00-00', 9, 0, 1, '2800', '', '  ', 0, 1),
(17, 'Imp-0009', 19, 2, '2022-07-16', 'MSRS', 'TGRT', '1x20', '5000 KG', '  FARDOS DE TENIS', 'ESTADOS UNIDOS', 'IQUIQUE CHILE', '2022-09-21', '0000-00-00', 12, 0, 7, '2000', '', '  ', 0, 1),
(18, 'Imp-0010', 19, 5, '2022-09-26', 'MSCU742444347', 'TRHU2544566', '1x40', '5000 KG', '  CAJAS DE CELULAR XIOMI', 'CHINA - FENG CHEN', 'ARICA CHILE', '2022-11-30', '0000-00-00', 0, 5, 3, '3000', '', '  ', 0, 1),
(19, 'Imp-0010', 19, 5, '2022-09-26', 'MSCU742444347', 'TRHU2544566', '1x40', '5000 KG', '  CAJAS DE CELULAR XIOMI', 'CHINA - FENG CHEN', 'ARICA CHILE', '2022-11-30', '0000-00-00', 0, 5, 3, '3000', '', '  ', 0, 1),
(20, 'Imp-0011', 17, 5, '2022-09-21', 'MRKUY727277', 'TETR55777', '1x20', '3000 KG', '  VAJILLAS DE AZULEJO', 'CHINA- ONG FEG', 'ARCICA CHILE', '2022-10-30', '0000-00-00', 0, 3, 1, '2500', '', '  ', 0, 1),
(21, 'Imp-0012', 5, 16, '2022-09-01', 'YYTDT636363', 'UURU77767', '1x40', '3000 KG', '  TECLADOS', 'ESTADOS UNIDOS', 'PUERTO ILO', '2022-10-09', '0000-00-00', 11, 0, 3, '2000', '', '  ', 0, 1),
(22, '', 0, 0, '0000-00-00', '', '', '', '', '  ', '', '', '0000-00-00', '0000-00-00', 0, 1, 0, '', '', '  ', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_servicio`
--

CREATE TABLE `solicitud_servicio` (
  `id_solicitud` int(20) NOT NULL,
  `id_emp_maritima` int(20) NOT NULL,
  `numero_bill` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `numero_cont` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tam_cont` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `peso_cont` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `doc_bill` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `doc_factura` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `doc_lista_empaque` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `doc_otros` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `activo_solicitud` varchar(30) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitud_servicio`
--

INSERT INTO `solicitud_servicio` (`id_solicitud`, `id_emp_maritima`, `numero_bill`, `numero_cont`, `tam_cont`, `peso_cont`, `fecha_solicitud`, `doc_bill`, `doc_factura`, `doc_lista_empaque`, `doc_otros`, `observaciones`, `id_cliente`, `activo_solicitud`) VALUES
(1, 1, 'COSU23345333', 'FTDE22336654', '1x40', '4500 kg', '2022-09-21', 'Galvatrucks (1).pdf', '', '', '', '', 19, 'pendiente'),
(2, 5, 'COSU69852211', 'MERC22336654', '1x20', '3500 kg', '2022-08-02', '', '', '', '', 'Adjuntar la Lista de empaque, digitalización PDF, para su posterior aceptación de servicio', 19, 'rechazado'),
(3, 16, 'HAMB44587989', 'HTYY33365115', '1x20', '8000 kg', '2022-09-21', '', '', '', '', '', 19, 'aceptado'),
(4, 2, 'MSCK2377765', '', '', '', '2022-09-24', 'Galvatrucks (1).pdf', 'qdoc.tips_los-genios-no-nacen-se-hacen-camilo-cruz.pdf', 'Installing Kali Linux _ Kali Linux Documentation.pdf', 'Galvatrucks.pdf', '', 19, 'pendiente'),
(6, 16, 'MSCY42377544', '', '', '', '2022-09-30', 'Galvatrucks.pdf', 'Install.pdf', '', '', '', 19, 'pendiente'),
(9, 5, 'RTUU4478895', '', '', '', '2022-09-30', 'Galvatrucks.pdf', '', '', '', '', 17, 'pendiente'),
(13, 5, 'TRRW55777', '', '', '', '2022-09-24', 'Galvatrucks.pdf', '', '', '', '', 17, 'pendiente'),
(14, 2, 'MSCK2377765', '', '', '', '2022-09-25', 'Galvatrucks.pdf', '', '', '', '  FALTA ADJUNTAR LOS DOCUMENTOS DE IMPORTACIÓN', 19, 'rechazado'),
(15, 2, 'MSCK23303933', '', '', '', '2022-09-26', 'Galvatrucks.pdf', '', '', '', '  Falta adjuntar documentos: \r\nLista de Empaque, Factura Comercial', 17, 'rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(20) NOT NULL,
  `nombre_usuario` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `login_usuario` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pass_usuario` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rol` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `login_usuario`, `pass_usuario`, `rol`) VALUES
(1, 'GABRIELA FLORES GUTIERREZ', 'gabriela', '$2y$10$Fy1tNvIeNojxDbbkiPa35ebhRwowLaJxkz1ezb665fACqIadJ03bO', 'Administrador'),
(3, 'IMPORTADORA ALCON SRL - 2', 'alcon', 'alcon123', 'Cliente'),
(5, 'Eliseo Amaru Fernandez A', 'cliente2', '$2y$10$Vp5nOiXSjLeCli9y2Vg2SuEhVWn/JASz7wNZlLMnQ/JUEY0JHkt6C', 'Cliente'),
(14, 'Eliseo Amaru', 'eliseo', 'eliseo', 'Administrador'),
(15, 'Administrador Sistemas', 'root', '$2y$10$8ltpNaFniRdyYhdLv3fNP.Hsg.CRqWTGc4E9.Wxmmp8.osS5Fd59y', 'Administrador'),
(16, 'Juan Ali', 'admin', '$2y$10$XUI7nlr4vOCzJJl76IkAO.Umvs7X9VECgDZOxnQ6ukgAuMT3kmUpG', 'Administrador'),
(18, 'SOY EL CONDUCTOR', 'conductor', '$2y$10$cDcl2C3KhThaLD2W/yFe0.VTryMIvMWx65NKFWXs3bP1nM8.v9ZTu', 'Conductor'),
(19, 'SOY EL CLIENTE', 'cliente', '$2y$10$bMgAzzlZzeOLIvEFTOjL3eRb5iDvZaeBGQqwXmm.3aeTKaR.J6VH2', 'Cliente'),
(20, 'INGENIERÍA DE SISTEMAS', 'Amaru', '$2y$10$MQtOccBmxwEpaVmwFyD7eeOJA/VQgAhS.mbe4Wbp.u/Qh4tPuW.dK', 'Auxiliar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_camion` (`id_camion`),
  ADD KEY `id_conductor` (`id_conductor`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`id_camion`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`id_conductor`);

--
-- Indices de la tabla `contrato_camion`
--
ALTER TABLE `contrato_camion`
  ADD PRIMARY KEY (`id_contrato_camion`);

--
-- Indices de la tabla `empresa_maritima`
--
ALTER TABLE `empresa_maritima`
  ADD PRIMARY KEY (`id_emp_maritima`);

--
-- Indices de la tabla `pago_naviera`
--
ALTER TABLE `pago_naviera`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`id_ruta`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `solicitud_servicio`
--
ALTER TABLE `solicitud_servicio`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_asignacion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `camion`
--
ALTER TABLE `camion`
  MODIFY `id_camion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `id_conductor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `contrato_camion`
--
ALTER TABLE `contrato_camion`
  MODIFY `id_contrato_camion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empresa_maritima`
--
ALTER TABLE `empresa_maritima`
  MODIFY `id_emp_maritima` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `pago_naviera`
--
ALTER TABLE `pago_naviera`
  MODIFY `id_pago` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `id_ruta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `solicitud_servicio`
--
ALTER TABLE `solicitud_servicio`
  MODIFY `id_solicitud` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

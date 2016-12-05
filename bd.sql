-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 05-12-2016 a las 20:05:28
-- Versión del servidor: 5.6.28
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `JobJob`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marcas`
--

CREATE TABLE `Marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `activo` varchar(255) COLLATE utf8_spanish2_ci DEFAULT 'YES',
  `imagen` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen_2` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Marcas`
--

INSERT INTO `Marcas` (`id`, `nombre`, `descripcion`, `activo`, `imagen`, `imagen_2`) VALUES
(1, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(2, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(3, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(4, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(5, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(6, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(7, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(8, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(9, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(10, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(11, 'HERO 1', 'PRIMERA PRUEBA', 'NO', NULL, NULL),
(12, 'HERO 1', 'PRIMERA PRUEBA', 'YES', '12_1480953453.png', NULL),
(13, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_13_1480953686.png', NULL),
(14, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_14_1480953709.png', 'icono_14_1480953709.png'),
(15, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_15_1480954522.png', 'icono_15_1480954522.png'),
(16, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_16_1480954946.png', 'icono_16_1480954946.png'),
(17, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_17_1480954967.png', 'icono_17_1480954967.png'),
(18, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_18_1480955348.png', 'icono_18_1480955348.png'),
(19, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_19_1480955652.png', 'icono_19_1480955652.png'),
(20, 'HERO 1', 'PRIMERA PRUEBA', 'YES', 'banner_20_1480955999.png', 'icono_20_1480955999.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marcas_Archivos`
--

CREATE TABLE `Marcas_Archivos` (
  `id` int(11) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `activo` varchar(255) DEFAULT 'YES',
  `tipo` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `creada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Marcas_Archivos`
--

INSERT INTO `Marcas_Archivos` (`id`, `direccion`, `activo`, `tipo`, `id_marca`, `creada`) VALUES
(1, 'presentacion_18_1480955348.png', 'YES', 2, 18, '2016-12-05 16:29:58'),
(2, 'presentacion_19_1480955652.png', 'YES', 2, 19, '2016-12-05 16:34:12'),
(3, 'ficha_19_1480955652.tiff', 'YES', 1, 19, '2016-12-05 16:34:12'),
(4, 'mailing_19_1480955652.jpg', 'YES', 3, 19, '2016-12-05 16:34:12'),
(5, 'presentacion_20_1480955999.png', 'YES', 2, 20, '2016-12-05 16:39:59'),
(6, 'ficha_20_1480955999.tiff', 'YES', 1, 20, '2016-12-05 16:39:59'),
(7, 'mailing_20_1480955999.jpg', 'YES', 3, 20, '2016-12-05 16:39:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipos_Archivos`
--

CREATE TABLE `Tipos_Archivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Tipos_Archivos`
--

INSERT INTO `Tipos_Archivos` (`id`, `nombre`) VALUES
(1, 'FICHA TECNICA'),
(2, 'PRESENTACION'),
(3, 'MAILING'),
(4, 'VIDEO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Marcas`
--
ALTER TABLE `Marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Marcas_Archivos`
--
ALTER TABLE `Marcas_Archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Tipos_Archivos`
--
ALTER TABLE `Tipos_Archivos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Marcas`
--
ALTER TABLE `Marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `Marcas_Archivos`
--
ALTER TABLE `Marcas_Archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `Tipos_Archivos`
--
ALTER TABLE `Tipos_Archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
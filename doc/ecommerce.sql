-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2019 a las 07:10:05
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aperturas`
--

CREATE TABLE `aperturas` (
  `id` int(11),
  `familia_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angulo` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colorcategoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `imagenfamilia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `angulos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dim` int(11) NOT NULL,
  `tipodim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voltaje` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marco`
--

CREATE TABLE `marco` (
  `id` int(11) NOT NULL,
  `ancho` int(11) DEFAULT NULL,
  `alto` int(11) DEFAULT NULL,
  `prof` int(11) DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` int(11) DEFAULT NULL,
  `imagenmarco` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `familia_id` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nucleos`
--

CREATE TABLE `nucleos` (
  `id` int(11) NOT NULL,
  `potencia` int(11) NOT NULL,
  `alto` int(11) NOT NULL,
  `ancho` int(11) NOT NULL,
  `prof` int(11) NOT NULL,
  `imagenucleo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familia_id` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `orderuser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `products_id` int(11) NOT NULL,
  `price_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `familia_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nucleos_id` int(11) DEFAULT NULL,
  `aperturas_id` int(11) DEFAULT NULL,
  `fuente_id` int(11) DEFAULT NULL,
  `tdecolor_id` int(11) DEFAULT NULL,
  `marco_id` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdecolor`
--

CREATE TABLE `tdecolor` (
  `id` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `unidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `image`, `email`, `password`) VALUES
(1, 'juan', 'camacho', NULL, 'juan@juan.com', '$2y$10$1a7VP9U2BDRu3sYtSknHSep3BycJ2KoHrzzgT63EZZDLK4NJZonri');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aperturas`
--
ALTER TABLE `aperturas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `angulo` (`angulo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `fuente`
--
ALTER TABLE `fuente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marco`
--
ALTER TABLE `marco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familia_id` (`familia_id`);

--
-- Indices de la tabla `nucleos`
--
ALTER TABLE `nucleos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familia_id` (`familia_id`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familia_id` (`familia_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `nucleos_id` (`nucleos_id`),
  ADD KEY `aperturas_id` (`aperturas_id`),
  ADD KEY `fuente_id` (`fuente_id`),
  ADD KEY `tdecolor_id` (`tdecolor_id`),
  ADD KEY `marco_id` (`marco_id`);

--
-- Indices de la tabla `tdecolor`
--
ALTER TABLE `tdecolor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `temperatura` (`temperatura`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `familia_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `marco`
--
ALTER TABLE `marco`
  ADD CONSTRAINT `marco_ibfk_1` FOREIGN KEY (`familia_id`) REFERENCES `familia` (`id`);

--
-- Filtros para la tabla `nucleos`
--
ALTER TABLE `nucleos`
  ADD CONSTRAINT `nucleos_ibfk_1` FOREIGN KEY (`familia_id`) REFERENCES `familia` (`id`);

  ALTER TABLE `ecommerce`.`aperturas`  CHANGE COLUMN `imagenapertura` `imagen` VARCHAR(255) NOT NULL ;
  CREATE TABLE `dh_ecommerce`;
  ALTER TABLE `dh_ecommerce`.`products` DROP FOREIGN KEY `products_ibfk_4`;
  ALTER TABLE `dh_ecommerce`.`products` DROP INDEX `aperturas_id` ;
  ALTER TABLE `dh_ecommerce`.`aperturas` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;
  ALTER TABLE `dh_ecommerce`.`products`
  ADD CONSTRAINT `products_ibfk_4`
    FOREIGN KEY (`id`)
    REFERENCES `dh_ecommerce`.`aperturas` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT;


--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`familia_id`) REFERENCES `familia` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`nucleos_id`) REFERENCES `nucleos` (`id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`aperturas_id`) REFERENCES `aperturas` (`id`),
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`fuente_id`) REFERENCES `fuente` (`id`),
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`tdecolor_id`) REFERENCES `tdecolor` (`id`),
  ADD CONSTRAINT `products_ibfk_7` FOREIGN KEY (`marco_id`) REFERENCES `marco` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

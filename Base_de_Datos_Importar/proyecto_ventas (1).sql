-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-08-2021 a las 01:42:43
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `Id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Almacena Id de los clientes',
  `Codigo` int(13) NOT NULL COMMENT 'Almacena el código de los clientes',
  `Nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena nombre de los clientes ',
  `Apellido` varchar(20) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena apellidos de los clientes ',
  `Telefono` int(15) NOT NULL COMMENT 'Almacena el teléfono de los clientes ',
  `Email` varchar(25) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena el correo electrónico de los clientes ',
  `Direccion` varchar(40) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena la dirección de los clientes ',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Codigo`, `Nombre`, `Apellido`, `Telefono`, `Email`, `Direccion`) VALUES
(1, 1005, 'Yovani', 'Gomez', 99582020, 'yova@gmail.com', 'Lempira'),
(2, 451, 'Krysty ', 'Rivera', 66666666, 'Kris@gmail.com', 'Siguatepeque'),
(3, 5895, 'Javier ', 'Hernandez', 88888, 'javier@gmail.com', 'Intibuca'),
(4, 8749, 'Jimy', 'Alvarado', 5555555, 'jyg@gmail.com', 'Choluteca'),
(5, 1317, 'Katherine', 'Zelaya', 123123123, 'zelaya@gmail.com', 'Progreso'),
(6, 1314, 'Lesvin', 'Castillo', 879844, 'andoni@gmail.com', 'USAC'),
(7, 1356, 'Lindolfo', 'Ramos', 747474, 'lindolfo@gmail.com', 'San Pedro Sula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `precioVenta`, `precioCompra`, `existencia`) VALUES
(16, '05489', 'Mais', '50.00', '45.00', '9.00'),
(17, '4896', 'Carton Huevos', '100.00', '85.00', '17.00'),
(18, '5896', 'Cafe molido', '45.00', '40.00', '25.00'),
(19, '6932', 'Maseca', '20.00', '17.00', '8.00'),
(20, '96541', 'Harina', '35.00', '30.00', '40.00'),
(21, '555', 'Azucar', '18.00', '15.00', '4.00'),
(22, '666', 'Litro leche', '32.00', '27.00', '5.00'),
(23, '01088', 'papas', '20.00', '18.00', '4.00'),
(24, '7698', 'cebollas', '25.00', '22.00', '0.00'),
(25, '5444', 'Levadura', '8.00', '6.00', '3.00'),
(26, '9788', 'Fresco 1.25', '35.00', '30.00', '8.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

DROP TABLE IF EXISTS `productos_vendidos`;
CREATE TABLE IF NOT EXISTS `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  KEY `id_venta` (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(8, 17, 2, 33),
(9, 24, 2, 36),
(10, 25, 3, 36),
(11, 16, 1, 37);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `Id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Almacena id del proveedor ',
  `Codigo` int(13) NOT NULL COMMENT 'Almacena Codigo del proveedor ',
  `Empresa` varchar(20) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacenar nombre proveedor',
  `Producto` varchar(50) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena el producto que distribuye proveedor',
  `Telefono` int(15) NOT NULL COMMENT 'Almacena el contacto del proveedor ',
  `Email` varchar(25) COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena correo electrónico del proveedor',
  `Direccion` text COLLATE latin1_spanish_ci NOT NULL COMMENT 'Almacena la dirección de proveedor',
  `Fecha_Cont` date NOT NULL COMMENT 'Almacena fecha contrato ',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Codigo` (`Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Id`, `Codigo`, `Empresa`, `Producto`, `Telefono`, `Email`, `Direccion`, `Fecha_Cont`) VALUES
(1, 1004, 'Quinua', 'Maiz', 898774, 'qui@gmail.com', 'Lima', '2021-07-01'),
(2, 1025, 'Granja el Roble', 'Huevos', 458562, 'rob@gmail.com', 'Cortes', '2021-06-01'),
(3, 2001, 'Inverfast', 'Cafe Molido', 5874155, 'inver@gmail.com', 'Lepaera', '2021-07-04'),
(4, 301, 'Demacha', 'Maseca', 45136, 'dema@gmail.com', 'San Pedro Sula', '2021-01-01'),
(5, 305, 'La Grecia', 'Azucar', 87456, 'grecia@gmail.com', 'La Lima', '2021-07-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `Nombre`, `Usuario`, `pass`) VALUES
(1, 'Juan Yovani Gomez', 'yova', '$2y$12$yYPI3ljvDvxCboaUTsXbOOV..wpGyBMmF4CP5VECZP71KhgxGK0DW'),
(2, 'Administrador', 'admin', '$2y$12$JXSsUMEwl4oVDnbJmLmpaOzeOAJ9jG4.jSbXHoaFTjLB2L0XDNU/u'),
(3, 'Juan', 'yova', '$2y$12$fiaxdIhrHpT1bChbkTLKnejBjSqq1XBFOrmfGBdiDGfJddHKC1U1W');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`) VALUES
(1, '2021-07-06 19:30:18', '20.00'),
(10, '2021-07-06 20:51:37', '61.00'),
(11, '2021-07-06 20:52:06', '0.00'),
(12, '2021-07-06 21:14:15', '102.00'),
(16, '2021-07-07 15:50:09', '165.00'),
(24, '2021-07-10 15:09:28', '0.00'),
(26, '2021-07-14 00:22:26', '75.00'),
(27, '2021-07-14 00:23:57', '30.00'),
(28, '2021-07-20 16:23:20', '30.00'),
(33, '2021-07-22 19:12:07', '200.00'),
(35, '2021-07-23 02:31:15', '0.00'),
(36, '2021-07-25 23:42:19', '74.00'),
(37, '2021-07-27 18:21:54', '50.00');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

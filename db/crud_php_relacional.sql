-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 05:51:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_papeleria`
--
CREATE DATABASE IF NOT EXISTS `bd_papeleria` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_papeleria`;


DROP TABLE IF EXISTS `tbl_proveedor`;
DROP TABLE IF EXISTS `tbl_productos`;
DROP TABLE IF EXISTS `tbl_transacciones`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedor`
--

CREATE TABLE `tbl_proveedor` (
  `id_provedor` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_provedor` VARCHAR(100) NOT NULL,
  `direccion` VARCHAR(100),
  `telefono` INT(11),
  `correo_electronico` VARCHAR(100),
  `producto_principal` VARCHAR(100),
  `fecha_entrega` DATE,
  `total_productos` INT(11),
  PRIMARY KEY (`id_provedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_proveedor`
--

INSERT INTO `tbl_proveedor` (`id_provedor`, `nombre_provedor`, `direccion`, `telefono`, `correo_electronico`, `producto_principal`, `fecha_entrega`, `total_productos`) VALUES
(1, 'Proveedor1', 'Dirección1', 123456789, 'proveedor1@example.com', 'Producto1', '2023-08-25', 100),
(2, 'Proveedor2', 'Dirección2', 987654321, 'proveedor2@example.com', 'Producto2', '2023-08-26', 150);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` VARCHAR(100) NOT NULL,
  `categoria_producto` VARCHAR(100),
  `precio_unitario` FLOAT(10,2),
  `cantidad_stock` INT(100),
  `provedor` VARCHAR(100),
  `fecha_llegada` DATE,
  `descripcion_productos` VARCHAR(250),
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id_producto`, `nombre_producto`, `categoria_producto`, `precio_unitario`, `cantidad_stock`, `provedor`, `fecha_llegada`, `descripcion_productos`) VALUES
(1, 'Producto1', 'Categoría1', 50.00, 200, 'Proveedor1', '2023-08-25', 'Descripción1'),
(2, 'Producto2', 'Categoría2', 75.50, 150, 'Proveedor2', '2023-08-26', 'Descripción2');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_transacciones`
--

CREATE TABLE `tbl_transacciones` (
  `id_transaccion` INT(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` INT(11),
  `id_producto` INT(11),
  `cantidad_comprada` INT(11),
  `precio_total` FLOAT(10,2),
  `fecha_transaccion` DATE,
  PRIMARY KEY (`id_transaccion`),
  FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedor` (`id_provedor`),
  FOREIGN KEY (`id_producto`) REFERENCES `tbl_productos` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_transacciones`
--

INSERT INTO `tbl_transacciones` (`id_transaccion`, `id_proveedor`, `id_producto`, `cantidad_comprada`, `precio_total`, `fecha_transaccion`) VALUES
(1, 1, 1, 50, 2500.00, '2023-08-25'),
(2, 2, 2, 30, 2265.00, '2023-08-26');

--

-- --------------------------------------------------------


-- --------------------------------------------------------


-- --------------------------------------------------------

 --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
COMMIT;

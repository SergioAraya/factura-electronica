-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2017 at 12:06 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factura-electronica`
--

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_presupuesto` int(11) DEFAULT NULL,
  `id_notac` int(11) DEFAULT NULL,
  `id_contacto` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_total` decimal(20,5) NOT NULL DEFAULT '0.00000',
  `iva` decimal(20,5) NOT NULL DEFAULT '0.00000',
  `anticipo` decimal(20,5) NOT NULL DEFAULT '0.00000',
  `saldo` decimal(20,5) NOT NULL DEFAULT '0.00000',
  `comentarios` text COLLATE utf8_unicode_ci,
  `r1` date DEFAULT NULL,
  `r2` date DEFAULT NULL,
  `r3` date DEFAULT NULL,
  `fecha_cobro` date DEFAULT NULL,
  `expira` int(11) DEFAULT '0',
  `ce` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facturas`
--

INSERT INTO `facturas` (`id`, `ref`, `id_presupuesto`, `id_notac`, `id_contacto`, `fecha_registro`, `sub_total`, `iva`, `anticipo`, `saldo`, `comentarios`, `r1`, `r2`, `r3`, `fecha_cobro`, `expira`, `ce`, `estatus`) VALUES
(5, '120120', NULL, NULL, 34, '2017-07-18 22:01:31', '0.00000', '0.00000', '100.00000', '0.00000', 'deme', '2017-07-11', NULL, NULL, NULL, 0, '+++123/45698/987++++', 0),
(6, '10', NULL, NULL, 34, '2017-07-18 23:15:41', '0.00000', '0.00000', '0.00000', '0.00000', '', NULL, NULL, NULL, NULL, 0, NULL, 10),
(7, '44', 5, 1, 34, '2017-07-18 23:21:10', '4.00000', '4.00000', '4.00000', '0.00000', '140', '2017-07-11', '2017-07-11', '2017-07-11', '2017-07-11', 4, '+++2365/56/998++++', 10),
(9, 'dssdsedzsd', 3, NULL, 35, '2017-07-19 01:08:09', '0.00000', '0.00000', '0.00000', '0.00000', 'Este es un comentarios publico', NULL, NULL, NULL, NULL, 0, '+++123/45698/456+++', -1),
(10, '58458', NULL, NULL, 34, '2017-07-19 14:19:43', '0.00000', '0.00000', '0.00000', '0.00000', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(11, 'dR3YF6FXCL', NULL, NULL, 36, '2017-07-19 14:29:56', '0.00000', '0.00000', '0.00000', '0.00000', 'ss', NULL, NULL, NULL, NULL, 10, '', 0),
(12, 'r6R73DU5HY', NULL, NULL, 35, '2017-07-19 14:31:50', '0.00000', '0.00000', '0.00000', '0.00000', 'Casa de patico', NULL, NULL, NULL, NULL, 15, '', 0),
(13, 'oUB81NluFo', NULL, NULL, 35, '2017-07-19 14:32:09', '0.00000', '0.00000', '0.00000', '0.00000', 'Casa de patico', NULL, NULL, NULL, NULL, 25, '', 0),
(14, 'P8Y3eGKb2W', NULL, NULL, 35, '2017-07-19 14:32:53', '0.00000', '0.00000', '0.00000', '0.00000', 'Campo de patico', NULL, NULL, NULL, NULL, 45, '', 0),
(15, 'qzXoBzVCme', NULL, NULL, 37, '2017-07-19 14:44:58', '0.00000', '0.00000', '0.00000', '0.00000', 'a pagar 50% adelantado 50% a la entrega', NULL, NULL, NULL, NULL, 45, '', -1),
(16, 'kQuSFBLhgJ', NULL, NULL, 34, '2017-07-19 14:47:48', '0.00000', '0.00000', '200.00000', '0.00000', 'pago y recepcion de pagos', NULL, NULL, NULL, NULL, 45, '', 0),
(17, '8rnc4jCSfM', NULL, NULL, 35, '2017-07-19 16:53:01', '0.00000', '0.00000', '0.00000', '0.00000', 'tet', NULL, NULL, NULL, NULL, 45, '', 0),
(18, '6BsXgEZhnW', NULL, NULL, 36, '2017-07-19 16:56:46', '0.00000', '0.00000', '0.00000', '0.00000', 'tst', NULL, NULL, NULL, NULL, 15, '', 0),
(19, 'hhDaHZJk8w', NULL, NULL, 35, '2017-07-19 17:01:43', '100.00000', '21.00000', '50.00000', '0.00000', '', NULL, NULL, NULL, NULL, 12, '', 0),
(20, 'x1MlXq6iLT', NULL, NULL, 37, '2017-07-19 17:39:42', '200.00000', '42.00000', '100.00000', '0.00000', 'd', '2017-07-05', '2017-07-12', '2017-07-12', NULL, 10, '', 0),
(21, 'xbll2OY3jD', NULL, NULL, 35, '2017-07-19 21:08:47', '0.00000', '0.00000', '0.00000', '0.00000', 'pago en efectivo unicamente', NULL, NULL, NULL, NULL, 10, '', 0),
(22, '5k14olAfW5', NULL, NULL, 36, '2017-07-19 22:12:28', '0.00000', '0.00000', '0.00000', '0.00000', '', NULL, NULL, NULL, NULL, 20, '', 0),
(23, '3QQcPkLKdU', NULL, NULL, 38, '2017-07-19 22:12:41', '0.00000', '0.00000', '0.00000', '0.00000', '', NULL, NULL, NULL, NULL, 20, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `factura_items`
--

CREATE TABLE `factura_items` (
  `id` int(11) NOT NULL,
  `ref_factura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `valor` decimal(20,5) NOT NULL,
  `porcentaje_iva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `factura_items`
--

INSERT INTO `factura_items` (`id`, `ref_factura`, `cantidad`, `descripcion`, `valor`, `porcentaje_iva`) VALUES
(9, '44', 1, '1', '1.00000', 10),
(12, '44', 1, 'casa', '251.00000', 10),
(13, '44', 1, 'cambio de casa', '100000.00000', 10),
(15, '120120', 1, 'carton para laventa de materiales de contruccioncarton para laventa de materiales de contruccioncarton para laventa de materiales de contruccion', '251.00000', 10),
(24, '10', 1, 'demos', '20.00000', 10),
(26, '10', 55, '5', '5.00000', 10),
(28, 'dssdsedzsd', 1, 'casa de pe', '5410.00000', 10),
(29, 'dssdsedzsd', 1, 'demenagemnt', '250.00000', 10),
(30, 'dssdsedzsd', 150, 'lapices de colores', '0.10000', 20),
(31, 'dssdsedzsd', 20, 'demos', '120.00000', 10),
(32, 'P8Y3eGKb2W', 1, 'demenagemnt', '2000.00000', 10),
(33, 'P8Y3eGKb2W', 1, 'demenagemnt', '200.00000', 10),
(34, 'P8Y3eGKb2W', 1, 'deme,', '120.00000', 10),
(35, 'qzXoBzVCme', 1, 'formuario on line', '200.00000', 10),
(36, 'qzXoBzVCme', 1, 'soporte tecnico', '200.00000', 20),
(49, 'kQuSFBLhgJ', 1, '111', '500.00000', 10),
(52, 'kQuSFBLhgJ', 1, 'deme', '200.00000', 10),
(53, '8rnc4jCSfM', 1, 'casa', '200.00000', 0),
(54, '8rnc4jCSfM', 1, '1', '500.00000', 10),
(55, '6BsXgEZhnW', 1, 'deme', '100.00000', 20),
(57, '6BsXgEZhnW', 1, '', '100.00000', 0),
(58, '6BsXgEZhnW', 1, '', '-100.00000', 20),
(61, 'x1MlXq6iLT', 10, '', '20.00000', 0),
(62, 'xbll2OY3jD', 1, 'deme', '200.00000', 0),
(63, '3QQcPkLKdU', 1, 'cambio de casa', '20.00000', 10),
(64, '3QQcPkLKdU', 1, 'deme', '2020.00000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ref` (`ref`),
  ADD UNIQUE KEY `ref_2` (`ref`,`id_contacto`),
  ADD KEY `id_contacto` (`id_contacto`);

--
-- Indexes for table `factura_items`
--
ALTER TABLE `factura_items`
  ADD UNIQUE KEY `id_item` (`id`),
  ADD KEY `ref_factura` (`ref_factura`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `factura_items`
--
ALTER TABLE `factura_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`id_contacto`) REFERENCES `contactos` (`id`);

--
-- Constraints for table `factura_items`
--
ALTER TABLE `factura_items`
  ADD CONSTRAINT `factura_items_ibfk_1` FOREIGN KEY (`ref_factura`) REFERENCES `facturas` (`ref`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
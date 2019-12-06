-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2019 a las 16:05:09
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbcarrito`
--
CREATE DATABASE IF NOT EXISTS `dbcarrito` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbcarrito`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Nombre`, `Clave`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('dayana', '827ccb0eea8a706c4c34a16891f84e7b'),
('mario', '827ccb0eea8a706c4c34a16891f84e7b'),
('melissa', '827ccb0eea8a706c4c34a16891f84e7b'),
('salvador', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `CodigoCat` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  PRIMARY KEY (`CodigoCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CodigoCat`, `Nombre`, `Descripcion`) VALUES
('A01', 'Accesorios', 'Accesorios para bicicletas de todo tipo y toda marca'),
('B03', 'Bicicletas', 'Bicicletas mbx, montañesas, carrera, urbanas y hibridas'),
('R02', 'Repuestos', 'Repuestos para bicicletas de todo tipo y marcas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Dui` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Clave` text NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Dui`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Dui`, `Nombre`, `NombreCompleto`, `Apellido`, `Clave`, `Direccion`, `Telefono`, `Email`) VALUES
('0-1213-123231-1', 'azucar', 'salvador alexander', 'martinez azucar', 'd2f0c294711426f440af6c188232e774', 'el carmen la union', 74968945, 'salva.alexander1995@gmail.com'),
('001365897', 'cordova', 'Melissa', 'Cordovs', '827ccb0eea8a706c4c34a16891f84e7b', 'Chinameca', 76839658, 'cordovameliissa@gmail.com'),
('025178965', 'Meybelin', 'Meybelin Dayana', 'Claros Perdomo', 'e10adc3949ba59abbe56e057f20f883e', 'Jucuapa', 74757879, 'meybe.perdomo15@gmail.com'),
('051990525', 'marquez', 'Jose Mario', 'Marquez Chicas', 'a3db51854269688ecb43999069f907e4', 'Segundo Montes, Morazan', 76166333, 'josemarmarquez1995@gmail.com'),
('052081117', 'azucar', 'salvador alexander', 'martinez azucar', '827ccb0eea8a706c4c34a16891f84e7b', 'el carmen la union', 74968945, 'salva.a@gmail.com'),
('1-4277254-14-1', 'dasaDDS', 'SDAD ASDD', 'asdas asdasd', 'faedacdd5bb5c78ad732033a0f416979', 'gualococti', 26190031, 'salva.a@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `NumPedido` int(20) NOT NULL,
  `CodigoProd` varchar(30) NOT NULL,
  `CantidadProductos` int(20) NOT NULL,
  KEY `NumPedido` (`NumPedido`),
  KEY `CodigoProd` (`CodigoProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`NumPedido`, `CodigoProd`, `CantidadProductos`) VALUES
(1, 'A0101', 1),
(1, 'A0101', 1),
(2, 'A0101', 1),
(3, 'A0101', 1),
(4, 'A0101', 1),
(5, 'A0101', 1),
(5, 'A0102', 1),
(5, 'B0101', 1),
(5, 'R0101', 1),
(6, 'A0101', 1),
(6, 'B0101', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `CodigoProd` varchar(30) NOT NULL,
  `NombreProd` varchar(30) NOT NULL,
  `CodigoCat` varchar(30) NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Stock` int(20) NOT NULL,
  `descriPro` varchar(250) NOT NULL,
  `NITProveedor` varchar(30) NOT NULL,
  `Imagen` varchar(150) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`CodigoProd`),
  KEY `CodigoCat` (`CodigoCat`),
  KEY `NITProveedor` (`NITProveedor`),
  KEY `Agregado` (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`CodigoProd`, `NombreProd`, `CodigoCat`, `Precio`, `Modelo`, `Marca`, `Stock`, `descriPro`, `NITProveedor`, `Imagen`, `Nombre`) VALUES
('A0101', 'Casco Bicicleta', 'A01', '25.00', 'Casco de Seguridad', 'CHICTRY', 17, 'para mayor protección casco de la mejor calidad', '01841659889', 'descarga.jpg', 'admin'),
('A0102', 'Guantes', 'A01', '20.00', 'Anatomic Spiuk', 'SPIUK', 18, 'guantes de gran calidad', '01841659889', 'guantes.jpg', 'admin'),
('B0101', 'Bicicleta MTB', 'B03', '5999.00', 'Nomad', 'Santa Cruz', 3, 'La reputación de la Nomad se ha formado gracias a nuestro empeño en crear una bicicleta tan absorben', '01841659889', 'santa cruz.jpg', 'admin'),
('R0101', 'Platos', 'R02', '9.00', 'fsa sl-k light ', 'Megaexo', 14, '- Rodamientos Megaexo.\r\n- Platos de Aluminio 7075 CNC.\r\n- Tornillos de platos de aluminio Torx T-30.', '01841659889', 'plato.png', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `NITProveedor` varchar(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `PaginaWeb` varchar(30) NOT NULL,
  PRIMARY KEY (`NITProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`NITProveedor`, `NombreProveedor`, `Direccion`, `Telefono`, `PaginaWeb`) VALUES
('01841659889', 'Corsario', 'san salvador', 20190032, 'www.corsario.sv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `NumPedido` int(20) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(150) NOT NULL,
  `Dui` varchar(30) NOT NULL,
  `Descuento` int(20) NOT NULL,
  `TotalPagar` decimal(30,2) NOT NULL,
  `Estado` varchar(150) NOT NULL,
  PRIMARY KEY (`NumPedido`),
  KEY `NIT` (`Dui`),
  KEY `NIT_2` (`Dui`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`NumPedido`, `Fecha`, `Dui`, `Descuento`, `TotalPagar`, `Estado`) VALUES
(1, '17-06-2019', '052081117', 0, '50.00', 'Entregado'),
(2, '17-06-2019', '052081117', 0, '25.00', 'Pendiente'),
(3, '17-06-2019', '052081117', 0, '25.00', 'Entregado'),
(4, '17-06-2019', '052081117', 0, '25.00', 'Pendiente'),
(5, '17-06-2019', '052081117', 0, '6053.00', 'Pendiente'),
(6, '19-06-2019', '001365897', 0, '6024.00', 'Pendiente');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_8` FOREIGN KEY (`CodigoProd`) REFERENCES `producto` (`CodigoProd`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ibfk_9` FOREIGN KEY (`NumPedido`) REFERENCES `venta` (`NumPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_7` FOREIGN KEY (`CodigoCat`) REFERENCES `categoria` (`CodigoCat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_8` FOREIGN KEY (`NITProveedor`) REFERENCES `proveedor` (`NITProveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_9` FOREIGN KEY (`Nombre`) REFERENCES `administrador` (`Nombre`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`Dui`) REFERENCES `cliente` (`Dui`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

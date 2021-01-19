-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2020 a las 01:04:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL COMMENT 'primary key',
  `name` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'Employee Name',
  `last_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `address` text CHARACTER SET latin1,
  `salary` float(10,2) NOT NULL COMMENT 'employee salary'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='datatable demo table';

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `name`, `last_name`, `email`, `contact_no`, `address`, `salary`) VALUES
(1, 'Ashton', 'Cox', 'cox@gmail.com', '9000000001', 'Tokyo', 300001.00),
(2, 'Bradley', 'Greer', 'greer@gmail.com', '9000000002', 'Landon', 200001.00),
(3, 'Brenden', 'Wagner', 'wagner@gmail.com', '9000000003', 'New York', 500001.00),
(4, 'Brielle', 'Williamson', 'williamson@gmail.com', '9000000004', 'Cape Town', 600001.00),
(5, 'Caesar', 'Vance', 'vance@gmail.com', '9000000005', 'Sydney', 500002.00),
(6, 'Cedric', 'Kelly', 'kelly@gmail.com', '9000000006', 'Wellington', 600003.00),
(7, 'Prescott', 'Bartlett', 'Bartlett@gmail.com', '9000000007', 'Washington DC', 500002.00),
(8, 'Haley', 'Kennedy', 'Kennedy@gmail.com', '9000000013', 'Amsterdam', 678003.00),
(9, 'Charde', 'Marshall', 'marshall@gmail.com', '9000000008', 'Madrid', 509002.00),
(10, 'Jaeeme', 'Khan', 'khan@gmail.com', '9000000014', 'Delhi', 542003.00),
(11, 'Bunty', 'Bably', 'bably@gmail.com', '9000000009', 'Ottawa', 657002.00),
(12, 'Hermione', 'Butler', 'Butler@gmail.com', '9000000015', 'Edinburgh', 987003.00),
(13, 'Sonia', 'Khan', 'sonia@gmail.com', '9000000010', 'Oslo', 345002.00),
(14, 'Herrod', 'Chandler', 'Chandler@gmail.com', '9000000016', 'Abu Dhabi', 603003.00),
(15, 'Roney', 'Rockey', 'rockey@gmail.com', '9000000011', 'Berlin', 321002.00),
(16, 'Howard', 'Hatfield', 'Hatfield@gmail.com', '9000000017', 'Ankara', 123003.00),
(17, 'Gloria', 'Little', 'little@gmail.com', '9000000012', 'Rome', 920002.00),
(18, 'Jackson', 'Bradshaw', 'Bradshaw@gmail.com', '9000000018', 'Lisbon', 690003.00),
(19, 'Quinn', 'Flynn', 'Quinn@gmail.com', '9000000019', 'Antananarivo', 700003.00),
(20, 'Tatyana', 'Fitzpatrick', 'Fitzpatrick@gmail.com', '9000000020', 'Manila', 600001.00),
(21, 'Thor', 'Walton', 'Thor@gmail.com', '9000000021', 'Santiago', 304001.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key', AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2019 a las 04:58:15
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `octavio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita2`
--

CREATE TABLE `cita2` (
  `clave` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `ciudad` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `edad` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_cita` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `hora_cita` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `comentario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `contrasenia` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` varchar(11) COLLATE latin1_spanish_ci DEFAULT 'MASCULINO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cita2`
--

INSERT INTO `cita2` (`clave`, `nombre`, `email`, `telefono`, `ciudad`, `edad`, `fecha_cita`, `hora_cita`, `comentario`, `contrasenia`, `sexo`) VALUES
(1, 'cesar', 'cesar@gmail.com', '7361170092', '5 de mayo #510', '24', '3/04/2019', '13:00 ', 'MASCULINO', '12345', 'MASCULINO'),
(33, 'manuel ochoa', 'manu@gmail.com', '7331092222', 'centro por la primaria', '19', '9/04/2019', '01:00 pm', 'MASCULINO', '', 'MASCULINO'),
(35, 'Julio mora reina', 'julio@gmail.com', '7361189002', 'kilometro 1 apaxtla-teloloapan', '25', '2019-05-02', '17:00', 'MASCULINO', '', 'MASCULINO'),
(36, 'Huber Brito', 'huber@gmail.com', '7361124352', 'Apaxtla, 5 de mayo ', '54', '2019-05-29', '13:00', 'MASCULINO', '', 'MASCULINO'),
(37, 'misael avila marin', 'misael@gmail.com', '82828282', 'Apaxtla', '35', '2019-05-28', '12:00', 'MASCULINO', '', 'MASCULINO'),
(38, 'Sara romero', 'rgsari@hotmail.com', '7361120044', 'col. vicente', '25', '2019-06-06', '9:00 ', 'MASCULINO', '', 'MASCULINO'),
(39, 'carlos', 'carlosvn1@yahoo.com.mz', '7627267676', 'Reforma 33', '23', '12/06/2019', '9:00 ', 'MASCULINO', '[C@273e194f', 'MASCULINO'),
(40, 'pedro', 'pedro@gmail.com', '6736276671', 'reforma 34', '23', '6/06/2019', '9:00 ', 'MASCULINO', '[C@66f4c6c4', 'MASCULINO'),
(41, 'isabel', 'isabel@gmail.com', '6372676767', 'reforma 88', '23', '22/06/2019', '9:00 ', 'FEMENINO', '[C@52df47ef', 'MASCULINO'),
(42, 'ramiro', 'ramiro@gmail.com', '6756453412', 'reforma 100', '23', '24/06/2019', '9:00 ', 'MASCULINO', '[C@21d299bc', 'MASCULINO'),
(43, 'rodrigo', 'rodrigo@gmail.com', '5563729876', 'reforma 78', '45', '29/06/2019', '9:00 ', 'MASCULINO', 'asdf', 'MASCULINO'),
(44, 'rodolfa', 'rodolfa@gmail.com', '5565656565', 'Reforma 34', '23', '29/06/2019', '18:30', 'FEMENINO', 'asdf', 'MASCULINO'),
(45, 'araceli', 'araceli@gmail.com', '6767676767', 'reforma 56', '21', '28/06/2019', '10:30', 'FEMENINO', 'asdf', 'FEMENINO'),
(46, 'raul', 'raul@gmail.com', '5565656565', 'reforma 45', '12', '11/06/2019', '11:30', 'MASCULINO', 'asdf', 'MASCULINO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita2`
--
ALTER TABLE `cita2`
  ADD PRIMARY KEY (`clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita2`
--
ALTER TABLE `cita2`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

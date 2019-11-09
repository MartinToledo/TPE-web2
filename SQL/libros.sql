-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2019 a las 05:12:30
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `nombre` varchar(50) NOT NULL,
  `passcode` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre`, `passcode`) VALUES
('user1', '$2y$10$Ms8/DKAMjf4.MAaDXYjGvuu1c87QRYRQnRdqG50fZ1zZLbpHXwN9i'),
('user2', '$2y$10$sad920CHI/1ZUpcplybrReW3dpfwLfEmNlFsYGZFGvO1CXdZaQQm2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`) VALUES
(1, 'Terror'),
(2, 'Fantasia'),
(3, 'Ciencia Ficcion'),
(4, 'Romance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(3500) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `edad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `id_genero`, `titulo`, `descripcion`, `autor`, `editorial`, `edad`) VALUES
(1, 1, 'El archivo', 'Esto es la descripcion del libro el archivo', 'Jefferson Gutierritos', 'Flores Silvestres', '9000 años en adelante'),
(2, 2, 'Asesinatos En La Universidad', 'esta es la descripcion del libro ttitulado \"Asesinatos En La Univerisdad\"', 'Ricardo Gomez', 'Meteoritos Lentos', 'de 1 a 0 meses'),
(3, 3, 'Control Mental', 'Esta es la descripcion del libro titulado \"control mental\"', 'Mi perrito', 'Felinos giles', 'desde los 56'),
(4, 4, 'El solsticio', 'esta es la descripcion del libro titulado \"El Solsticio\"', 'Franco Stalin', 'Aguanten los Gatitos', 'para menores de 0 años'),
(5, 3, 'La vaca voladora', 'Esta es la descripcion de \"La vaca voladora\"', 'Arthur Carlos', 'Pared rojo', '67 - 12'),
(6, 2, 'La luna Violeta', 'Esta es la descripcion de la luna violeta', 'Hitler', 'De Nazi', '-123 hasta los - 23 años'),
(7, 1, 'Octubre un Crimen', 'esta es la descripción de el libro titulado \"Octubre un Crimen\"', 'Goku', 'Aguante Dragon Ball', '67787 años - 6532563 años'),
(8, 4, 'Black Veil Brides', 'Aquí esta la descripcion del libro titulado \"Black Veil Brides\"', 'Rikka', 'El Horizonte Etereo', '17000 a 18000 años');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

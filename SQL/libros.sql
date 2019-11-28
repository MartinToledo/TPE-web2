-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2019 a las 01:22:40
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
-- Estructura de tabla para la tabla `imagenlibro`
--

CREATE TABLE `imagenlibro` (
  `id_imagen` varchar(100) NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 2, 'Resurrecciones En La Primaria', 'esta es la descripcion del libro ttitulado \"Asesinatos En La Univerisdad\"', 'Pütin', 'Lluvia de babosas', 'pa\' los pi\''),
(4, 4, 'El solsticio', 'esta es la descripcion del libro titulado \"El Solsticio\"', 'Franco Stalin', 'Aguanten los Gatitos', 'para menores de 0 años'),
(6, 2, 'La luna Violeta', 'Esta es la descripcion de la luna violeta', 'Hitler', 'De Nazi', '-123 hasta los - 23 años'),
(7, 1, 'Octubre un Crimen', 'esta es la descripción de el libro titulado \"Octubre un Crimen\"', 'Goku', 'Aguante Dragon Ball', '67787 años - 6532563 años'),
(10, 1, 'Asesinatos En El Jardin', 'Esta es la descripcion de el libro titulado \"Asesinatos En El Jardin\"', 'Jesucristo', 'Modo Cristo', '6,02^23'),
(11, 4, 'Unicornios de Helado', 'Esta es la descripción de el libro titulado \"Unicornios de Helado\"', 'Mi mami', 'Ve a tu habitación', 'pa\' tos'),
(12, 3, 'El Robot de Jamón', 'Esta es la descripción de el libro titulado \"El Robot de Jamón\"', 'Mi perrito', 'Mininos Giles', 'desde 3 años perro'),
(13, 3, 'La Mortadela Mutante', 'Esta es la descripción del libro llamado \"La Mortadela Mutante\"', '¿Que te importa?, gil', 'Una de por ahí', 'y... no se...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `token`
--

CREATE TABLE `token` (
  `id_usuario` varchar(50) NOT NULL,
  `id_token` varchar(400) NOT NULL,
  `dia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `passcode` varchar(300) NOT NULL,
  `permisos` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `email`, `passcode`, `permisos`) VALUES
('Ter', 'm.angeles.rasmussen@gmail.com', '$2y$10$vWsPvVNDi0VqMzPKbZlWF.Ik5sb6F20UbcEhlI2C9fxXVg8PcZ8Ri', 0),
('user1', 'reandorotoredo@gmail.com', '$2y$10$jK23x7/ZwYqGbT.50ZlOdekUSn3596foKPPE02ecpclbSfHNfrwq6', 0),
('user2', 'reandorotoredo@gmail.com', '$2y$10$sad920CHI/1ZUpcplybrReW3dpfwLfEmNlFsYGZFGvO1CXdZaQQm2', 1),
('user3', 'reandorotoredo@gmail.com', '$2y$10$OCbDXuDEhxGhyWv9P3ZLSOWW1ZY89oUO7scL3mTR57X/lZfEoaaBq', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `imagenlibro`
--
ALTER TABLE `imagenlibro`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

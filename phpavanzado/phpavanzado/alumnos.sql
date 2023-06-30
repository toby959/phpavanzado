-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 16:00:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `cod_alumno` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `edad` int(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`cod_alumno`, `nombre`, `apellido`, `edad`, `password`) VALUES
(1, 'Juan', 'Pérez', 20, 'password1'),
(2, 'María', 'García', 22, 'password2'),
(3, 'Pedro', 'López', 21, 'password3'),
(4, 'Ana', 'Martínez', 19, 'password4'),
(5, 'Luis', 'Sánchez', 23, 'password5'),
(6, 'Lucía', 'Fernández', 20, 'password6'),
(7, 'Carlos', 'González', 22, 'password7'),
(8, 'Sofía', 'Hernández', 21, 'password8'),
(9, 'Miguel', 'Ruiz', 19, 'password9'),
(10, 'Laura', 'Díaz', 23, 'password10'),
(11, 'Jorge', 'Gómez', 20, 'password11'),
(12, 'Carla', 'Ramírez', 22, 'password12'),
(13, 'Diego', 'Hernández', 21, 'password13'),
(14, 'Florencia', 'Gutiérrez', 19, 'password14'),
(15, 'Lucas', 'García', 23, 'password15'),
(16, 'Valentina', 'López', 20, 'password16'),
(17, 'Martín', 'Sánchez', 22, 'password17'),
(18, 'Camila', 'Fernández', 21, 'password18'),
(19, 'Tomás', 'Martínez', 19, 'password19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`cod_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `cod_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

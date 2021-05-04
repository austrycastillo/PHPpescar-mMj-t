-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2021 a las 22:01:10
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `experimentosoop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cine`
--

CREATE TABLE `cine` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `butacas` int(11) NOT NULL,
  `disponibles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cine`
--

INSERT INTO `cine` (`id`, `nombre`, `genero`, `descripcion`, `butacas`, `disponibles`) VALUES
(1, 'Harry Potter ', 'Literatura fan', 'es una serie de novelas fantásticas escrita por la autora británica J. K. Rowling, en la que se describen las aventuras del joven aprendiz de magia y hechicería Harry Potter y sus amigos Hermione Granger y Ron Weasley, durante los años que pasan en el Colegio Hogwarts de Magia y Hechicería. Wikipedia\r\nAutor: J. K. Rowling\r\nPrimer libro: Harry Potter y la piedra filosofal\r\nTítulo original: Harry Potter\r\nPersonajes: Hermione Granger, Harry Potter, Draco Malfoy, MÁS', 100, 100),
(2, 'La Llamada', 'Terror', 'La llamada es una película española de 2017 perteneciente al género musical, escrita y dirigida por Javier Ambrossi y Javier Calvo, conocidos popularmente como los Javis,11​ y protagonizada por Macarena García, Anna Castillo, Belén Cuesta y Gracia Olayo. Se trata de una adaptación cinematográfica de la obra teatral homónima de 2013, ganadora de trece premios BroadwayWorld,12​13​ entre otros galardones.', 100, 100),
(3, 'Rápidos y Furiosos', 'Acción', 'La novena película Fast and Furious sigue las emocionantes aventuras y carreras del equipo de amigos, tras la traición de Dominic Toretto', 100, 100),
(4, 'El pianista', 'Drama', 'El Pianista (The Pianist) es una película del año 2002 dirigida por Roman Polanski y con Adrien Brody como actor principal. La película es una adaptación de las memorias del músico polaco de origen judío Władysław Szpilman2​ sobre como sobrevivió al holocausto, y la ocupación de Varsovia, capital de Polonia por la Alemania Nazi en 1939.', 100, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cine`
--
ALTER TABLE `cine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cine`
--
ALTER TABLE `cine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

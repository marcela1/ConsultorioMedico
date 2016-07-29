-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2016 a las 20:14:30
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `celular` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `remember_token` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `especialidad`, `cedula`, `usuario`, `contraseña`, `direccion`, `estado`, `telefono`, `celular`, `correo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'marcelaa', 'carrillo', 'hernandez', 'pediatra', '123456', 'marcela', '12345', 'aloe', 'sinaloa', '6672555555', '6672333333', 'marcela-saku@hotmail.com', NULL, '2016-07-15 04:24:26', '2016-07-15 04:24:26'),
(2, 'melissa', 'carrillo', 'hernandez', 'pediatra', '32131fda', 'mel', '123456', 'aloe', 'sinaloa', '234435', '6672344343', 'mel@gmail.com', NULL, '2016-07-15 07:10:35', '2016-07-15 07:10:35'),
(3, 'maria', 'gonzales', 'hernandez', 'pediatra', '3213rrqr', 'maria', '123456', 'rosales', 'sinaloa', '54353535', '4535353', 'maria@gmail.com', NULL, '2016-07-15 08:29:29', '2016-07-15 08:29:29'),
(4, 'Jesus', 'Aispuro', 'Morales', 'Medico General', '93939jdi', 'Jesus', 'Hola123', 'Castiza', 'Sinaloa', '8888383', '99494949', 'medico@hotmail.com', NULL, '2016-07-26 22:25:57', '2016-07-26 22:25:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador_paciente`
--

CREATE TABLE `administrador_paciente` (
  `id_administrador` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(30) NOT NULL,
  `consultorio` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `id_paciente`, `id_administrador`, `descripcion`, `fecha`, `hora`, `consultorio`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'dolor de Cabeza', '2016-07-21', '10:30', '1', '2016-07-22 05:20:20', '2016-07-22 11:20:20'),
(2, 1, 1, 'dolor de Cabeza', '2016-07-21', '11:30', '1', '2016-07-15 11:15:03', '2016-07-15 11:15:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(20) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `altura` varchar(20) NOT NULL,
  `IMC` varchar(40) NOT NULL,
  `temperatura_corporal` varchar(30) NOT NULL,
  `presion` varchar(30) NOT NULL,
  `frecuencia_respiratoria` varchar(40) NOT NULL,
  `frecuencia_cardiaca` varchar(40) NOT NULL,
  `antecedentes_familiares` varchar(250) NOT NULL,
  `padecimientos` varchar(150) NOT NULL,
  `clasificacion` varchar(50) DEFAULT NULL,
  `diagnostico` varchar(150) NOT NULL,
  `tratamiento` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `id_paciente`, `id_administrador`, `fecha`, `hora`, `peso`, `altura`, `IMC`, `temperatura_corporal`, `presion`, `frecuencia_respiratoria`, `frecuencia_cardiaca`, `antecedentes_familiares`, `padecimientos`, `clasificacion`, `diagnostico`, `tratamiento`, `created_at`, `updated_at`) VALUES
(4, 1, 1, '2016-07-20', '11:46', '80', '82', '24', '37', '120/90', '123', '79', 'Diabetes', 'Dolor de cabeza', 'gripa', 'aaaa', 'Paracetamol', '2016-07-21 00:02:45', '2016-07-21 00:02:45'),
(5, 2, 1, '2016-07-21', '11:46', '80', '82', '24', '37', '120/90', '123', '79', 'Diabetes', 'Dolor de cabeza', 'gripa', 'aaaa', 'Paracetamol', '2016-07-21 22:50:11', '2016-07-21 22:50:11'),
(6, 1, 2, '2016-07-27', '12:12', '68', '56', '24', '23', '23', '144', '133', 'aaa', 'ad', 'qqqqq', 'aa', 'ddd', '2016-07-27 18:19:28', '0000-00-00 00:00:00'),
(7, 2, 3, '2016-07-28', '9:24', '80', '82', '24', '37', '120/90', '123', '', 'Diabetes', 'Dolor de cabeza', 'gripa', 'aaaa', 'Paracetamol', '2016-07-29 09:24:31', '2016-07-29 09:24:31'),
(8, 2, 2, '2016-07-28', '9:24', '80', '82', '24', '37', '120/90', '123', '79', 'Diabetes', 'Dolor de cabeza', 'gripa', 'aaaa', 'Paracetamol', '2016-07-29 04:54:35', '2016-07-29 10:54:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta_receta`
--

CREATE TABLE `consulta_receta` (
  `id_paciente` int(11) NOT NULL,
  `id_receta` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `id_receta` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido_paterno` varchar(40) NOT NULL,
  `apellido_materno` varchar(40) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `lugar_nacimiento` varchar(100) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `tipo_sangre` varchar(10) NOT NULL,
  `seguro_medico` varchar(40) DEFAULT NULL,
  `curp` varchar(40) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `telefono` varchar(40) DEFAULT NULL,
  `correo` varchar(30) NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `fecha_registro`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `sexo`, `estado_civil`, `lugar_nacimiento`, `ocupacion`, `tipo_sangre`, `seguro_medico`, `curp`, `calle`, `colonia`, `ciudad`, `codigo_postal`, `telefono`, `correo`, `numero_casa`, `municipio`, `estado`, `pais`, `celular`, `created_at`, `updated_at`) VALUES
(1, '2016-07-14', 'marcela', 'hernandez', 'ontiveros', '1993-07-21', 'femenino', 'soltera', 'sinaloa', 'secretaria', 'a+', '23132+dfsf', '13213jkldsjf', 'aloe', '21 de marzo', 'culiacan', 80280, '21432432', 'marcela2@gmail.com', 32131, 'culiacan', 'sinaloa', 'mexico', '6672223344', '2016-07-15 01:07:52', '0000-00-00 00:00:00'),
(2, '2016-07-20', 'Jesus', 'Aispuro', 'Morales', '1992-12-23', 'Masculino', 'Soltero', 'Culiacan', 'Estudiante', 'A+', '', 'AIMJ921223HSLSRS05', 'Castiza', 'Cuauhtemoc', 'Culiacan', 80027, '8374734347374', 'nuevo@gmail.com', 3089, 'Culiacan, Rosales', 'Sinaloa', 'Mexico', '4433333', '2016-07-20 22:59:07', '2016-07-20 22:59:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `pago` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `id_paciente`, `id_administrador`, `hora`, `fecha`, `pago`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '12:23', '2016-07-28', 350, '2016-07-29 10:40:43', '2016-07-29 10:40:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(20) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `tratamiento` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id`, `id_paciente`, `id_administrador`, `fecha`, `hora`, `peso`, `tratamiento`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2016-07-21', '11:46', '80', 'Paracetamol cada 8 horas', '2016-07-21 12:14:08', '2016-07-21 12:14:08'),
(4, 2, 1, '2016-07-21', '11:46', '80', 'abaa', '2016-07-21 22:54:27', '2016-07-21 22:54:27'),
(6, 2, 3, '2016-07-27', '11:46', '80', 'Paracetamol', '2016-07-28 10:17:29', '2016-07-28 10:17:29'),
(7, 2, 3, '2016-07-28', '9:24', '80', 'Paracetamol', '2016-07-29 09:24:40', '2016-07-29 09:24:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jesus', 'dany_aispuro@hotmail.com', '$2y$10$dF2EaGb3Asf6p8cpcv7/S.I653ReFauAdBZvxMknSPaSB7.3QbGT2', 'Y7dmIVxup0YlMomkrGe8VS4SoemlkkAtJGVedr07STB9sf1xMh25XqBOt28U', '2016-07-29 11:10:43', '2016-07-29 23:38:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administrador_paciente`
--
ALTER TABLE `administrador_paciente`
  ADD KEY `id_administrador` (`id_administrador`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_aministrador` (`id_administrador`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indices de la tabla `consulta_receta`
--
ALTER TABLE `consulta_receta`
  ADD KEY `id_consulta` (`id_paciente`),
  ADD KEY `id_receta` (`id_receta`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_administrador` (`id_administrador`),
  ADD KEY `id_consulta` (`id_consulta`),
  ADD KEY `id_receta` (`id_receta`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_administrador` (`id_administrador`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador_paciente`
--
ALTER TABLE `administrador_paciente`
  ADD CONSTRAINT `administrador_paciente_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `administrador_paciente_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consulta_receta`
--
ALTER TABLE `consulta_receta`
  ADD CONSTRAINT `consulta_receta_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_receta_ibfk_2` FOREIGN KEY (`id_receta`) REFERENCES `receta` (`id`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_3` FOREIGN KEY (`id_consulta`) REFERENCES `consulta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `receta_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receta_ibfk_2` FOREIGN KEY (`id_administrador`) REFERENCES `administradores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

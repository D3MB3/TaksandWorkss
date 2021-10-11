-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2021 a las 02:07:47
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taksandworks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `code` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `ordering` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`code`, `name`, `description`, `ordering`, `file`, `estado`) VALUES
(1, 'Trabajos', 'Nuestro servicio de soluciÃ³n de trabajos...', 1, '1.jpg', 0),
(2, 'Tareas', 'Nuestro servicio de soluciÃ³n de tareas...', 2, '2.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `serv_consec` int(11) NOT NULL,
  `serv_cod` varchar(50) NOT NULL,
  `fech_reg` varchar(10) NOT NULL,
  `fech_entrega` varchar(10) NOT NULL,
  `hor_entrega` varchar(8) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`serv_consec`, `serv_cod`, `fech_reg`, `fech_entrega`, `hor_entrega`, `correo`) VALUES
(1, 'InstalaciÃ³n Antivirus', '2020-10-25', '2020-10-30', '15:22', 'alejandra@gmail.com'),
(2, 'Recuperacion_de_datos', '2020-10-25', '', '', 'alejandra@gmail.com'),
(3, 'Monitoreo_de_Redes', '2020-10-26', '', '', 'isabel@gmail.com'),
(4, 'Escaneo_de_Redes', '2020-10-29', '2020-10-30', '18:19', 'duber@yaho.es'),
(5, 'Instalacion_Antivirus', '2021-05-04', '', '', 'dgsgs@yahoo.es'),
(6, 'Escaneo_de_Redes', '2021-05-04', '', '', 'dgsgs@yahoo.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`codigo`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `codigotrabajo` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `rutaarchivo` varchar(200) DEFAULT NULL,
  `fechaingreso` varchar(10) NOT NULL,
  `fechasolicita` varchar(10) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fechaentrega` varchar(10) DEFAULT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`codigotrabajo`, `descripcion`, `rutaarchivo`, `fechaingreso`, `fechasolicita`, `correo`, `estado`, `fechaentrega`, `tipo`) VALUES
(1, 'Tarea de php', 'files/eee_tareadephp.docx', '2020-09-24', '2020-09-30', 'andres@hotmail.com', 'Pendiente', '2020-09-30', 'Tarea'),
(2, 'tarea de php2', 'files/eeeadaDDA_tareadephp.docx', '2020-09-24', '2020-09-29', 'czscs@hotmail.com', 'En Proceso', '2020-09-26', 'Tarea'),
(3, 'Trabajo de MatemÃ¡tica operativa', 'files/diana_trabajodematemÃ¡tica.docx', '2020-09-24', '2020-09-25', 'czscs@hotmail.com', 'Pendiente', '', 'Trabajo'),
(4, 'Trabajo de MatemÃ¡tica operativa', 'files/diana_trabajodematemÃ¡tica.docx', '2020-09-24', '2020-09-25', 'czscs@hotmail.com', 'En Proceso', '2020-09-03', 'Trabajo'),
(5, 'Trabajo de Biologia', 'files/diana_trabajodebiologÃ­a.docx', '2020-09-24', '2020-09-27', 'czscs@hotmail.com', 'Pendiente', '', 'Trabajo'),
(6, 'fdsgds', 'files/diana_trabajodebiologÃ­a.docx', '2020-09-24', '2020-09-29', 'czscs@hotmail.com', 'Pendiente', '', 'Tarea'),
(7, 'Tarea de Ciencias', 'files/eee_trabajodebiologÃ­a.docx', '2020-09-24', '2020-09-26', 'andres@hotmail.com', 'Pendiente', '2020-09-17', 'Tarea'),
(8, 'tarea de matematicas', 'files/eee_tareamatematicas.docx', '2020-09-28', '2020-09-30', 'czscs@hotmail.com', 'Pendiente', '', 'Tarea'),
(9, 'tarea matematicas', 'files/Sara_tareamatematicas.docx', '2020-09-28', '2020-09-30', '	 sara@hotmail.com', 'En Proceso', '2021-08-27', 'Tarea'),
(10, 'fdsgdsg', 'files/Sara_tareamatematicas.docx', '2020-09-28', '2020-09-30', 'sara@hotmail.com', 'Pendiente', '', 'Trabajo'),
(11, 'dwqdwq', 'files/Sara_tareamatematicas.docx', '2020-09-28', '2020-09-30', 'sara@hotmail.com', 'Pendiente', '', 'Tarea'),
(12, 'Tarea 3', 'files/Sara_tareamatematicas.docx', '2020-09-28', '2020-09-30', 'sara@hotmail.com', 'Pendiente', '', 'Tarea'),
(20, 'tarea', 'files/Alejandra_tarea.docx', '2021-08-11', '2021-08-26', 'alejandra@gmail.com', 'Pendiente', '', 'Tarea'),
(21, 'Tarea de BiologÃ­a', 'files/Alejandra_tarea.docx', '2021-08-11', '2021-08-14', 'alejandra@gmail.com', 'Pendiente', '2021-08-20', 'Tarea'),
(22, 'Tarea de sociales', 'files/Alejandra_tarea.docx', '2021-08-13', '2021-08-22', 'alejandra@gmail.com', 'Pendiente', '', 'Tarea'),
(23, 'tarea de fÃ­sica', 'files/Alejandra_tarea.docx', '2021-08-13', '2021-08-15', 'alejandra@gmail.com', 'Pendiente', '', 'Tarea'),
(24, 'Tarea de MatemÃ¡ticas', 'files/Alejandra_tarea.docx', '2021-08-13', '2021-08-15', 'alejandra@gmail.com', 'En Proceso', '2021-08-18', 'Tarea'),
(25, 'Trabajo de Ciencias', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-29', '2021-08-30', 'alejandra@gmail.com', 'Pendiente', '', 'Trabajo'),
(26, 'Tarea de InformÃ¡tica', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-29', '2021-08-31', 'alejandra@gmail.com', 'Pendiente', '', 'Tarea'),
(27, 'Trabajo de trigonometria', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-29', '2021-08-31', 'alejandra@gmail.com', 'Pendiente', '', 'Trabajo'),
(28, 'Trabajo de trigonometria', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-29', '2021-08-31', 'alejandra@gmail.com', 'Pendiente', '', 'Trabajo'),
(29, 'Tarea de quÃ­mica', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-29', '2021-08-31', 'alejandra@gmail.com', 'Pendiente', '', 'Tarea'),
(30, 'Trabajo', 'files/Alejandra_index.php', '2021-08-29', '2021-09-10', 'alejandra@gmail.com', 'Pendiente', '', 'Trabajo'),
(31, 'Trabajo de InformÃ¡tica', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-29', '2021-09-09', 'alejandra@gmail.com', 'Pendiente', '', 'Trabajo'),
(32, 'tarea', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-31', '2021-09-08', 'alejandra@gmail.com', 'Pendiente', '', 'Tarea'),
(33, 'Trabajo de informÃ¡tica', 'files/Alejandra_recuperaciÃ³n.png', '2021-08-31', '2021-09-10', 'alejandra@gmail.com', 'Pendiente', '', 'Trabajo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correo` varchar(45) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correo`, `nombre`, `apellido`, `telefono`, `direccion`, `codigo`, `clave`) VALUES
('adsfas@yahoo.es', 'Carola', 'GÃ³mez', '352526', 'calle', 1, '333'),
('alejandra@gmail.com', 'Alejandra', 'Yepes', '34747', 'Calle 56 #12-34', 2, '999'),
('anamaria@gmail.com', 'Ana MarÃ­a', 'RendÃ³n ', '2345432', 'calle 45 # 21-12', 2, '888'),
('andres@hotmail.com', 'eee', 'adaDDA', 'adaDda', 'adADAd', 2, '123'),
('andrest21@yahoo.es', 'AndrÃ©s', 'GÃ³mez', '2345678', 'Calle 18# 45-45', 2, '111'),
('botero@yahoo.es', 'karla', 'ramirez', '4325325', 'calle 34', 1, '111'),
('caÃ±as@yahoo.es', 'Humberto', 'caÃ±as', '2345678', 'Calle 23 # 34-12', 2, '666'),
('carlos@hotmail.com', 'carlos mario', 'Correa', '92364578', 'calle 45 #23-12', 1, '33'),
('carmen@yahoo.com', 'Carmen', 'GÃ³mez', '2345678', 'Calle 45 # 89-21', 2, '777'),
('cerpa@gmail.com', 'Cristian', 'Cerpa', '3552623', 'calle 34 #21-99', 1, '555'),
('cesar7@gmail.com', 'Cesar', 'Moreno', '298 82 60', 'Rionegro', 1, '777'),
('cesar@yahoo.es', 'Cesar', 'LÃ³pez', '351526', 'calle 12', 2, '999'),
('cristian@gmail.com', 'Cristian', 'Cerpa', '317564123', 'Calle 45 # 77-91', 1, '333'),
('david@yahoo.es', 'David', 'Botero', '626442', 'calle 23 #65-12', 1, '555'),
('dgsgs@yahoo.es', 'sandra', 'toro', '463634', 'calle 22', 2, '123'),
('diana@yahoo.es', 'Diana', 'Quintero', '3456789', 'Calle #43-56', 2, '888'),
('diego@gamail.com', 'Diego', 'Tamayo', '43666', 'Calle 23 #45-23', 2, '222'),
('diego@yahoo.es', 'diego', 'perez', '3253252', 'calle 34 #65-23', 2, '999'),
('duber@yaho.es', 'duber', 'tabares', '536326', 'calle 23', 2, '333'),
('edison@hotmail.com', 'Edison', 'Toro', '2345678', 'calle 32', 2, '123'),
('eduardo22@gmail.com', 'eduardo', 'toro', '35626266', 'calle 44', 1, '111'),
('eduardo@gmail.com', 'Eduardo', 'Alvarez', '3456798', 'Calle 89 # 23-11', 1, '000'),
('eee', 'eee', 'eee', 'eee', 'eee', 2, 'eeee'),
('fabian@gmail.com', 'fabian', 'Torres', '3456789', 'Calle 34#23-12', 2, '777'),
('fds@hotmail.com', 'ss', 'dd', '432432', 'calle 22', 1, '123'),
('ffdffd@gmail.com', 'yolanda', 'tabares', '2345678', 'calle 34 #45-23', 1, '222'),
('fredy@gamil.com', 'fredy', 'gomez', '52356326', 'callle 34 #56-56', 1, '111'),
('humberto@gmail.com', 'humberto', 'zapata', '2345678', 'calle 34 #23-22', 2, '888'),
('isabel@gmail.com', 'Isabel', 'Zapata', '2345698', 'calle 34 #12-09', 2, '444'),
('sandra@gmail.com', 'sandra', 'Foronda', '2345687', 'Calle 45 # 12-23', 1, '555');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`serv_consec`),
  ADD KEY `correo` (`correo`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`codigotrabajo`),
  ADD KEY `correo` (`correo`),
  ADD KEY `correo_2` (`correo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `clave` (`clave`),
  ADD KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `serv_consec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `codigotrabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

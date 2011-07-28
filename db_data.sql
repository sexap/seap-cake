-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-07-2011 a las 04:26:49
-- Versión del servidor: 5.1.53
-- Versión de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sexap`
--

--
-- Volcar la base de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `usuario_id`, `titulo`, `tema`, `descripcion`, `inicio`, `fin`) VALUES
(1, 1, 'Tarea 1', 'Control Condicional', 'Â¡Haz tu tarea! Vale puntos extra.', '2011-06-16 21:07:00', '2011-06-21 21:07:00'),
(2, 2, 'Asdf', '', '', '2011-07-19 14:14:33', '2011-07-19 14:14:35');

--
-- Volcar la base de datos para la tabla `actividades_grupos`
--

INSERT INTO `actividades_grupos` (`actividad_id`, `grupo_id`) VALUES
(1, 2);

--
-- Volcar la base de datos para la tabla `actividades_problemas`
--

INSERT INTO `actividades_problemas` (`actividad_id`, `problema_id`) VALUES
(1, 2),
(1, 1);

--
-- Volcar la base de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `problema_id`, `usuario_id`, `fecha_envio`, `mensaje`) VALUES
(1, 2, 1, '2011-06-15 18:49:00', 'No entiendo. Â¿QuÃ© es un entero?'),
(2, 2, 2, '2011-06-15 18:53:00', 'Es como algo que no esta roto o partido en dos.');

--
-- Volcar la base de datos para la tabla `envios`
--

INSERT INTO `envios` (`id`, `problema_id`, `usuario_id`, `actividad_id`, `codigo`, `fecha_envio`, `tiempo_ejecucion`, `memoria_usada`, `lenguaje`, `veredicto`, `puntaje`) VALUES
(1, 1, 1, NULL, 'int main(){\r\n    return 0;\r\n}', '2011-06-15 18:01:00', 1, 1, 'C++', 'Incorrecto', 0),
(2, 1, 2, 1, 'dsfsdsd', '2011-07-01 18:44:00', 1, 1, '', '', 100);

--
-- Volcar la base de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `descripcion`, `uea_id`) VALUES
(2, 'SAI-84', 'AsesorÃ­as: 11.30 - 13.00', 1),
(3, 'CAT-09', 'Lunes, Miercoles y Viernes 7.00 - 8.30', 4);

--
-- Volcar la base de datos para la tabla `grupos_usuarios_miembros`
--


--
-- Volcar la base de datos para la tabla `grupos_usuarios_responsables`
--

INSERT INTO `grupos_usuarios_responsables` (`grupo_id`, `usuario_id`) VALUES
(2, 1);

--
-- Volcar la base de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol_id`, `permiso`) VALUES
(1, 3, '*.*'),
(9, 2, 'problemas.add'),
(10, 2, 'problemas.edit.autor'),
(11, 2, 'problemas.view'),
(12, 2, 'actividades.view'),
(13, 2, 'actividades.add'),
(14, 2, 'actividades.edit.autor'),
(15, 2, 'comentarios.view'),
(16, 2, 'comentarios.add'),
(17, 2, 'comentarios.edit.autor'),
(18, 2, 'grupos.view'),
(19, 2, 'grupos.add'),
(20, 2, 'grupos.edit.autor'),
(21, 2, 'usuarios.view'),
(22, 2, 'problemas.index'),
(23, 2, 'actividades.index'),
(24, 2, 'comentarios.index'),
(25, 2, 'grupos.index'),
(26, 1, 'problemas.index'),
(27, 1, 'problemas.view'),
(28, 2, 'usuarios.index'),
(29, 1, 'actividades.index'),
(30, 1, 'actividades.view'),
(31, 1, 'comentarios.index'),
(32, 1, 'comentarios.view'),
(33, 1, 'comentarios.add'),
(34, 1, 'comentarios.edit.autor'),
(35, 1, 'grupos.index'),
(36, 1, 'grupos.view'),
(37, 1, 'usuarios.index'),
(38, 1, 'usuarios.view'),
(39, 1, 'usuarios.edit.autor');

--
-- Volcar la base de datos para la tabla `permisos_roles`
--

INSERT INTO `permisos_roles` (`permiso_id`, `rol_id`) VALUES
(1, 3),
(5, 2),
(3, 2),
(4, 2),
(6, 4);

--
-- Volcar la base de datos para la tabla `problemas`
--

INSERT INTO `problemas` (`id`, `titulo`, `autor`, `enunciado`, `observaciones`, `palabras_clave`, `dificultad`, `privado`, `uea_id`, `usuario_id`) VALUES
(1, 'Un problema sencillo', 'Ernesto CastelÃ¡n ChÃ¡vez', 'Dados dos numeros a, b calcula la diferencia absoluta |a-b|.\r\n\r\nDatos de Entrada\r\nDos enteros a y b separados por un espacio.\r\n\r\nDatos de Salida\r\nUn entero, |a-b|\r\n\r\nEjemplo\r\n1 5\r\n4\r\n\r\n5 1\r\n4\r\n\r\n3 2\r\n1', '', '', 0, 0, 1, 1),
(2, 'Hormigas felices', 'Ernesto CastelÃ¡n', 'Existe una colonia con N hormigas. En la colonia hay M fuentes de alimento con Ci cantidad de alimento cada una. Desbes encontrar la forma de que todas las hormigas se puedan alimentar caminando lo menos posible.\r\n\r\nDatos de Entrada\r\nUna lÃ­nea con dos enteros N y M separados por un espacio.\r\nUna lÃ­nea con M enteros que corresponden a Ci\r\n\r\nDatos de Salida\r\nUna lÃ­nea con un entero, la distancia mÃ­nima total recorrida por las hormigas.\r\nSi el alimento no alcanza para todas las hormigas -1\r\n\r\nEjemplo\r\n56 5\r\n67 86 87 6 8\r\n25\r\n', '', '', 2, 0, 4, 1),
(3, 'Test', 'JaimeDuende', 'asdf', '', 'c', 0, 0, 3, 4);

--
-- Volcar la base de datos para la tabla `problemas_usuarios`
--


--
-- Volcar la base de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Alumno'),
(2, 'Profesor'),
(3, 'Administrador');

--
-- Volcar la base de datos para la tabla `roles_usuarios`
--

INSERT INTO `roles_usuarios` (`rol_id`, `usuario_id`) VALUES
(3, 4),
(2, 1),
(1, 2);

--
-- Volcar la base de datos para la tabla `test_suite_auth_users`
--

INSERT INTO `test_suite_auth_users` (`id`, `username`, `password`, `created`, `updated`) VALUES
(1, 'mariano', '5f4dcc3b5aa765d61d8327deb882cf99', '2007-03-17 01:16:23', '2007-03-17 01:18:31'),
(2, 'nate', '5f4dcc3b5aa765d61d8327deb882cf99', '2007-03-17 01:18:23', '2007-03-17 01:20:31'),
(3, 'larry', '5f4dcc3b5aa765d61d8327deb882cf99', '2007-03-17 01:20:23', '2007-03-17 01:22:31'),
(4, 'garrett', '5f4dcc3b5aa765d61d8327deb882cf99', '2007-03-17 01:22:23', '2007-03-17 01:24:31'),
(5, 'chartjes', '5f4dcc3b5aa765d61d8327deb882cf99', '2007-03-17 01:22:23', '2007-03-17 01:24:31');

--
-- Volcar la base de datos para la tabla `test_suite_datatypes`
--

INSERT INTO `test_suite_datatypes` (`id`, `float_field`, `bool`) VALUES
(1, 42.23, 0);

--
-- Volcar la base de datos para la tabla `test_suite_prefix_prefix_tests`
--


--
-- Volcar la base de datos para la tabla `ueas`
--

INSERT INTO `ueas` (`id`, `nombre`) VALUES
(1, 'ProgramaciÃ³n Estructurada'),
(2, 'Estructura de Datos'),
(3, 'Almacenamiento y RecuperaciÃ³n de la InformaciÃ³n'),
(4, 'DiseÃ±o de Algoritmos');

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `mat_eco`, `contrasena`, `car_depto`, `imagen`, `firma`, `correo`, `telefono`, `twitter`, `facebook`, `baneado`, `razon`) VALUES
(1, 'Profesor Xavier', '000', '8aefb06c426e07a0a671a1e2488b4858d694a730', 'Depto. Sistemas', '', '', 'prof_x@yahoo.com', '', '', '', 0, ''),
(2, 'Alumno Jaime JuÃ¡rez', '555', 'cfa1150f1787186742a9a884b73a43d8cf219f9b', 'SociologÃ­a', '', '', 'bla@hotmail.com', '', '', '', 0, ''),
(4, 'Admin', '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '', 'admin_seap@uam.mx', '', '', '', 0, '');

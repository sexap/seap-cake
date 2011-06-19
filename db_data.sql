-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2011 a las 18:28:50
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

INSERT INTO `actividades` (`id`, `titulo`, `tema`, `descripcion`, `inicio`, `fin`) VALUES
(1, 'Tarea 1', 'Control Condicional', 'Â¡Haz tu tarea! Vale puntos extra.', '2011-06-16 21:07:00', '2011-06-21 21:07:00');

--
-- Volcar la base de datos para la tabla `actividades_grupos`
--

INSERT INTO `actividades_grupos` (`actividad_id`, `grupo_id`) VALUES
(1, 2);

--
-- Volcar la base de datos para la tabla `actividades_problemas`
--

INSERT INTO `actividades_problemas` (`actividad_id`, `problema_id`) VALUES
(1, 1),
(1, 2);

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
(1, 1, 1, NULL, 'int main(){\r\n    return 0;\r\n}', '2011-06-15 18:01:00', 1, 1, 'C++', 'Incorrecto', 0);

--
-- Volcar la base de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre`, `horario`, `uea_id`) VALUES
(2, 'SAI-84', 'AsesorÃ­as: 11.30 - 13.00', 1),
(3, 'CAT-09', 'Lunes, Miercoles y Viernes 7.00 - 8.30', 4);

--
-- Volcar la base de datos para la tabla `grupos_usuarios_miembros`
--


--
-- Volcar la base de datos para la tabla `grupos_usuarios_responsables`
--


--
-- Volcar la base de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`) VALUES
(1, '*'),
(4, 'actividades.*'),
(3, 'problemas.*'),
(5, 'grupos.index');

--
-- Volcar la base de datos para la tabla `permisos_roles`
--

INSERT INTO `permisos_roles` (`permiso_id`, `rol_id`) VALUES
(3, 2),
(1, 3),
(4, 2),
(5, 2);

--
-- Volcar la base de datos para la tabla `problemas`
--

INSERT INTO `problemas` (`id`, `titulo`, `autor`, `enunciado`, `observaciones`, `palabras_clave`, `dificultad`, `privado`, `uea_id`, `usuario_id`) VALUES
(1, 'Un problema sencillo', 'Ernesto CastelÃ¡n ChÃ¡vez', 'Dados dos numeros a, b calcula la diferencia absoluta |a-b|.\r\n\r\nDatos de Entrada\r\nDos enteros a y b separados por un espacio.\r\n\r\nDatos de Salida\r\nUn entero, |a-b|\r\n\r\nEjemplo\r\n1 5\r\n4\r\n\r\n5 1\r\n4\r\n\r\n3 2\r\n1', '', '', 0, 0, 1, 1),
(2, 'Hormigas felices', 'Ernesto CastelÃ¡n', 'Existe una colonia con N hormigas. En la colonia hay M fuentes de alimento con Ci cantidad de alimento cada una. Desbes encontrar la forma de que todas las hormigas se puedan alimentar caminando lo menos posible.\r\n\r\nDatos de Entrada\r\nUna lÃ­nea con dos enteros N y M separados por un espacio.\r\nUna lÃ­nea con M enteros que corresponden a Ci\r\n\r\nDatos de Salida\r\nUna lÃ­nea con un entero, la distancia mÃ­nima total recorrida por las hormigas.\r\nSi el alimento no alcanza para todas las hormigas -1\r\n\r\nEjemplo\r\n56 5\r\n67 86 87 6 8\r\n25\r\n', '', '', 2, 0, 4, 1);

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
(1, 2),
(1, 3),
(2, 1);

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
(1, 'Profesor X', 0, '8aefb06c426e07a0a671a1e2488b4858d694a730', 'Ing. ComputaciÃ³n', '', '', '', '', '', '', 0, ''),
(2, 'Juan Perez', 208555666, 'b9c989e04e968069dec4399654f5dbaad8542840', 'SociologÃ­a', '', '', '', '', '', '', 0, ''),
(3, 'Maloso', 666, 'cd3f0c85b158c08a2b113464991810cf2cdfc387', '', '', '', '', '', '', '', 1, 'Por maloso'),
(4, 'Super Admin', 1234, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '', '', '', '', '', 0, 'No estÃ¡ baneado. Esto se mostrarÃ¡ como una advertencia.');

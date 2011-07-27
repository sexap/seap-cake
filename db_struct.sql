-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-07-2011 a las 19:02:39
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `sexap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(32) unsigned NOT NULL,
  `titulo` varchar(512) NOT NULL,
  `tema` varchar(512) NOT NULL,
  `descripcion` text NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_grupos`
--

DROP TABLE IF EXISTS `actividades_grupos`;
CREATE TABLE IF NOT EXISTS `actividades_grupos` (
  `actividad_id` int(32) unsigned NOT NULL,
  `grupo_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_problemas`
--

DROP TABLE IF EXISTS `actividades_problemas`;
CREATE TABLE IF NOT EXISTS `actividades_problemas` (
  `actividad_id` int(32) unsigned NOT NULL,
  `problema_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `problema_id` int(32) unsigned NOT NULL,
  `usuario_id` int(32) unsigned NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

DROP TABLE IF EXISTS `envios`;
CREATE TABLE IF NOT EXISTS `envios` (
  `id` int(64) unsigned NOT NULL AUTO_INCREMENT,
  `problema_id` int(32) unsigned NOT NULL,
  `usuario_id` int(32) unsigned NOT NULL,
  `actividad_id` int(32) unsigned DEFAULT NULL,
  `codigo` text NOT NULL,
  `fecha_envio` datetime NOT NULL,
  `tiempo_ejecucion` int(32) NOT NULL,
  `memoria_usada` int(32) NOT NULL,
  `lenguaje` varchar(16) NOT NULL,
  `veredicto` varchar(16) NOT NULL,
  `puntaje` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `descripcion` text NOT NULL,
  `uea_id` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_usuarios_miembros`
--

DROP TABLE IF EXISTS `grupos_usuarios_miembros`;
CREATE TABLE IF NOT EXISTS `grupos_usuarios_miembros` (
  `grupo_id` int(32) unsigned NOT NULL,
  `usuario_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_usuarios_responsables`
--

DROP TABLE IF EXISTS `grupos_usuarios_responsables`;
CREATE TABLE IF NOT EXISTS `grupos_usuarios_responsables` (
  `grupo_id` int(32) unsigned NOT NULL,
  `usuario_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `rol_id` int(32) unsigned NOT NULL,
  `permiso` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_roles`
--

DROP TABLE IF EXISTS `permisos_roles`;
CREATE TABLE IF NOT EXISTS `permisos_roles` (
  `permiso_id` int(32) unsigned NOT NULL,
  `rol_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas`
--

DROP TABLE IF EXISTS `problemas`;
CREATE TABLE IF NOT EXISTS `problemas` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(512) DEFAULT NULL,
  `autor` varchar(512) NOT NULL,
  `enunciado` text NOT NULL,
  `observaciones` text NOT NULL,
  `palabras_clave` varchar(2048) NOT NULL,
  `dificultad` tinyint(4) NOT NULL,
  `privado` tinyint(1) NOT NULL,
  `uea_id` int(32) NOT NULL,
  `usuario_id` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `problemas_usuarios`
--

DROP TABLE IF EXISTS `problemas_usuarios`;
CREATE TABLE IF NOT EXISTS `problemas_usuarios` (
  `problema_id` int(32) unsigned NOT NULL,
  `usuario_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuarios`
--

DROP TABLE IF EXISTS `roles_usuarios`;
CREATE TABLE IF NOT EXISTS `roles_usuarios` (
  `rol_id` int(32) unsigned DEFAULT NULL,
  `usuario_id` int(32) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_suite_auth_users`
--

DROP TABLE IF EXISTS `test_suite_auth_users`;
CREATE TABLE IF NOT EXISTS `test_suite_auth_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_suite_datatypes`
--

DROP TABLE IF EXISTS `test_suite_datatypes`;
CREATE TABLE IF NOT EXISTS `test_suite_datatypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `float_field` float(5,2) NOT NULL,
  `bool` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test_suite_prefix_prefix_tests`
--

DROP TABLE IF EXISTS `test_suite_prefix_prefix_tests`;
CREATE TABLE IF NOT EXISTS `test_suite_prefix_prefix_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ueas`
--

DROP TABLE IF EXISTS `ueas`;
CREATE TABLE IF NOT EXISTS `ueas` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `mat_eco` int(30) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `car_depto` varchar(512) NOT NULL,
  `imagen` varchar(2048) NOT NULL,
  `firma` varchar(1024) NOT NULL,
  `correo` varchar(512) NOT NULL,
  `telefono` varchar(32) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `baneado` tinyint(1) NOT NULL,
  `razon` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mat_eco` (`mat_eco`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

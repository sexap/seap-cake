<?php
class Permiso extends AppModel {
	//Propiedades CAKE
    var $name = 'Permiso';
	var $displayField = 'permiso';
	
	//Relaciones
	var $hasAndBelongsToMany = 'Rol';
	
	//Validación
	var $validate = array(
		'permiso' => array(
			/*
			Expresión regular que acepta controlador.acción[.alcance]
			controlador y acción pueden ser un comodín '*'
			alcance es opcional y puede ser 'todo' o bien 'autor'
			*/
			'rule' => '/^([a-z]+|\*)\.([a-z]+|\*)(\.(todo|autor))?$/i',
			'message' => 'Un permiso debe ser de la forma controlador.acción.'
		)
	);
}
?>
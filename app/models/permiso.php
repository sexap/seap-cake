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
			//Expresión regular acepta dos palabras (sólo letras o bien un asterisco) separadas por un punto
			'rule' => '/^([a-z]+|\*)\.([a-z]+|\*)$/i',
			'message' => 'Un permiso debe ser de la forma controlador.acción.'
		)
	);
}
?>
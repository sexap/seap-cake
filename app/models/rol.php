<?php
class Rol extends AppModel {
	//Propiedades CAKE
    var $name = 'Rol';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasAndBelongsToMany = array('Usuario', 'Permiso');
	
	//Validación
	var $validate = array(
		'nombre' => array(
			'rule' => 'notEmpty',
			'message' => 'No puede dejar el nombre del rol en blanco.'
	);
}
?>
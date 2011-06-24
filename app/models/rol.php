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
			'reglarol-1' => array(
				'rule' => array('maxLength', 50),
				'message' => 'El nombre del rol sobrepasa el limite de caracteres permitidos.'
			),
			'reglanrol-2' => array(
				'rule' => 'notEmpty',
				'message' => 'No puede dejar el nombre del rol en blanco.'
			)
		)
	);
}
?>
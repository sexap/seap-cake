<?php
class Rol extends AppModel {
	//Propiedades CAKE
    var $name = 'Rol';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasAndBelongsToMany = 'Usuario';
	var $hasMany = 'Permiso';
	
	//Validación
	var $validate = array(
		'nombre' => array(
			'reglanombre-1' => array(
				'rule' => 'isUnique',
				'message' => 'El nombre está siendo usado por otro rol.'
			),
			'reglanombre-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba un nombre para el rol.'
			)
		)
	);
}
?>
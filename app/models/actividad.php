<?php
class Actividad extends AppModel {
	//Propiedades CAKE
    var $name = 'Actividad';
	var $displayField = 'titulo';
	
	//Relaciones
	var $hasAndBelongsToMany = array('Problema', 'Grupo');
	var $hasMany = 'Envio';
	var $belongsTo = 'Usuario';
	
	//Validación
	var $validate = array(
		'titulo' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba el titulo de la actividad.'
		),
		'tema' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba el tema de la actividad.'
		),
		'descripcion' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba la descripcion de la actividad.'
		)
	);
}
?>
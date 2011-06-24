<?php
class Actividad extends AppModel {
	//Propiedades CAKE
    var $name = 'Actividad';
	var $displayField = 'titulo';
	
	//Relaciones
	var $hasAndBelongsToMany = array('Grupo', 'Problema');
	var $hasMany = 'Envio';
	
	//Validación
	var $validate = array(
		'titulo' => array(
			'reglatitulo-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Solo se permiten letras y numeros en el titulo de la actividad'
			),
			'reglatitulo-2' => array(
				'rule' => array('maxLength', 100),
				'message' => 'El titulo de la actividad sobrepasa el limite de caracteres permitidos'
			),
			'reglatitulo-3' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba el titulo de la actividad.'
			)
		),
		'tema' => array(
			'reglatema-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Solo se permiten letras y numeros en el tema de la actividad'
			),
			'reglatema-2' => array(
				'rule' => array('maxLength', 50),
				'message' => 'El tema de la actividad sobrepasa el limite de caracteres permitidos'
			),
			'reglatema-3' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba el tema de la actividad.'
			)
		),
		'descripcion' => array(
			'regladescripcion-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Solo se permiten letras y numeros en la descripcion de la actividad'
			),
			'regladescripcion-2' => array(
				'rule' => array('maxLength', 50),
				'message' => 'La descripcion de la actividad sobrepasa el limite de caracteres permitidos'
			),
			'regladescripcion-3' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba la descripcion de la actividad.'
			)
		),
		'inicio' => array(
			'reglainicio-1' => array(
				'rule' => array('date','dmy'),
				'message' => 'Ingrese la fecha de inicio en el formato DD-MM-YY'
			),
			'reglainicio-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba la fecha de inicio de la actividad.'
			)
		),
		'fin' => array(
			'reglafin-1' => array(
				'rule' => array('date','dmy'),
				'message' => 'Ingrese la fecha de finalizacion en el formato DD-MM-AA'
			),
			'reglafin-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba la fecha de finalizacion de la actividad.'
			)
		)
	);
}
?>
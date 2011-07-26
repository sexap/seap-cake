<?php
class Problema extends AppModel {
	//Propiedades CAKE
    var $name = 'Problema';
	var $displayField = 'titulo';
	
	//Relaciones
	var $belongsTo = array('Usuario', 'Uea');
	var $hasAndBelongsToMany = array('Actividad', 'Usuario');
	var $hasMany = array('Envio', 'Comentario');
	
	//Validación
        var $validate = array(
		'titulo' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba el titulo del problema.'
		),
		'enunciado' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba el enunciado del problema.'
		),
		'autor' => array(
			'reglaautor-1' => array(
				'rule' => '/[A-Z][a-z]+ [A-Z][a-z]+/i',
				'message' => 'Solo se permiten letras en el nombre del autor del problema.'
			),
			'reglaautor-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba el nombre del autor del problema.'
			)
		), 
		'dificultad' => array(
			'regladificultad-1' => array(
				'rule' => array('comparison', ">", 0),
				'message' => 'La dificultad debe estar entre 1 y 3.'
			),
			'regladificultad-2' => array(
				'rule' => array('comparison', "<", 4),
				'message' => 'La dificultad debe estar entre 1 y 3.'
			),
			'regladificultad-3' => array(
				'rule' => 'Numeric',
				'message' => 'El valor de la dificultad debe ser numerico.'
			),
			'regladificultad-4' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba la dificultad del problema. (1-3)'
			)
		),			
		'palabras_clave' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba las palabras clave del problema.'
		)
	);
}
?>
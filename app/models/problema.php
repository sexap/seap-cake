<?php
class Problema extends AppModel {
	//Propiedades CAKE
    var $name = 'Problema';
	var $displayField = 'titulo';
	
	//Relaciones
	var $belongsTo = array('Usuario', 'Uea');
	var $hasAndBelongsToMany = 'Actividad';
	var $hasMany = array('Envio', 'Comentario');
	
	//Validación
        var $validate = array(
		'titulo' => array(
			'reglatitulo-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Solo se permiten letras y numeros en el titulo del problema.'
			),
			'reglatitulo-2' => array(
				'rule' => array('maxLength', 100),
				'message' => 'El titulo del problema sobrepasa el limite de caracteres permitidos.'
			),
			'reglatitulo-3' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba el titulo del problema.'
			)
		),
		'enunciado' => array(
			'reglaenunciado-1' => array(
				'rule' => array('maxLength', 500),
				'message' => 'El enunciado del problema sobrepasa el limite de caracteres permitidos.'
			),
			'reglaenunciado-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba el enunciado del problema.'
			)
		),
		'autor' => array(
			'reglaautor-1' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Solo se permiten letras y numeros en el nombre del autor del problema.'
			),
			'reglaautor-2' => array(
				'rule' => array('maxLength', 50),
				'message' => 'El nombre del autor del problema sobrepasa el limite de caracteres permitidos.'
			),
			'reglaautor-3' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba el nombre del autor del problema.'
			)
		), 
		'dificultad' => array(
			'regladificultad-1' => array(
				'rule' => array('between', 1, 3),
				'message' => 'La dificultad debe estar entre 1 y 3.'
			),
			'regladificultad-2' => array(
				'rule' => 'Numeric',
				'message' => 'El valor de la dificultad debe ser numerico.'
			)
		),			
		'palabras_clave' => array(
			'reglapalabrasclave-1' => array(
				'rule' => array('maxLength', 100),
				'message' => 'Las palabras clave del problema sobrepasan el limite de caracteres permitidos.'
			),
			'reglapalabrasclave-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba las palabras clave del problema.'
			)
		)
	);
}
?>
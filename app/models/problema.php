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
			'rule' => 'notEmpty',
			'message' => 'Escriba el titulo del problema.'), 
		'enunciado' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba el enunciado del problema.'), 
		'autor' => array(
			'rule' => 'notEmpty',
			'message' => 'Se requiere el nombre del autor.'), 
		'dificultad' => array(
			'ruleName' => array(
				'rule' => array('comparison', '>=', 0),
				'message' => 'Solo se permiten enteros entre 1 y 3.'
			),
			'ruleName2' => array(
				'rule' => array('comparison', '<=', 3),
				'message' => 'Solo se permiten enteros entre 1 y 3.'
			),
			'ruleName3' => array(
				'rule' => 'Numeric',
				'message' => 'Solo se permiten enteros entre 1 y 3.'
			)
		),			
		'palabras_clave' => array(
			'rule' => 'notEmpty',
			'message' => 'Es necesario agregar etiquetas.')
                );
}
?>
<?php
class Uea extends AppModel {
	//Propiedades CAKE
    var $name = 'uea';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasMany = array('Problema', 'Grupo');
	
	//Validación
	var $validate = array(
		'nombre' => array(
			'reglauea-1' => array(
				'rule' => array('maxLength', 50),
				'message' => 'El nombre de la UEA sobrepasa el limite de caracteres permitidos'
			),
			'reglanuea-2' => array(
				'rule' => 'notEmpty',
				'message' => 'No puede dejar el nombre de la UEA en blanco.'
			)
		)
	);
}
?>
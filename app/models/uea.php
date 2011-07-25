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
			'reglauea-' => array(
				'rule' => 'notEmpty',
				'message' => 'No puede dejar el nombre de la UEA en blanco.'
			),
            'reglauea-3' => array(
                'rule' => '/[A-Z][a-z]+ [A-Z][a-z]+/i',
                'message' => 'Solo se permiten letras en el nombre de la UEA.'
            )
		)
	);
}
?>
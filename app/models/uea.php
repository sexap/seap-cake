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
			'rule' => 'notEmpty',
			'message' => 'No puede dejar el nombre de la UEA en blanco.'
		)
	);
}
?>
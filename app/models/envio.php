<?php
class Envio extends AppModel {
	//Propiedades CAKE
    var $name = 'Envio';
	
	//Relaciones
	var $belongsTo = array('Problema', 'Usuario', 'Actividad');
	
	//validación
	var $validate = array(
		'codigo' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba el codigo.'
		)
	);
}
?>
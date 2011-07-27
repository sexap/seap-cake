<?php
class Comentario extends AppModel {
	//Propiedades CAKE
    var $name = 'Comentario';
	
	//Relaciones
	var $belongsTo = array('Usuario', 'Problema');
	
	//Validación
	var $validate = array(
		'mensaje' => array(
			'rule' => 'notEmpty',
			'message' => 'No puede dejar un comentario en blanco.'
		)
	);
}
?>
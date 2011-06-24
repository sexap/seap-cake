<?php
class Comentario extends AppModel {
	//Propiedades CAKE
    var $name = 'Comentario';
	
	//Relaciones
	var $belongsTo = array('Usuario', 'Problema');
	
	//Validación
	var $validate = array(
		'mensaje' => array(
			'reglamensaje-1' => array(
				'rule' => array('maxLength', 1000),
				'message' => 'El comentario sobrepasa el limite de caracteres permitidos'
			),
			'reglamensaje-2' => array(
				'rule' => 'notEmpty',
				'message' => 'No puede dejar un comentario en blanco.'
			)
		)
	);
}
?>
<?php
class Usuario extends AppModel {
	//Propiedades CAKE
    var $name = 'Usuario';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasMany = array('Problema', 'Envio', 'Comentario', 'Actividad');
	var $hasAndBelongsToMany = array(
		'Rol', 
		'Pendiente' => array('className' => 'Problema'),
		'IntegranteDe' => array('className' => 'Grupo', 'joinTable' => 'grupos_usuarios_miembros'),
		'ResponsableDe' => array('className' => 'Grupo', 'joinTable' => 'grupos_usuarios_responsables')
	);
	
	//Validación
	var $validate = array(
		'nombre' => array(
			'rule' => 'notEmpty',
			'message' => 'Escriba su nombre.'
		),
		'mat_eco' => array(
			'reglamat_eco-1' => array(
				'rule' => 'isUnique',
				'message' => 'La matrícula o número económico ya ha sido registrado por otro usuario.'
			),
			'reglamat_eco-2' => array(
				'rule' => 'numeric',
				'message' => 'Matrícula o número económico incorrecto.'
			),
			'reglamat_eco-3' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba su matrícula o número económico.'
			)
		),
		'contrasena1' => array(
			'reglacontrasena1-1' => array(
				'rule' => array('minLength', 6),
				'message' => 'La contraseña debe tener al menos 6 caracteres.'
			),
			'reglacontrasena1-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba una contraseña.'
			)
		),
		'contrasena2' => array(
			'reglacontrasena2-1' => array(
				'rule' => array('compareFields', 'contrasena1'),
				'message' => 'Las contraseñas no coinciden.'
			),
			'reglacontrasena2-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba de nuevo la contraseña.'
			)
		),
		'correo' => array(
			'reglacorreo-1' => array(
				'rule' => array('email', true),
				'message' => 'Correo electrónico incorrecto.'
			),
			'reglacorreo-2' => array(
				'rule' => 'notEmpty',
				'message' => 'Escriba su correo electrónico.'
			)
		)
	);
	
	function compareFields($thisField, $otherField = null){
		if ($otherField == null) return false;
		$value = array_shift($thisField);
		return ($value == $this->data[$this->name][$otherField]);
	}
}
?>
<?php
class Grupo extends AppModel {
    //Propiedades CAKE
	var $name = 'Grupo';
	var $displayField = 'nombre';
	
	//Relaciones
	var $belongsTo = 'Uea';
	var $hasAndBelongsToMany = array(
		'Actividad',
		'Integrante' => array('className' => 'Usuario', 'joinTable' => 'grupos_usuarios_miembros'),
		'Responsable' => array('className' => 'Usuario', 'joinTable' => 'grupos_usuarios_responsables')
	);
	
	//Validación
	var $validate = array(
		'nombre' => array(
			'reglanombre-1' => array(
				'rule' => array('maxLength', 50),
				'message' => 'El nombre del grupo sobrepasa el limite de caracteres permitidos.'
			),
			'reglanombre-2' => array(
				'rule' => 'notEmpty',
				'message' => 'No puede dejar el nombre del grupo en blanco.'
			)
		),
		'descripcion' => array(
			'regladescripcion-1' => array(
				'rule' => array('maxLength', 500),
				'message' => 'La descripcion del grupo sobrepasa el limite de caracteres permitidos.'
			),
			'regladescripcion-2' => array(
				'rule' => 'notEmpty',
				'message' => 'No puede dejar la descripcion del grupo en blanco.'
			)
		)
	);
}
?>
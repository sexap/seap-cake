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
			'rule' => 'notEmpty',
			'message' => 'No puede dejar el nombre del grupo en blanco.'
		),
		'descripcion' => array(
			'rule' => 'notEmpty',
			'message' => 'No puede dejar la descripcion del grupo en blanco.'
		)
	);
}
?>
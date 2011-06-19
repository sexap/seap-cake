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
}
?>
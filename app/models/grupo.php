<?php
class Grupo extends AppModel {
    var $name = 'Grupo';
	var $belongsTo = 'Uea';
	var $hasAndBelongsToMany = array(
		'Actividad',
		'Integrante' => array('className' => 'Usuario', 'joinTable' => 'grupos_usuarios_miembros'),
		'Responsable' => array('className' => 'Usuario', 'joinTable' => 'grupos_usuarios_responsables')
	);
}
?>
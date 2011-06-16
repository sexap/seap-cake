<?php
class Usuario extends AppModel {
    var $name = 'Usuario';
	var $hasMany = array('Problema', 'Envio', 'Comentario');
	var $hasAndBelongsToMany = array(
		'Rol',
		'IntegranteDe' => array('className' => 'Grupo', 'joinTable' => 'grupos_usuarios_miembros'),
		'ResponsableDe' => array('className' => 'Grupo', 'joinTable' => 'grupos_usuarios_responsables')
	);
}
?>
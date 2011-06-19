<?php
class Problema extends AppModel {
    var $name = 'Problema';
	var $displayField = 'titulo';
	
	var $belongsTo = array('Usuario', 'Uea');
	var $hasAndBelongsToMany = 'Actividad';
	var $hasMany = array('Envio', 'Comentario');
}
?>
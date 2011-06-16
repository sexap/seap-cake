<?php
class Problema extends AppModel {
    var $name = 'Problema';
	var $belongsTo = array('Usuario', 'Uea');
	var $hasAndBelongsToMany = 'Actividad';
	var $hasMany = array('Envio', 'Comentario');
}
?>
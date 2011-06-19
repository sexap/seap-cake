<?php
class Actividad extends AppModel {
    var $name = 'Actividad';
	var $displayField = 'titulo';
	
	var $hasAndBelongsToMany = array('Grupo', 'Problema');
	var $hasMany = 'Envio';
}
?>
<?php
class Problema extends AppModel {
	//Propiedades CAKE
    var $name = 'Problema';
	var $displayField = 'titulo';
	
	//Relaciones
	var $belongsTo = array('Usuario', 'Uea');
	var $hasAndBelongsToMany = 'Actividad';
	var $hasMany = array('Envio', 'Comentario');
	
	//Validación
}
?>
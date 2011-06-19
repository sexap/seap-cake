<?php
class Actividad extends AppModel {
	//Propiedades CAKE
    var $name = 'Actividad';
	var $displayField = 'titulo';
	
	//Relaciones
	var $hasAndBelongsToMany = array('Grupo', 'Problema');
	var $hasMany = 'Envio';
	
	//Validación
}
?>
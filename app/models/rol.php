<?php
class Rol extends AppModel {
	//Propiedades CAKE
    var $name = 'Rol';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasAndBelongsToMany = array('Usuario', 'Permiso');
	
	//Validación
}
?>
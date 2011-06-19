<?php
class Uea extends AppModel {
	//Propiedades CAKE
    var $name = 'uea';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasMany = array('Problema', 'Grupo');
	
	//Validación
}
?>
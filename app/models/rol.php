<?php
class Rol extends AppModel {
    var $name = 'Rol';
	var $displayField = 'nombre';
	
	var $hasAndBelongsToMany = array('Usuario', 'Permiso');
}
?>
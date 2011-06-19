<?php
class Permiso extends AppModel {
    var $name = 'Permiso';
	var $displayField = 'nombre';
	
	var $hasAndBelongsToMany = 'Rol';
}
?>
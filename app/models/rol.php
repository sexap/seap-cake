<?php
class Rol extends AppModel {
    var $name = 'Rol';
	var $hasAndBelongsToMany = array('Usuario', 'Permiso');
}
?>
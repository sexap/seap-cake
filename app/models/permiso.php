<?php
class Permiso extends AppModel {
    var $name = 'Permiso';
	var $hasAndBelongsToMany = 'Rol';
}
?>
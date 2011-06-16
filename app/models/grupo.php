<?php
class Grupo extends AppModel {
    var $name = 'Grupo';
	var $belongsTo = 'Uea';
	var $hasAndBelongsToMany = 'Actividad';
}
?>
<?php
class Actividad extends AppModel {
    var $name = 'Actividad';
	var $hasAndBelongsToMany = array('Grupo', 'Problema');
	var $hasMany = 'Envio';
}
?>
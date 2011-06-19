<?php
class Uea extends AppModel {
    var $name = 'uea';
	var $displayField = 'nombre';
	
	var $hasMany = array('Problema', 'Grupo');
}
?>
<?php
class Uea extends AppModel {
    var $name = 'uea';
	var $hasMany = array('Problema', 'Grupo');
}
?>
<?php
class Usuario extends AppModel {
    var $name = 'Usuario';
	var $hasMany = array('Problema', 'Envio', 'Comentario');
	var $hasAndBelongsToMany = 'Rol';
}
?>
<?php
class Envio extends AppModel {
    var $name = 'Envio';
	var $belongsTo = array('Problema', 'Usuario', 'Actividad');
}
?>
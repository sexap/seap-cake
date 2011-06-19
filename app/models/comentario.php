<?php
class Comentario extends AppModel {
    var $name = 'Comentario';
	
	var $belongsTo = array('Usuario', 'Problema');
}
?>
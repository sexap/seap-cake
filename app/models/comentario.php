<?php
class Comentario extends AppModel {
	//Propiedades CAKE
    var $name = 'Comentario';
	
	//Relaciones
	var $belongsTo = array('Usuario', 'Problema');
	
	//Validación
}
?>
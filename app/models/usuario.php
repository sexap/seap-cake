<?php
class Usuario extends AppModel {
	//Propiedades CAKE
    var $name = 'Usuario';
	var $displayField = 'nombre';
	
	//Relaciones
	var $hasMany = array('Problema', 'Envio', 'Comentario', 'Actividad');
	var $hasAndBelongsToMany = array(
		'Rol', 
		'Problema',
		'IntegranteDe' => array('className' => 'Grupo', 'joinTable' => 'grupos_usuarios_miembros'),
		'ResponsableDe' => array('className' => 'Grupo', 'joinTable' => 'grupos_usuarios_responsables')
	);
	
	//Validación
        var $validate = array(
                'nombre' => array(
                        'reglanombre-1' => array(
                                'rule' => '/[A-Z][a-z]+ [A-Z][a-z]+/i',
                                'message' => 'Solo se permiten letras en el nombre del usuario.'
                        ),
                        'reglanombre-2' => array(
                                'rule' => 'notEmpty',
                                'message' => 'Escriba el nombre del usuario.'
                        )
                ),
                'mat_eco' => array(
                        'rule' => 'notEmpty',
                        'message' => 'Escriba la matricula o No. economico del usuario.'
                ),
                'contrasena' => array(
                        'reglacontrasena-1' => array(
                                'rule' => array('between', 8, 40),
                                'message' => 'La contraseña debe tener una longitud entre 8 y 40 caracteres.'
                        ),
                        'reglacontrasena-2' => array(
                                'rule' => 'alphaNumeric',
                                'message' => 'Solo se permiten numeros y letras en la contraseña.'
                        ),
                        'reglacontrasena-3' => array(
                                'rule' => 'notEmpty',
                                'message' => 'Es necesario ingresar una contraseña.'
                        )
                ),
                'car_depto' => array(
                        'reglacar_depto-1' => array(
                                'rule' => '/[A-Z][a-z]+ [A-Z][a-z]+/i',
                                'message' => 'Solo se permiten letras en este campo.'
                        ),
                        'reglanombre-2' => array(
                                'rule' => 'notEmpty',
                                'message' => 'Ingrese la carrera o departamento del usuario.'
                        )
                ),
                'correo' => array(
                        'reglacorreo-1' => array(
                                'rule' => array('email', true),
                                'message' => 'Es necesario ingresar un email valido.'
                        ),
                        'reglacorreo-2' => array(
                                'rule' => 'notEmpty',
                                'message' => 'No dejar este campo en blanco.'
                        )
                )
        );
}
?>
<?php
class UsuariosController extends AppController {
	var $name = 'Usuarios';
	var $scaffold;
	
	function login(){
	}
	function logout(){
		//Al salir, se borra la caché de permisos
		$this->Session->delete('Permisos');
		$this->redirect($this->Auth->logout());
	}
}
?>
<?php
class UsuariosController extends AppController {
	var $name = 'Usuarios';
	var $scaffold;
	
	function login(){
	}
	function logout(){
		$this->Session->delete('Permisos');
		$this->redirect($this->Auth->logout());
	}
}
?>
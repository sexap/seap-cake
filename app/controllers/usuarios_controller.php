<?php
class UsuariosController extends AppController {
	var $name = 'Usuarios';
	var $scaffold;
	
	function login(){
	}
	function logout(){
		$this->redirect($this->Auth->logout());
	}
}
?>
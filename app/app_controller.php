<?php
/*
	ESTO ES UNA COPIA Y MODIFICACIÓN DE
	/cake/libs/controller/app_controller.php
	
	** MANEJAR CON CUIDADO **
*/
class AppController extends Controller {
	var $components = array('Auth', 'Session');
	
	function beforeFilter(){
		//Configura el modulo de autentificación
		$this->Auth->userModel = 'Usuario';
		$this->Auth->fields = array('username' => 'mat_eco','password' => 'contrasena');
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginRedirect = '/';
		$this->Auth->loginError = "Usuario o contraseña incorrecta";
		$this->Auth->authError = "Debes ingresar para poder continuar";
		
		//Autoriza todas las páginas estáticas
		$this->Auth->allow('display');
		
		//Si el usuario está baneado lo lleva a una página de advertencia (a menos que ya está ahí o vaya a salir)
		if($this->Auth->user('baneado') == 1 and $this->params['url']['url'] != 'pages/ban' and $this->params['url']['url'] != 'usuarios/logout'){
			$this->redirect('/pages/ban');
		}
	}
}

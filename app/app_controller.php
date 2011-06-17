<?php
/*
	ESTO ES UNA COPIA Y MODIFICACIÓN DE
	/cake/libs/controller/app_controller.php
	
	** MANEJAR CON CUIDADO **
*/
class AppController extends Controller {
	var $components = array('Auth', 'Session');
	
	function beforeFilter(){
		$this->Auth->userModel = 'Usuario';
		$this->Auth->fields = array('username' => 'mat_eco','password' => 'contrasena');
		
		//Autoriza todas las páginas estáticas
		$this->Auth->allow('display');
		
		//Verifica si el usuario está baneado
		if($this->Auth->user('baneado') == 1 and $this->params['url']['url'] != 'pages/ban'){
			$this->redirect('/pages/ban');
		}
	}
}

<?php
/*
	ESTO ES UNA COPIA Y MODIFICACIÓN DE
	/cake/libs/controller/app_controller.php
	
	** MANEJAR CON CUIDADO **
*/
class AppController extends Controller {
	var $components = array('Auth', 'Session');
	
	//Se ejecuta antes de realizar cualquier acción de cualquier controlador
	function beforeFilter(){
		//Configura el módulo Auth
		$this->Auth->userModel = 'Usuario';
		$this->Auth->fields = array('username' => 'mat_eco','password' => 'contrasena');
		$this->Auth->authorize = 'controller';
		
		//Otras configuraciones del módulo Auth
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
	
	//Es llamada por el módulo Auth para decidir si el usuario puede accesar o no al elemento solicitado
	function isAuthorized(){
		$controlador = low($this->name);
		$accion = low($this->action);
		
		//Si los permisos no están en caché los generamos
		if(!$this->Session->check('Permisos')){
			$permisos = array();
			//Todos necesitan poder salir
			$permisos['usuarios']['logout'] = 1;
			//Importar el modelo de usuario
			App::import('Model', 'Usuario');
			$usuarioActual = new Usuario;
			//Now bring in the current users full record along with groups (copy paste)
			$thisGroups = $usuarioActual->find(array('Usuario.id'=>$this->Auth->user('id')));
			$thisGroups = $thisGroups['Rol'];
			foreach($thisGroups as $thisGroup){
				$thisPermissions = $usuarioActual->Rol->find(array('Rol.id'=>$thisGroup['id']));
				$thisPermissions = $thisPermissions['Permiso'];
				foreach($thisPermissions as $thisPermission){
					$aux = explode('.', low($thisPermission['permiso']));
					$permisos[$aux[0]][$aux[1]] = 1;
				}
			}
			//Guardar los permisos en caché
			$this->Session->write('Permisos',$permisos);			
		}
		//Ya han sido generados
		else{
		$permisos = $this->Session->read('Permisos');
		}
		
		//Vemos si tiene permiso para la acción
		if(isset($permisos['*']['*'])) return true;
		if(isset($permisos[$controlador]['*'])) return true;
		if(isset($permisos['*'][$accion])) return true;
		if(isset($permisos[$controlador][$accion])) return true;
		//No tiene permisos
		$this->Session->setFlash('No tienes permisos suficientes');
		return false;
	}
	
}

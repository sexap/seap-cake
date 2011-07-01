<?php
/*
	ESTO ES UNA COPIA Y MODIFICACIÓN DE
	/cake/libs/controller/app_controller.php
	
	** MANEJAR CON CUIDADO **
*/
class AppController extends Controller {
	//Coponentes usados
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
		$this->Auth->loginError = 'Usuario o contraseña incorrecta';
		$this->Auth->authError = 'No tienes permisos suficientes para continuar';
		
		//Autoriza todas las páginas estáticas
		$this->Auth->allow('display');
		
		//Si el usuario está baneado lo lleva a una página de advertencia (a menos que ya está ahí o vaya a salir)
		if($this->Auth->user('baneado') == 1 and $this->params['url']['url'] != 'pages/ban' and $this->params['url']['url'] != 'usuarios/logout'){
			$this->redirect('/pages/ban');
			exit();
		}
	}
	
	//Es llamada por el módulo Auth para decidir si el usuario puede accesar o no al elemento solicitado
	//Devuelve true si el usuario es autorizado, false en caso contrario
	function isAuthorized(){
		$permiso= $this->__alcancePermiso($this->name, $this->action);
		if($permiso == '') return false;
		if($permiso == 'todo') return true;
		if($permiso == 'autor'){
			if(isset($this->params['pass'][0])) return ($this->_esAutor($this->Auth->user('id'), $this->params['pass'][0]));
			else return true;
			}
	}
	
	//Es llamada por isAuthorized. Es protegida
	//Devuelve true si el usuario $user_id es dueño del componente $id
	//Debe ser sobreescrita por los controladores que lo requieran
	function _esAutor($user_id, $id){
		return true;
	}
	
	//Es llamada por isAuthorized. Es privada
	//Devuelve una cadena que indica el máximo alcance que se tiene con la accion actualmente solicitada
	function __alcancePermiso($controlador, $accion){		
		//Obtiene datos
		$controlador = low($controlador);
		$accion = low($accion);
		
		//Si los permisos *no* están en caché, son generados
		if(!$this->Session->check('Permisos')){		
			//Importar el modelo de permisos
			App::import('Model', 'Permiso');
			$modeloPermiso = new Permiso;
			
			//Construir la consulta para ver los permisos del usuario
			$opciones['joins'] = array(
				array(
					'table' => 'permisos_roles',
					'alias' => 'PermisosRoles',
					'type' => 'inner',
					'conditions' => array('Permiso.id = PermisosRoles.permiso_id')
				),
				array(
					'table' => 'roles_usuarios',
					'alias' => 'RolesUsuarios',
					'type' => 'inner',
					'conditions' => array('PermisosRoles.rol_id = RolesUsuarios.rol_id')
				)
			);
			$opciones['conditions'] = array('RolesUsuarios.usuario_id' => $this->Auth->user('id'));
			$opciones['recursive'] = -1;
			$opciones['fields'] = array('DISTINCT permiso');
			$tabla = $modeloPermiso->find('all', $opciones);
			
			//Contruir la caché de permisos
			foreach($tabla as $renglon){
				$aux = explode('.', low($renglon['Permiso']['permiso']));
				if(count($aux) == 2) $permisos[$aux[0]][$aux[1]] = 'todo';
				else $permisos[$aux[0]][$aux[1]] = $aux[2];
			}
			//Todos necesitan poder salir
			$permisos['usuarios']['logout'] = 'todo';
			
			//Guardar los permisos en caché
			$this->Session->write('Permisos',$permisos);			
		}
		//Ya están en chache
		else{
			$permisos = $this->Session->read('Permisos');
		}
		
		//Ver el permiso máximo que tiene
		$permisoEfectivo = '';
		if(isset($permisos['*']['*'])) $permisoEfectivo = max($permisos['*']['*'], $permisoEfectivo);
		if(isset($permisos[$controlador]['*'])) $permisoEfectivo = max($permisos[$controlador]['*'], $permisoEfectivo);
		if(isset($permisos['*'][$accion])) $permisoEfectivo = max($permisos['*'][$accion], $permisoEfectivo);
		if(isset($permisos[$controlador][$accion])) $permisoEfectivo = max($permisos[$controlador][$accion], $permisoEfectivo);
		
		return $permisoEfectivo;
	}
	
}

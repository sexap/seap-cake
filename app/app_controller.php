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
		
		print_r($this->params['pass']); //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
		
		//Si el usuario está baneado lo lleva a una página de advertencia (a menos que ya está ahí o vaya a salir)
		if($this->Auth->user('baneado') == 1 and $this->params['url']['url'] != 'pages/ban' and $this->params['url']['url'] != 'usuarios/logout'){
			$this->redirect('/pages/ban');
			exit();
		}
	}
	
	//Es llamada por el módulo Auth para decidir si el usuario puede accesar o no al elemento solicitado
	function isAuthorized(){
		/*** Elementos configurables ***/
		//En caso de duda ¿dejar pasar?
		$respuestaDefault = true;
		//Controladores en los que no aplica autoría. Responde con respuestaDefault
		$sinAutor = array('permisos', 'roles', 'ueas');
	
		$controlador = low($this->name);
		$accion = low($this->action);
		
		//Si los permisos *no* están en caché son generados
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
		//Ya han sido generados
		else{
			$permisos = $this->Session->read('Permisos');
		}
		
		//Ver el permiso máximo que tiene
		$permisoEfectivo = '';
		if(isset($permisos['*']['*'])) $permisoEfectivo = max($permisos['*']['*'], $permisoEfectivo);
		if(isset($permisos[$controlador]['*'])) $permisoEfectivo = max($permisos[$controlador]['*'], $permisoEfectivo);
		if(isset($permisos['*'][$accion])) $permisoEfectivo = max($permisos['*'][$accion], $permisoEfectivo);
		if(isset($permisos[$controlador][$accion])) $permisoEfectivo = max($permisos[$controlador][$accion], $permisoEfectivo);
		
		print $permisoEfectivo; ////!!!!!!!!!!!!!!!!!!!!!!!!
		//No tiene permiso
		if($permisoEfectivo == '') return false;
		//Tiene permiso sobre todos los elementos
		if($permisoEfectivo == 'todo') return true;
		//Tiene permisos de autor
		if($permisoEfectivo == 'autor'){
			//Hay modelos que no tienen autor. Ignora lo de autor y responde respuestaDefault
			if(in_array($controlador, $sinAutor)) return $respuestaDefault;
			//Asumimos que el primer parametro es el id, si no hay id responde respuestaDefault
			if(isset($this->params['pass'][0])) $id = $this->params['pass'][0];
			else return $respuestaDefault;
			//Verificamos quien es el autor
		}
	}
	
}

<?php
class UsuariosController extends AppController {

	var $name = 'Usuarios';
	
	var $paginate = array(
		'limit' => 20,
		'fields' => array('id', 'nombre', 'mat_eco', 'baneado', 'razon')
	);
	
	function _esAutor($user_id, $id){
		return ($id == $user_id);
	}
	
	function login(){
		if(!empty($this->data)) {
			if($this->Auth->login()){
				if($this->Auth->user('razon') != ''){
					$this->Session->setFlash('Algún administrador o moderador te ha advertido de un mal comportamiento. Revísalo en tu perfil.');
				}
				$this->redirect($this->Auth->redirect());
			}
		}
	}
	
	function logout(){
		$this->Session->delete('Permisos');
		$this->redirect($this->Auth->logout());
	}

	function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
		$pendientes = $this->Usuario->Pendiente->find('list');
		$integranteDes = $this->Usuario->IntegranteDe->find('list');
		$responsableDes = $this->Usuario->ResponsableDe->find('list');
		$roles = $this->Usuario->Rol->find('list');
		$this->set(compact('pendientes', 'integranteDes', 'responsableDes', 'roles'));
	}
	
	function register(){
		if (!empty($this->data)) {
			$this->Usuario->create();
			$this->data['Usuario']['contrasena'] = $this->Auth->password($this->data['Usuario']['contrasena1']);
			if ($this->Usuario->save($this->data)) {
				$this->Auth->login($this->data);
				$this->Session->setFlash(__('Te has registrado exitosamente.', true));
				$this->redirect(array('action' => 'view', $this->Auth->user('id')));
			} else {
				$this->Session->setFlash(__('No se ha podido completar tu registro.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
		$pendientes = $this->Usuario->Pendiente->find('list');
		$integranteDes = $this->Usuario->IntegranteDe->find('list');
		$responsableDes = $this->Usuario->ResponsableDe->find('list');
		$roles = $this->Usuario->Rol->find('list');
		$this->set(compact('pendientes', 'integranteDes', 'responsableDes', 'roles'));
	}
	
	function ban($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Usuario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

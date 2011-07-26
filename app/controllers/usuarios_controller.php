<?php
class UsuariosController extends AppController {

	var $name = 'Usuarios';
	
	function _esAutor($user_id, $id){
		return ($id == $user_id);
	}
	
	function login(){
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
		$integranteDes = $this->Usuario->IntegranteDe->find('list');
		$responsableDes = $this->Usuario->ResponsableDe->find('list');
		$roles = $this->Usuario->Rol->find('list');
		$problemas = $this->Usuario->Problema->find('list');
		$this->set(compact('integranteDes', 'responsableDes', 'roles', 'problemas'));
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
		$integranteDes = $this->Usuario->IntegranteDe->find('list');
		$responsableDes = $this->Usuario->ResponsableDe->find('list');
		$roles = $this->Usuario->Rol->find('list');
		$problemas = $this->Usuario->Problema->find('list');
		$this->set(compact('integranteDes', 'responsableDes', 'roles', 'problemas'));
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

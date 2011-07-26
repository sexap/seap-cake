<?php
class RolesController extends AppController {

	var $name = 'Roles';

	function index() {
		$this->Rol->recursive = 0;
		$this->set('roles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid rol', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('rol', $this->Rol->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Rol->create();
			if ($this->Rol->save($this->data)) {
				$this->Session->setFlash(__('The rol has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rol could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Rol->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid rol', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Rol->save($this->data)) {
				$this->Session->setFlash(__('The rol has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rol could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rol->read(null, $id);
		}
		$usuarios = $this->Rol->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for rol', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Rol->delete($id)) {
			$this->Session->setFlash(__('Rol deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Rol was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

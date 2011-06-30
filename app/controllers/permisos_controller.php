<?php
class PermisosController extends AppController {

	var $name = 'Permisos';

	function index() {
		$this->Permiso->recursive = 0;
		$this->set('permisos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid permiso', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('permiso', $this->Permiso->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Permiso->create();
			if ($this->Permiso->save($this->data)) {
				$this->Session->setFlash(__('The permiso has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permiso could not be saved. Please, try again.', true));
			}
		}
		$roles = $this->Permiso->Rol->find('list');
		$this->set(compact('roles'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid permiso', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Permiso->save($this->data)) {
				$this->Session->setFlash(__('The permiso has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permiso could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Permiso->read(null, $id);
		}
		$roles = $this->Permiso->Rol->find('list');
		$this->set(compact('roles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for permiso', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Permiso->delete($id)) {
			$this->Session->setFlash(__('Permiso deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Permiso was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
class ProblemasController extends AppController {

	var $name = 'Problemas';
	
	function _esAutor($user_id, $id){
		$opciones['conditions'] = array('Problema.id' => $id);
		$opciones['fields'] = array('Problema.usuario_id');
		$opciones['recursive'] = -1;
		$resultado = $this->Problema->find('first', $opciones);
		return ($resultado['Problema']['usuario_id'] == $user_id);
	}
	
	function index() {
		$this->Problema->recursive = 0;
		$this->set('problemas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid problema', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('problema', $this->Problema->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Problema->create();
			if ($this->Problema->save($this->data)) {
				$this->Session->setFlash(__('The problema has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The problema could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Problema->Usuario->find('list');
		$ueas = $this->Problema->Uea->find('list');
		$actividades = $this->Problema->Actividad->find('list');
		$this->set(compact('usuarios', 'ueas', 'actividades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid problema', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Problema->save($this->data)) {
				$this->Session->setFlash(__('The problema has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The problema could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Problema->read(null, $id);
		}
		$usuarios = $this->Problema->Usuario->find('list');
		$ueas = $this->Problema->Uea->find('list');
		$actividades = $this->Problema->Actividad->find('list');
		$this->set(compact('usuarios', 'ueas', 'actividades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for problema', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Problema->delete($id)) {
			$this->Session->setFlash(__('Problema deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Problema was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

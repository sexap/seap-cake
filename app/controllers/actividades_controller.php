<?php
class ActividadesController extends AppController {

	var $name = 'Actividades';

	function index() {
		$this->Actividad->recursive = 0;
		$this->set('actividades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid actividad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('actividad', $this->Actividad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Actividad->create();
			if ($this->Actividad->save($this->data)) {
				$this->Session->setFlash(__('The actividad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividad could not be saved. Please, try again.', true));
			}
		}
		$grupos = $this->Actividad->Grupo->find('list');
		$problemas = $this->Actividad->Problema->find('list');
		$this->set(compact('grupos', 'problemas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid actividad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Actividad->save($this->data)) {
				$this->Session->setFlash(__('The actividad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actividad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Actividad->read(null, $id);
		}
		$grupos = $this->Actividad->Grupo->find('list');
		$problemas = $this->Actividad->Problema->find('list');
		$this->set(compact('grupos', 'problemas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for actividad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Actividad->delete($id)) {
			$this->Session->setFlash(__('Actividad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Actividad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

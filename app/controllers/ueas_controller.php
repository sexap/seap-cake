<?php
class UeasController extends AppController {

	var $name = 'Ueas';

	function index() {
		$this->Uea->recursive = 0;
		$this->set('ueas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid uea', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('uea', $this->Uea->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Uea->create();
			if ($this->Uea->save($this->data)) {
				$this->Session->setFlash(__('The uea has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uea could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid uea', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Uea->save($this->data)) {
				$this->Session->setFlash(__('The uea has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uea could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Uea->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for uea', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Uea->delete($id)) {
			$this->Session->setFlash(__('Uea deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Uea was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

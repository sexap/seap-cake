<?php
class EnviosController extends AppController {

	var $name = 'Envios';
	
	function _esAutor($user_id, $id){
		$opciones['conditions'] = array('Envio.id' => $id, 'Envio.usuario_id' => $user_id);
		$opciones['recursive'] = -1;
		$resultado = $this->Envio->find('count', $opciones);
		return ($resultado == 1);
	}

	function index() {
		$this->Envio->recursive = 0;
		$this->set('envios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid envio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('envio', $this->Envio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Envio->create();
			if ($this->Envio->save($this->data)) {
				$this->Session->setFlash(__('The envio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The envio could not be saved. Please, try again.', true));
			}
		}
		$problemas = $this->Envio->Problema->find('list');
		$usuarios = $this->Envio->Usuario->find('list');
		$actividades = $this->Envio->Actividad->find('list');
		$this->set(compact('problemas', 'usuarios', 'actividades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid envio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Envio->save($this->data)) {
				$this->Session->setFlash(__('The envio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The envio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Envio->read(null, $id);
		}
		$problemas = $this->Envio->Problema->find('list');
		$usuarios = $this->Envio->Usuario->find('list');
		$actividades = $this->Envio->Actividad->find('list');
		$this->set(compact('problemas', 'usuarios', 'actividades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for envio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Envio->delete($id)) {
			$this->Session->setFlash(__('Envio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Envio was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

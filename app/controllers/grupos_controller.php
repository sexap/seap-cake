<?php
class GruposController extends AppController {

	var $name = 'Grupos';
	
	function _esAutor($user_id, $id){
		$opciones['joins'] = array(
			array(
				'table' => 'grupos_usuarios_responsables',
				'alias' => 'Responsables',
				'type' => 'inner',
				'conditions' => array('Grupo.id = Responsables.grupo_id')
			)
		);
		$opciones['conditions'] = array('Grupo.id' => $id, 'Responsables.usuario_id' => $user_id);
		$opciones['recursive'] = -1;
		$resultado = $this->Grupo->find('count', $opciones);
		return ($resultado == 1);
	}

	function index() {
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid grupo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('grupo', $this->Grupo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('The grupo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.', true));
			}
		}
		$ueas = $this->Grupo->Uea->find('list');
		$integrantes = $this->Grupo->Integrante->find('list');
		$responsables = $this->Grupo->Responsable->find('list');
		$actividades = $this->Grupo->Actividad->find('list');
		$this->set(compact('ueas', 'integrantes', 'responsables', 'actividades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid grupo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('The grupo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Grupo->read(null, $id);
		}
		$ueas = $this->Grupo->Uea->find('list');
		$integrantes = $this->Grupo->Integrante->find('list');
		$responsables = $this->Grupo->Responsable->find('list');
		$actividades = $this->Grupo->Actividad->find('list');
		$this->set(compact('ueas', 'integrantes', 'responsables', 'actividades'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for grupo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash(__('Grupo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Grupo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

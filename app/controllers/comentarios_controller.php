<?php
class ComentariosController extends AppController {

	var $name = 'Comentarios';
	
	function _esAutor($user_id, $id){
		$opciones['conditions'] = array('Comentario.id' => $id);
		$opciones['fields'] = array('Comentario.usuario_id');
		$opciones['recursive'] = -1;
		$resultado = $this->Comentario->find('first', $opciones);
		return ($resultado['Comentario']['usuario_id'] == $user_id);
	}
	
	function index() {
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comentario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comentario', $this->Comentario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->data)) {
				$this->Session->setFlash(__('The comentario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$problemas = $this->Comentario->Problema->find('list');
		$this->set(compact('usuarios', 'problemas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comentario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comentario->save($this->data)) {
				$this->Session->setFlash(__('The comentario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comentario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comentario->read(null, $id);
		}
		$usuarios = $this->Comentario->Usuario->find('list');
		$problemas = $this->Comentario->Problema->find('list');
		$this->set(compact('usuarios', 'problemas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comentario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comentario->delete($id)) {
			$this->Session->setFlash(__('Comentario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comentario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}

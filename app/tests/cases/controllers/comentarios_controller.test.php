<?php
/* Comentarios Test cases generated on: 2011-06-30 15:39:42 : 1309448382*/
App::import('Controller', 'Comentarios');

class TestComentariosController extends ComentariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ComentariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.comentario', 'app.usuario', 'app.problema', 'app.uea', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.envio', 'app.actividades_grupo', 'app.actividades_problema', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

	function startTest() {
		$this->Comentarios =& new TestComentariosController();
		$this->Comentarios->constructClasses();
	}

	function endTest() {
		unset($this->Comentarios);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}

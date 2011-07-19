<?php
/* Ueas Test cases generated on: 2011-06-30 15:39:14 : 1309448354*/
App::import('Controller', 'Ueas');

class TestUeasController extends UeasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UeasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.uea', 'app.problema', 'app.usuario', 'app.envio', 'app.actividad', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividades_grupo', 'app.actividades_problema', 'app.comentario', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

	function startTest() {
		$this->Ueas =& new TestUeasController();
		$this->Ueas->constructClasses();
	}

	function endTest() {
		unset($this->Ueas);
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

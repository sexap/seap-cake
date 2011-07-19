<?php
/* Problemas Test cases generated on: 2011-06-30 15:38:55 : 1309448335*/
App::import('Controller', 'Problemas');

class TestProblemasController extends ProblemasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProblemasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.problema', 'app.usuario', 'app.envio', 'app.actividad', 'app.grupo', 'app.uea', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividades_grupo', 'app.actividades_problema', 'app.comentario', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

	function startTest() {
		$this->Problemas =& new TestProblemasController();
		$this->Problemas->constructClasses();
	}

	function endTest() {
		unset($this->Problemas);
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

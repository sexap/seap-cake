<?php
/* Problemas Test cases generated on: 2011-07-26 05:29:49 : 1311658189*/
App::import('Controller', 'Problemas');

class TestProblemasController extends ProblemasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProblemasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.problema', 'app.usuario', 'app.envio', 'app.actividad', 'app.actividades_problema', 'app.grupo', 'app.uea', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividades_grupo', 'app.comentario', 'app.problemas_usuario', 'app.rol', 'app.permiso', 'app.roles_usuario');

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

<?php
/* Roles Test cases generated on: 2011-07-26 04:41:37 : 1311655297*/
App::import('Controller', 'Roles');

class TestRolesController extends RolesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RolesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rol', 'app.permiso', 'app.usuario', 'app.problema', 'app.problemas_usuario', 'app.uea', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.envio', 'app.actividades_problema', 'app.actividades_grupo', 'app.comentario', 'app.roles_usuario');

	function startTest() {
		$this->Roles =& new TestRolesController();
		$this->Roles->constructClasses();
	}

	function endTest() {
		unset($this->Roles);
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

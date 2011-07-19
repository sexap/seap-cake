<?php
/* Roles Test cases generated on: 2011-06-30 15:39:06 : 1309448346*/
App::import('Controller', 'Roles');

class TestRolesController extends RolesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RolesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.rol', 'app.usuario', 'app.problema', 'app.uea', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.envio', 'app.actividades_grupo', 'app.actividades_problema', 'app.comentario', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

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

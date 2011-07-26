<?php
/* Permisos Test cases generated on: 2011-07-26 05:21:25 : 1311657685*/
App::import('Controller', 'Permisos');

class TestPermisosController extends PermisosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PermisosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.permiso', 'app.rol', 'app.usuario', 'app.problema', 'app.problemas_usuario', 'app.uea', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.envio', 'app.actividades_problema', 'app.actividades_grupo', 'app.comentario', 'app.roles_usuario');

	function startTest() {
		$this->Permisos =& new TestPermisosController();
		$this->Permisos->constructClasses();
	}

	function endTest() {
		unset($this->Permisos);
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

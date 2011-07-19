<?php
/* Permisos Test cases generated on: 2011-06-30 15:38:42 : 1309448322*/
App::import('Controller', 'Permisos');

class TestPermisosController extends PermisosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PermisosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.permiso', 'app.rol', 'app.usuario', 'app.problema', 'app.uea', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.envio', 'app.actividades_grupo', 'app.actividades_problema', 'app.comentario', 'app.roles_usuario', 'app.permisos_role');

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

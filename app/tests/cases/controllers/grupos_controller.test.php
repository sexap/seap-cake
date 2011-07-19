<?php
/* Grupos Test cases generated on: 2011-06-30 15:38:25 : 1309448305*/
App::import('Controller', 'Grupos');

class TestGruposController extends GruposController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GruposControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.grupo', 'app.uea', 'app.problema', 'app.usuario', 'app.envio', 'app.actividad', 'app.actividades_grupo', 'app.actividades_problema', 'app.comentario', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

	function startTest() {
		$this->Grupos =& new TestGruposController();
		$this->Grupos->constructClasses();
	}

	function endTest() {
		unset($this->Grupos);
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

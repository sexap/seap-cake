<?php
/* Envios Test cases generated on: 2011-06-30 15:42:41 : 1309448561*/
App::import('Controller', 'Envios');

class TestEnviosController extends EnviosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EnviosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.envio', 'app.problema', 'app.usuario', 'app.comentario', 'app.grupo', 'app.uea', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.actividades_grupo', 'app.actividades_problema', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

	function startTest() {
		$this->Envios =& new TestEnviosController();
		$this->Envios->constructClasses();
	}

	function endTest() {
		unset($this->Envios);
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

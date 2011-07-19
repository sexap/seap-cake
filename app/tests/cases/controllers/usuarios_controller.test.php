<?php
/* Usuarios Test cases generated on: 2011-06-30 15:39:24 : 1309448364*/
App::import('Controller', 'Usuarios');

class TestUsuariosController extends UsuariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsuariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario', 'app.problema', 'app.uea', 'app.grupo', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividad', 'app.envio', 'app.actividades_grupo', 'app.actividades_problema', 'app.comentario', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role');

	function startTest() {
		$this->Usuarios =& new TestUsuariosController();
		$this->Usuarios->constructClasses();
	}

	function endTest() {
		unset($this->Usuarios);
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

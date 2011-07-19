<?php
/* Actividades Test cases generated on: 2011-06-30 15:37:51 : 1309448271*/
App::import('Controller', 'Actividades');

class TestActividadesController extends ActividadesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ActividadesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.actividad', 'app.envio', 'app.problema', 'app.usuario', 'app.comentario', 'app.grupo', 'app.uea', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividades_grupo', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role', 'app.actividades_problema');

	function startTest() {
		$this->Actividades =& new TestActividadesController();
		$this->Actividades->constructClasses();
	}

	function endTest() {
		unset($this->Actividades);
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

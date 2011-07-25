<?php
/* Actividades Test cases generated on: 2011-06-30 15:37:51 : 1309448271*/
//App::import('Controller', 'ActividadesController');

//class TestActividadesController extends ActividadesController {
	//var $autoRender = false;

	//function redirect($url, $status = null, $exit = true) {
		//$this->redirectUrl = $url;
	//}
//}
//, 'app.envio', 'app.problema', 'app.usuario', 'app.comentario', 'app.grupo', 'app.uea', 'app.grupos_usuarios_miembro', 'app.grupos_usuarios_responsable', 'app.actividades_grupo', 'app.rol', 'app.roles_usuario', 'app.permiso', 'app.permisos_role', 'app.actividades_problema'
class ActividadesControllerTest extends CakeTestCase {
	//var $fixtures = array('app.actividades_controller');
	
	function startCase() {
		echo '<h1>Starting Test Case</h1>';
	}
	
	function endCase() {
		echo '<h1>Ending Test Case</h1>';
	}

	function startTest($method) {
		echo '<h3>Starting method ' . $method . '</h3>';
	}
	
	function endTest($method) {
		echo '<hr />';
	}

	function testAdd(){
		$result = $this->testAction('/actividades/add');
		debug($result); 
	}
	
	// function startTest() {
		// $this->Actividades =& new TestActividadesController();
		// $this->Actividades->constructClasses();
	// }

	// function endTest() {
		// unset($this->Actividades);
		// ClassRegistry::flush();
	// }

	// function testIndex() {

	// }

	// function testView() {

	// }

	// function testAdd() {

	// }

	// function testEdit() {

	// }

	// function testDelete() {

	// }

}

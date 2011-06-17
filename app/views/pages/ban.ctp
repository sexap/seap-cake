<h1>¡Has sido expulsado del sistema!</h1>
Motivo:<br/>
<?php echo $this->Session->read('Auth.Usuario.razon'); ?><br/>
<?php echo $html->link('Salir',array('controller' => 'usuarios', 'action' => 'logout'))?> <br/>
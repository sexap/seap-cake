<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('Usuario', array('action' => 'login'));
    echo $this->Form->input('mat_eco', array('label' => 'Matrícula o número económico'));
    echo $this->Form->input('contrasena', array('type' => 'password', 'label' => 'Contraseña'));
    echo $this->Form->end('Entrar');
?>
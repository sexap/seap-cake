<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('Usuario', array('action' => 'login'));
    echo $this->Form->input('mat_eco');
    echo $this->Form->input('contrasena');
    echo $this->Form->end('Entrar');
?>
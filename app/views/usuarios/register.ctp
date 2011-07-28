<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Registrar Nuevo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('mat_eco', array('label' => 'Matrícula o número económico'));
		echo $this->Form->input('correo', array('label' => 'Correo electrónico'));
		echo $this->Form->input('contrasena1', array('type' => 'password', 'label' => 'Contraseña'));
		echo $this->Form->input('contrasena2', array('type' => 'password', 'label' => 'Confirmar contraseña'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
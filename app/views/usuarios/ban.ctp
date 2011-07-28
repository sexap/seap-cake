<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Bloquear usuario'); ?></legend>
	<?php
		echo $this->Form->input('baneado', array('label' => 'Negar acceso al sistema'));
		echo $this->Form->input('razon', array('label' => 'Advertencia o razón del bloqueo'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
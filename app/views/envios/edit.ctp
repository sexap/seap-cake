<div class="envios form">
<?php echo $this->Form->create('Envio');?>
	<fieldset>
		<legend><?php __('Edit Envio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('problema_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('actividad_id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('fecha_envio');
		echo $this->Form->input('tiempo_ejecucion');
		echo $this->Form->input('memoria_usada');
		echo $this->Form->input('lenguaje');
		echo $this->Form->input('veredicto');
		echo $this->Form->input('puntaje');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Envio.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Envio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Envios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades', true), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
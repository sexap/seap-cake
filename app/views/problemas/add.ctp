<div class="problemas form">
<?php echo $this->Form->create('Problema');?>
	<fieldset>
		<legend><?php __('Add Problema'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('autor');
		echo $this->Form->input('enunciado');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('palabras_clave');
		echo $this->Form->input('dificultad');
		echo $this->Form->input('privado');
		echo $this->Form->input('uea_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('Actividad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Problemas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ueas', true), array('controller' => 'ueas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uea', true), array('controller' => 'ueas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios', true), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario', true), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades', true), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('mat_eco');
		echo $this->Form->input('contrasena');
		echo $this->Form->input('car_depto');
		echo $this->Form->input('imagen');
		echo $this->Form->input('firma');
		echo $this->Form->input('correo');
		echo $this->Form->input('telefono');
		echo $this->Form->input('twitter');
		echo $this->Form->input('facebook');
		echo $this->Form->input('baneado');
		echo $this->Form->input('razon');
		echo $this->Form->input('Pendiente');
		echo $this->Form->input('IntegranteDe');
		echo $this->Form->input('ResponsableDe');
		echo $this->Form->input('Rol');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios', true), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario', true), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades', true), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante De', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
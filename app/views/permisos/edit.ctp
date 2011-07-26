<div class="permisos form">
<?php echo $this->Form->create('Permiso');?>
	<fieldset>
		<legend><?php __('Edit Permiso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('permiso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Permiso.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Permiso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Permisos', true), array('action' => 'index'));?></li>
	</ul>
</div>
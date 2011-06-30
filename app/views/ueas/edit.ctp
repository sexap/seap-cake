<div class="ueas form">
<?php echo $this->Form->create('Uea');?>
	<fieldset>
		<legend><?php __('Edit Uea'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Uea.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Uea.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ueas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
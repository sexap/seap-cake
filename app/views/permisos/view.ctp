<div class="permisos view">
<h2><?php  __('Permiso');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $permiso['Permiso']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($permiso['Rol']['nombre'], array('controller' => 'roles', 'action' => 'view', $permiso['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Permiso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $permiso['Permiso']['permiso']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Permiso', true), array('action' => 'edit', $permiso['Permiso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Permiso', true), array('action' => 'delete', $permiso['Permiso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $permiso['Permiso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Permisos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>

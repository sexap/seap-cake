<div class="permisos view">
<h2><?php  __('Permiso');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $permiso['Permiso']['id']; ?>
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
<div class="related">
	<h3><?php __('Related Roles');?></h3>
	<?php if (!empty($permiso['Rol'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($permiso['Rol'] as $rol):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $rol['id'];?></td>
			<td><?php echo $rol['nombre'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'roles', 'action' => 'view', $rol['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'roles', 'action' => 'edit', $rol['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'roles', 'action' => 'delete', $rol['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rol['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rol', true), array('controller' => 'roles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

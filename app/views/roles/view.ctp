<div class="roles view">
<h2><?php  __('Rol');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rol['Rol']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rol['Rol']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rol', true), array('action' => 'edit', $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Rol', true), array('action' => 'delete', $rol['Rol']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rol['Rol']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Permisos', true), array('controller' => 'permisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso', true), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($rol['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Mat Eco'); ?></th>
		<th><?php __('Contrasena'); ?></th>
		<th><?php __('Car Depto'); ?></th>
		<th><?php __('Imagen'); ?></th>
		<th><?php __('Firma'); ?></th>
		<th><?php __('Correo'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Twitter'); ?></th>
		<th><?php __('Facebook'); ?></th>
		<th><?php __('Baneado'); ?></th>
		<th><?php __('Razon'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rol['Usuario'] as $usuario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['nombre'];?></td>
			<td><?php echo $usuario['mat_eco'];?></td>
			<td><?php echo $usuario['contrasena'];?></td>
			<td><?php echo $usuario['car_depto'];?></td>
			<td><?php echo $usuario['imagen'];?></td>
			<td><?php echo $usuario['firma'];?></td>
			<td><?php echo $usuario['correo'];?></td>
			<td><?php echo $usuario['telefono'];?></td>
			<td><?php echo $usuario['twitter'];?></td>
			<td><?php echo $usuario['facebook'];?></td>
			<td><?php echo $usuario['baneado'];?></td>
			<td><?php echo $usuario['razon'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Permisos');?></h3>
	<?php if (!empty($rol['Permiso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Permiso'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rol['Permiso'] as $permiso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $permiso['id'];?></td>
			<td><?php echo $permiso['permiso'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'permisos', 'action' => 'view', $permiso['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'permisos', 'action' => 'edit', $permiso['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'permisos', 'action' => 'delete', $permiso['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $permiso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Permiso', true), array('controller' => 'permisos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

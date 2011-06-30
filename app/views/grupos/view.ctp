<div class="grupos view">
<h2><?php  __('Grupo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupo['Grupo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupo['Grupo']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupo['Grupo']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Uea'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($grupo['Uea']['nombre'], array('controller' => 'ueas', 'action' => 'view', $grupo['Uea']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupo', true), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Grupo', true), array('action' => 'delete', $grupo['Grupo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ueas', true), array('controller' => 'ueas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uea', true), array('controller' => 'ueas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Integrante', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades', true), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($grupo['Integrante'])):?>
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
		foreach ($grupo['Integrante'] as $integrante):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $integrante['id'];?></td>
			<td><?php echo $integrante['nombre'];?></td>
			<td><?php echo $integrante['mat_eco'];?></td>
			<td><?php echo $integrante['contrasena'];?></td>
			<td><?php echo $integrante['car_depto'];?></td>
			<td><?php echo $integrante['imagen'];?></td>
			<td><?php echo $integrante['firma'];?></td>
			<td><?php echo $integrante['correo'];?></td>
			<td><?php echo $integrante['telefono'];?></td>
			<td><?php echo $integrante['twitter'];?></td>
			<td><?php echo $integrante['facebook'];?></td>
			<td><?php echo $integrante['baneado'];?></td>
			<td><?php echo $integrante['razon'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $integrante['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $integrante['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $integrante['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $integrante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Integrante', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($grupo['Responsable'])):?>
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
		foreach ($grupo['Responsable'] as $responsable):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $responsable['id'];?></td>
			<td><?php echo $responsable['nombre'];?></td>
			<td><?php echo $responsable['mat_eco'];?></td>
			<td><?php echo $responsable['contrasena'];?></td>
			<td><?php echo $responsable['car_depto'];?></td>
			<td><?php echo $responsable['imagen'];?></td>
			<td><?php echo $responsable['firma'];?></td>
			<td><?php echo $responsable['correo'];?></td>
			<td><?php echo $responsable['telefono'];?></td>
			<td><?php echo $responsable['twitter'];?></td>
			<td><?php echo $responsable['facebook'];?></td>
			<td><?php echo $responsable['baneado'];?></td>
			<td><?php echo $responsable['razon'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $responsable['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $responsable['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $responsable['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $responsable['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Responsable', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Actividades');?></h3>
	<?php if (!empty($grupo['Actividad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Tema'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Fin'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Actividad'] as $actividad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $actividad['id'];?></td>
			<td><?php echo $actividad['titulo'];?></td>
			<td><?php echo $actividad['tema'];?></td>
			<td><?php echo $actividad['descripcion'];?></td>
			<td><?php echo $actividad['inicio'];?></td>
			<td><?php echo $actividad['fin'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'actividades', 'action' => 'view', $actividad['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'actividades', 'action' => 'edit', $actividad['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'actividades', 'action' => 'delete', $actividad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $actividad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="grupos view">
<h2><?php  __($grupo['Grupo']['nombre']);?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
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
		<li><?php echo $this->Html->link(__('Editar Grupo', true), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Grupo', true), array('action' => 'delete', $grupo['Grupo']['id']), null, sprintf(__('Esta seguro que desea borrar # %s?', true), $grupo['Grupo']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<?php if (!empty($grupo['Integrante'])):?>
	<h3><?php __('Estudiantes del grupo');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Mat Eco'); ?></th>
		<th><?php __('Correo'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Twitter'); ?></th>
		<th><?php __('Facebook'); ?></th>
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
			<td><?php echo $this->Html->link(__($integrante['nombre'], true), array('controller' => 'usuarios', 'action' => 'view', $integrante['id']));?></td>
			<td><?php echo $integrante['mat_eco'];?></td>
			<td><?php echo $integrante['correo'];?></td>
			<td><?php echo $integrante['telefono'];?></td>
			<td><?php echo $integrante['twitter'];?></td>
			<td><?php echo $integrante['facebook'];?></td>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php __('Responsables del grupo');?></h3>
	<?php if (!empty($grupo['Responsable'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Mat Eco'); ?></th>
		<th><?php __('Correo'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Twitter'); ?></th>
		<th><?php __('Facebook'); ?></th>
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
			<td><?php echo $this->Html->link(__($responsable['nombre'], true), array('controller' => 'usuarios', 'action' => 'view', $responsable['id']));?></td>
			<td><?php echo $responsable['mat_eco'];?></td>
			<td><?php echo $responsable['correo'];?></td>
			<td><?php echo $responsable['telefono'];?></td>
			<td><?php echo $responsable['twitter'];?></td>
			<td><?php echo $responsable['facebook'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php __('Actividades');?></h3>
	<?php if (!empty($grupo['Actividad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Tema'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Fin'); ?></th>
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
			<td><?php echo $this->Html->link(__($actividad['titulo'], true), array('controller' => 'actividades', 'action' => 'view', $actividad['id'])); ?>
			<td><?php echo $actividad['tema'];?></td>
			<td><?php echo $actividad['descripcion'];?></td>
			<td><?php echo $actividad['inicio'];?></td>
			<td><?php echo $actividad['fin'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="actividades view">
<h2><?php  __($actividad['Actividad']['titulo']);?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<!-- <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $actividad['Actividad']['id']; ?>
			&nbsp;
		</dd> 
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($actividad['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $actividad['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $actividad['Actividad']['titulo']; ?>
			&nbsp;
		</dd> -->
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tema'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $actividad['Actividad']['tema']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $actividad['Actividad']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inicio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $actividad['Actividad']['inicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $actividad['Actividad']['fin']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Actividad', true), array('action' => 'edit', $actividad['Actividad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Actividad', true), array('action' => 'delete', $actividad['Actividad']['id']), null, sprintf(__('Esta seguro que desea borrar # %s?', true), $actividad['Actividad']['id'])); ?> </li>
	</ul>
</div>
<!-- 
<div class="related">
	<h3><?php __('Related Envios');?></h3>
	<?php if (!empty($actividad['Envio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Problema Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Actividad Id'); ?></th>
		<th><?php __('Codigo'); ?></th>
		<th><?php __('Fecha Envio'); ?></th>
		<th><?php __('Tiempo Ejecucion'); ?></th>
		<th><?php __('Memoria Usada'); ?></th>
		<th><?php __('Lenguaje'); ?></th>
		<th><?php __('Veredicto'); ?></th>
		<th><?php __('Puntaje'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($actividad['Envio'] as $envio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $envio['id'];?></td>
			<td><?php echo $envio['problema_id'];?></td>
			<td><?php echo $envio['usuario_id'];?></td>
			<td><?php echo $envio['actividad_id'];?></td>
			<td><?php echo $envio['codigo'];?></td>
			<td><?php echo $envio['fecha_envio'];?></td>
			<td><?php echo $envio['tiempo_ejecucion'];?></td>
			<td><?php echo $envio['memoria_usada'];?></td>
			<td><?php echo $envio['lenguaje'];?></td>
			<td><?php echo $envio['veredicto'];?></td>
			<td><?php echo $envio['puntaje'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'envios', 'action' => 'view', $envio['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'envios', 'action' => 'edit', $envio['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'envios', 'action' => 'delete', $envio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $envio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Envio', true), array('controller' => 'envios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Grupos');?></h3>
	<?php if (!empty($actividad['Grupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Uea Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($actividad['Grupo'] as $grupo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $grupo['id'];?></td>
			<td><?php echo $grupo['nombre'];?></td>
			<td><?php echo $grupo['descripcion'];?></td>
			<td><?php echo $grupo['uea_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
-->
<div class="related">
	<h3><?php __('Problemas');?></h3>
	<?php if (!empty($actividad['Problema'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('id');?></th>
		<th><?php __('titulo');?></th>
		<th><?php __('autor');?></th>
		<!-- <th><?php __('enunciado');?></th> -->
		<!-- <th><?php __('observaciones');?></th> -->
		<th><?php __('palabras_clave');?></th>
		<th><?php __('dificultad');?></th>
		<th><?php __('privado');?></th>
		<th><?php __('uea_id');?></th>
		<th><?php __('usuario_id');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($actividad['Problema'] as $problema):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $problema['id'];?></td>
			<td><?php echo $this->Html->link(__($problema['titulo'], true), array('controller' => 'problemas', 'action' => 'view', $problema['id'])); ?></td>
			<td><?php echo $problema['autor'];?></td>
			<!-- <td><?php echo $problema['enunciado'];?></td>
			<td><?php echo $problema['observaciones'];?></td> -->
			<td><?php echo $problema['palabras_clave'];?></td>
			<td><?php echo $problema['dificultad'];?></td>
			<td><?php echo $problema['privado'];?></td>
			<td><?php echo $problema['uea_id'];?></td>
			<td><?php echo $problema['usuario_id'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="ueas view">
<h2><?php  __($uea['Uea']['nombre']);?></h2>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Uea', true), array('action' => 'edit', $uea['Uea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Borrar Uea', true), array('action' => 'delete', $uea['Uea']['id']), null, sprintf(__('Seguro que desea borrar la UEA # %s?', true), $uea['Uea']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<?php if (!empty($uea['Problema'])):?>
	<h3><?php __('Problemas relacionados');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('id');?></th>
		<th><?php __('titulo');?></th>
		<th><?php __('autor');?></th>
		<!-- <th><?php __('enunciado');?></th> -->
		<!-- <th><?php __('observaciones');?></th> -->
		<th><?php __('palabras_clave');?></th>
		<th><?php __('dificultad');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uea['Problema'] as $problema):
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
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($uea['Grupo'])):?>
	<h3><?php __('Grupos');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($uea['Grupo'] as $grupo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			
			<td><?php echo $this->Html->link(__($grupo['nombre'], true), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?></td>
			<td><?php echo $grupo['descripcion'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

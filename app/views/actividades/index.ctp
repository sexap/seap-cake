<div class="actions_top">
	<ul>
		<li><?php echo $this->Html->link(__('Nueva actividad', true), array('action' => 'add'), array('class' => 'icon_add')); ?></li>
	</ul>
</div>
<div class="actividades index">
	<h2><?php __('Actividades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th> -->
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('tema');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('inicio');?></th>
			<th><?php echo $this->Paginator->sort('fin');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($actividades as $actividad):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!-- <td><?php echo $actividad['Actividad']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividad['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $actividad['Usuario']['id'])); ?>
		</td> -->
		<td><?php echo $this->Html->link(__($actividad['Actividad']['titulo'], true), array('action' => 'view', $actividad['Actividad']['id'])); ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['tema']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['inicio']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['fin']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $actividad['Actividad']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $actividad['Actividad']['id']), null, sprintf(__('Esta seguro de querer borrar # %s?', true), $actividad['Actividad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
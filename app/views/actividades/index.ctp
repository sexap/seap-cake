<div class="actividades index">
	<h2><?php __('Actividades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('tema');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('inicio');?></th>
			<th><?php echo $this->Paginator->sort('fin');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td><?php echo $actividad['Actividad']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividad['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $actividad['Usuario']['id'])); ?>
		</td>
		<td><?php echo $actividad['Actividad']['titulo']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['tema']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['inicio']; ?>&nbsp;</td>
		<td><?php echo $actividad['Actividad']['fin']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $actividad['Actividad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $actividad['Actividad']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $actividad['Actividad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $actividad['Actividad']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
	</ul>
</div>
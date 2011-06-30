<div class="envios index">
	<h2><?php __('Envios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('problema_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('actividad_id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('fecha_envio');?></th>
			<th><?php echo $this->Paginator->sort('tiempo_ejecucion');?></th>
			<th><?php echo $this->Paginator->sort('memoria_usada');?></th>
			<th><?php echo $this->Paginator->sort('lenguaje');?></th>
			<th><?php echo $this->Paginator->sort('veredicto');?></th>
			<th><?php echo $this->Paginator->sort('puntaje');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($envios as $envio):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $envio['Envio']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($envio['Problema']['titulo'], array('controller' => 'problemas', 'action' => 'view', $envio['Problema']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($envio['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $envio['Usuario']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($envio['Actividad']['titulo'], array('controller' => 'actividades', 'action' => 'view', $envio['Actividad']['id'])); ?>
		</td>
		<td><?php echo $envio['Envio']['codigo']; ?>&nbsp;</td>
		<td><?php echo $envio['Envio']['fecha_envio']; ?>&nbsp;</td>
		<td><?php echo $envio['Envio']['tiempo_ejecucion']; ?>&nbsp;</td>
		<td><?php echo $envio['Envio']['memoria_usada']; ?>&nbsp;</td>
		<td><?php echo $envio['Envio']['lenguaje']; ?>&nbsp;</td>
		<td><?php echo $envio['Envio']['veredicto']; ?>&nbsp;</td>
		<td><?php echo $envio['Envio']['puntaje']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $envio['Envio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $envio['Envio']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $envio['Envio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $envio['Envio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Envio', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades', true), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
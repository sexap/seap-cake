<div class="problemas index">
	<h2><?php __('Problemas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('autor');?></th>
			<th><?php echo $this->Paginator->sort('enunciado');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('palabras_clave');?></th>
			<th><?php echo $this->Paginator->sort('dificultad');?></th>
			<th><?php echo $this->Paginator->sort('privado');?></th>
			<th><?php echo $this->Paginator->sort('uea_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($problemas as $problema):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $problema['Problema']['id']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['titulo']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['autor']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['enunciado']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['observaciones']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['palabras_clave']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['dificultad']; ?>&nbsp;</td>
		<td><?php echo $problema['Problema']['privado']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($problema['Uea']['nombre'], array('controller' => 'ueas', 'action' => 'view', $problema['Uea']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($problema['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $problema['Usuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $problema['Problema']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $problema['Problema']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $problema['Problema']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $problema['Problema']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Problema', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ueas', true), array('controller' => 'ueas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uea', true), array('controller' => 'ueas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Envios', true), array('controller' => 'envios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Envio', true), array('controller' => 'envios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comentarios', true), array('controller' => 'comentarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comentario', true), array('controller' => 'comentarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades', true), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
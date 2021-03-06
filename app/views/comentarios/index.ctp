<div class="comentarios index">
	<h2><?php __('Comentarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('problema_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_envio');?></th>
			<th><?php echo $this->Paginator->sort('mensaje');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($comentarios as $comentario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $comentario['Comentario']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comentario['Problema']['titulo'], array('controller' => 'problemas', 'action' => 'view', $comentario['Problema']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comentario['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $comentario['Usuario']['id'])); ?>
		</td>
		<td><?php echo $comentario['Comentario']['fecha_envio']; ?>&nbsp;</td>
		<td><?php echo $comentario['Comentario']['mensaje']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $comentario['Comentario']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $comentario['Comentario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comentario['Comentario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comentario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
	</ul>
</div>
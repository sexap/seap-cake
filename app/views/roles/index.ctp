<div class="roles index">
	<h2><?php __('Roles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($roles as $rol):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $rol['Rol']['id']; ?>&nbsp;</td>
		<td><?php echo $rol['Rol']['nombre']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $rol['Rol']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $rol['Rol']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $rol['Rol']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rol['Rol']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rol', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Permisos', true), array('controller' => 'permisos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Permiso', true), array('controller' => 'permisos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
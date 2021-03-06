<div class="actions_top">
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo usuario', true), array('action' => 'add'), array('class' => 'icon_add')); ?></li>
	</ul>
</div>
<div class="usuarios index">
	<h2><?php __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('mat_eco');?></th>
			<th><?php echo $this->Paginator->sort('baneado');?></th>
			<th><?php echo $this->Paginator->sort('razon');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usuarios as $usuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link(__($usuario['Usuario']['nombre'], true), array('action' => 'view', $usuario['Usuario']['id'])); ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['mat_eco']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['baneado']; ?>&nbsp;</td>
		<td><?php echo $usuario['Usuario']['razon']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usuario['Usuario']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
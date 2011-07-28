<div class="actions_top">
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo grupo', true), array('action' => 'add'), array('class' => 'icon_add')); ?></li>
	</ul>
</div>
<div class="grupos index">
	<h2><?php __('Grupos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!-- <th><?php echo $this->Paginator->sort('id');?></th> -->
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('uea_id');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($grupos as $grupo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<!-- <td><?php echo $grupo['Grupo']['id']; ?>&nbsp;</td> -->
		<td><?php echo $this->Html->link(__($grupo['Grupo']['nombre'], true), array('action' => 'view', $grupo['Grupo']['id'])); ?>&nbsp;</td>
		<td>
			<?php echo $grupo['Uea']['nombre']; ?>
		</td>
		<td><?php echo $grupo['Grupo']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $grupo['Grupo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $grupo['Grupo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupo['Grupo']['id'])); ?>
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
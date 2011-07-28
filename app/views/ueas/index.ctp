<div class="actions_top">
	<ul>
		<li><?php echo $this->Html->link(__('Nueva UEA', true), array('action' => 'add'), array('class' => 'icon_add')); ?></li>
	</ul>
</div>
<div class="ueas index">
	<h2><?php __('Ueas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ueas as $uea):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $this->Html->link(__($uea['Uea']['nombre'], true), array('action' => 'view', $uea['Uea']['id'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $uea['Uea']['id'])); ?>
			<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $uea['Uea']['id']), null, sprintf(__('Desea realmente borrar # %s?', true), $uea['Uea']['id'])); ?>
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
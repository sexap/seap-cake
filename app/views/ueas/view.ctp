<div class="ueas view">
<h2><?php  __('Uea');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uea['Uea']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $uea['Uea']['nombre']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Uea', true), array('action' => 'edit', $uea['Uea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Uea', true), array('action' => 'delete', $uea['Uea']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $uea['Uea']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ueas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Uea', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('controller' => 'problemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Problemas');?></h3>
	<?php if (!empty($uea['Problema'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Autor'); ?></th>
		<th><?php __('Enunciado'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<th><?php __('Palabras Clave'); ?></th>
		<th><?php __('Dificultad'); ?></th>
		<th><?php __('Privado'); ?></th>
		<th><?php __('Uea Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
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
			<td><?php echo $problema['titulo'];?></td>
			<td><?php echo $problema['autor'];?></td>
			<td><?php echo $problema['enunciado'];?></td>
			<td><?php echo $problema['observaciones'];?></td>
			<td><?php echo $problema['palabras_clave'];?></td>
			<td><?php echo $problema['dificultad'];?></td>
			<td><?php echo $problema['privado'];?></td>
			<td><?php echo $problema['uea_id'];?></td>
			<td><?php echo $problema['usuario_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'problemas', 'action' => 'view', $problema['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'problemas', 'action' => 'edit', $problema['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'problemas', 'action' => 'delete', $problema['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $problema['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problema', true), array('controller' => 'problemas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Grupos');?></h3>
	<?php if (!empty($uea['Grupo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Uea Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
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
			<td><?php echo $grupo['id'];?></td>
			<td><?php echo $grupo['nombre'];?></td>
			<td><?php echo $grupo['descripcion'];?></td>
			<td><?php echo $grupo['uea_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="problemas view">
<h2><?php  __('Problema');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Autor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['autor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enunciado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['enunciado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observaciones'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['observaciones']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Palabras Clave'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['palabras_clave']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dificultad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['dificultad']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Privado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $problema['Problema']['privado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Uea'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($problema['Uea']['nombre'], array('controller' => 'ueas', 'action' => 'view', $problema['Uea']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($problema['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $problema['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Problema', true), array('action' => 'edit', $problema['Problema']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Problema', true), array('action' => 'delete', $problema['Problema']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $problema['Problema']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Problemas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problema', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Envios');?></h3>
	<?php if (!empty($problema['Envio'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Problema Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Actividad Id'); ?></th>
		<th><?php __('Codigo'); ?></th>
		<th><?php __('Fecha Envio'); ?></th>
		<th><?php __('Tiempo Ejecucion'); ?></th>
		<th><?php __('Memoria Usada'); ?></th>
		<th><?php __('Lenguaje'); ?></th>
		<th><?php __('Veredicto'); ?></th>
		<th><?php __('Puntaje'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($problema['Envio'] as $envio):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $envio['id'];?></td>
			<td><?php echo $envio['problema_id'];?></td>
			<td><?php echo $envio['usuario_id'];?></td>
			<td><?php echo $envio['actividad_id'];?></td>
			<td><?php echo $envio['codigo'];?></td>
			<td><?php echo $envio['fecha_envio'];?></td>
			<td><?php echo $envio['tiempo_ejecucion'];?></td>
			<td><?php echo $envio['memoria_usada'];?></td>
			<td><?php echo $envio['lenguaje'];?></td>
			<td><?php echo $envio['veredicto'];?></td>
			<td><?php echo $envio['puntaje'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'envios', 'action' => 'view', $envio['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'envios', 'action' => 'edit', $envio['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'envios', 'action' => 'delete', $envio['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $envio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Envio', true), array('controller' => 'envios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Comentarios');?></h3>
	<?php if (!empty($problema['Comentario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Problema Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Fecha Envio'); ?></th>
		<th><?php __('Mensaje'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($problema['Comentario'] as $comentario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $comentario['id'];?></td>
			<td><?php echo $comentario['problema_id'];?></td>
			<td><?php echo $comentario['usuario_id'];?></td>
			<td><?php echo $comentario['fecha_envio'];?></td>
			<td><?php echo $comentario['mensaje'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'comentarios', 'action' => 'view', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'comentarios', 'action' => 'edit', $comentario['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'comentarios', 'action' => 'delete', $comentario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $comentario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comentario', true), array('controller' => 'comentarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Actividades');?></h3>
	<?php if (!empty($problema['Actividad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Tema'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Inicio'); ?></th>
		<th><?php __('Fin'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($problema['Actividad'] as $actividad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $actividad['id'];?></td>
			<td><?php echo $actividad['usuario_id'];?></td>
			<td><?php echo $actividad['titulo'];?></td>
			<td><?php echo $actividad['tema'];?></td>
			<td><?php echo $actividad['descripcion'];?></td>
			<td><?php echo $actividad['inicio'];?></td>
			<td><?php echo $actividad['fin'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'actividades', 'action' => 'view', $actividad['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'actividades', 'action' => 'edit', $actividad['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'actividades', 'action' => 'delete', $actividad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $actividad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actividad', true), array('controller' => 'actividades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($problema['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Mat Eco'); ?></th>
		<th><?php __('Contrasena'); ?></th>
		<th><?php __('Car Depto'); ?></th>
		<th><?php __('Imagen'); ?></th>
		<th><?php __('Firma'); ?></th>
		<th><?php __('Correo'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Twitter'); ?></th>
		<th><?php __('Facebook'); ?></th>
		<th><?php __('Baneado'); ?></th>
		<th><?php __('Razon'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($problema['Usuario'] as $usuario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usuario['id'];?></td>
			<td><?php echo $usuario['nombre'];?></td>
			<td><?php echo $usuario['mat_eco'];?></td>
			<td><?php echo $usuario['contrasena'];?></td>
			<td><?php echo $usuario['car_depto'];?></td>
			<td><?php echo $usuario['imagen'];?></td>
			<td><?php echo $usuario['firma'];?></td>
			<td><?php echo $usuario['correo'];?></td>
			<td><?php echo $usuario['telefono'];?></td>
			<td><?php echo $usuario['twitter'];?></td>
			<td><?php echo $usuario['facebook'];?></td>
			<td><?php echo $usuario['baneado'];?></td>
			<td><?php echo $usuario['razon'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

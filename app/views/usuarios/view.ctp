<div class="actions_top">
	<ul>
		<li><?php echo $this->Html->link(__('Editar perfil', true), array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'icon_edit')); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar usuario', true), array('action' => 'delete', $usuario['Usuario']['id']), array('class' => 'icon_delete'), sprintf(__('Are you sure you want to delete # %s?', true), $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Bloquear usuario', true), array('action' => 'ban', $usuario['Usuario']['id']), array('class' => 'icon_lock')); ?> </li>
	</ul>
</div>
<div class="usuarios view">
<h2><?php  __('Usuario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mat Eco'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['mat_eco']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Car Depto'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['car_depto']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['imagen']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Firma'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['firma']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Correo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['correo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Telefono'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['telefono']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Twitter'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['twitter']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Facebook'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['facebook']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Baneado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['baneado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Razon'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['Usuario']['razon']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php __('Related Problemas');?></h3>
	<?php if (!empty($usuario['Problema'])):?>
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
		foreach ($usuario['Problema'] as $problema):
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
	<h3><?php __('Related Envios');?></h3>
	<?php if (!empty($usuario['Envio'])):?>
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
		foreach ($usuario['Envio'] as $envio):
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
	<?php if (!empty($usuario['Comentario'])):?>
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
		foreach ($usuario['Comentario'] as $comentario):
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
	<?php if (!empty($usuario['Actividad'])):?>
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
		foreach ($usuario['Actividad'] as $actividad):
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
	<h3><?php __('Related Problemas');?></h3>
	<?php if (!empty($usuario['Pendiente'])):?>
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
		foreach ($usuario['Pendiente'] as $pendiente):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pendiente['id'];?></td>
			<td><?php echo $pendiente['titulo'];?></td>
			<td><?php echo $pendiente['autor'];?></td>
			<td><?php echo $pendiente['enunciado'];?></td>
			<td><?php echo $pendiente['observaciones'];?></td>
			<td><?php echo $pendiente['palabras_clave'];?></td>
			<td><?php echo $pendiente['dificultad'];?></td>
			<td><?php echo $pendiente['privado'];?></td>
			<td><?php echo $pendiente['uea_id'];?></td>
			<td><?php echo $pendiente['usuario_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'problemas', 'action' => 'view', $pendiente['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'problemas', 'action' => 'edit', $pendiente['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'problemas', 'action' => 'delete', $pendiente['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pendiente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pendiente', true), array('controller' => 'problemas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Grupos');?></h3>
	<?php if (!empty($usuario['IntegranteDe'])):?>
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
		foreach ($usuario['IntegranteDe'] as $integranteDe):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $integranteDe['id'];?></td>
			<td><?php echo $integranteDe['nombre'];?></td>
			<td><?php echo $integranteDe['descripcion'];?></td>
			<td><?php echo $integranteDe['uea_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'grupos', 'action' => 'view', $integranteDe['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'grupos', 'action' => 'edit', $integranteDe['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'grupos', 'action' => 'delete', $integranteDe['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $integranteDe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Integrante De', true), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Grupos');?></h3>
	<?php if (!empty($usuario['ResponsableDe'])):?>
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
		foreach ($usuario['ResponsableDe'] as $responsableDe):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $responsableDe['id'];?></td>
			<td><?php echo $responsableDe['nombre'];?></td>
			<td><?php echo $responsableDe['descripcion'];?></td>
			<td><?php echo $responsableDe['uea_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'grupos', 'action' => 'view', $responsableDe['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'grupos', 'action' => 'edit', $responsableDe['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'grupos', 'action' => 'delete', $responsableDe['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $responsableDe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Responsable De', true), array('controller' => 'grupos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Roles');?></h3>
	<?php if (!empty($usuario['Rol'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Rol'] as $rol):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $rol['id'];?></td>
			<td><?php echo $rol['nombre'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'roles', 'action' => 'view', $rol['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'roles', 'action' => 'edit', $rol['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'roles', 'action' => 'delete', $rol['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rol['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rol', true), array('controller' => 'roles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

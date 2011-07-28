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
	<?php if (!empty($usuario['Problema'])):?>
		<h3><?php __('Mis Problemas');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Autor'); ?></th>
		<th><?php __('Enunciado'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<th><?php __('Palabras Clave'); ?></th>
		<th><?php __('Dificultad'); ?></th>
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
			<td><?php echo $this->Html->link(__($problema['titulo'], true), array('controller' => 'problemas', 'action' => 'view', $problema['id'])); ?></td>
			<td><?php echo $problema['autor'];?></td>
			<td><?php echo $problema['enunciado'];?></td>
			<td><?php echo $problema['observaciones'];?></td>
			<td><?php echo $problema['palabras_clave'];?></td>
			<td><?php echo $problema['dificultad'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($usuario['Envio'])):?>
		<h3><?php __('Mis Envios');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Problema Id'); ?></th>
		<th><?php __('Fecha Envio'); ?></th>
		<th><?php __('Veredicto'); ?></th>
		<th><?php __('Puntaje'); ?></th>
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
			<td><?php echo $this->Html->link(__($envio['id'], true), array('controller' => 'envios', 'action' => 'view', $envio['id'])); ?></td>
			<td><?php echo $envio['problema_id'];?></td>
			<td><?php echo $envio['usuario_id'];?></td>
			<td><?php echo $envio['fecha_envio'];?></td>
			<td><?php echo $envio['veredicto'];?></td>
			<td><?php echo $envio['puntaje'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($usuario['Pendiente'])):?>
	<h3><?php __('Problemas pendientes!');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Titulo'); ?></th>
		<th><?php __('Autor'); ?></th>
		<th><?php __('Enunciado'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<th><?php __('Palabras Clave'); ?></th>
		<th><?php __('Dificultad'); ?></th>
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
			<td><?php echo $this->Html->link(__($pendiente['titulo'], true), array('controller' => 'problemas', 'action' => 'view', $problema['id'])); ?></td>
			<td><?php echo $pendiente['autor'];?></td>
			<td><?php echo $pendiente['enunciado'];?></td>
			<td><?php echo $pendiente['observaciones'];?></td>
			<td><?php echo $pendiente['palabras_clave'];?></td>
			<td><?php echo $pendiente['dificultad'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($usuario['IntegranteDe'])):?>
	<h3><?php __('Mis Grupos como estudiante');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Uea Id'); ?></th>
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
			<td><?php echo $this->Html->link(__($integranteDe['nombre'], true), array('controller' => 'grupos', 'action' => 'view', $integranteDe['id'])); ?></td>
			<td><?php echo $integranteDe['descripcion'];?></td>
			<td><?php echo $integranteDe['uea_id'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($usuario['ResponsableDe'])):?>
	<h3><?php __('Grupos que soy responsable');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th><?php __('Uea Id'); ?></th>
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
			<tr<?php echo $class;?>>
				<td><?php echo $this->Html->link(__($responsableDe['nombre'], true), array('controller' => 'grupos', 'action' => 'view', $responsableDe['id'])); ?></td>
				<td><?php echo $responsableDe['descripcion'];?></td>
				<td><?php echo $responsableDe['uea_id'];?></td>
			</tr>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<?php if (!empty($usuario['Rol'])):?>
	<h3><?php __('Roles');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Nombre'); ?></th>
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
			<td><?php echo $this->Html->link(__($rol['nombre'], true), array('controller' => 'roles', 'action' => 'view', $rol['id'])); ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

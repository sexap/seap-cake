<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'SEAP ' ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('seap');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $html->image('logo_uam.gif', array('alt' => 'UAM')); ?>
		</div>
		<div id="menu">
			<ul>
				<li class="corner_left"><?php echo $html->link('Inicio', '/', array('class' => 'inicio'))?></li>
				<li><?php echo $html->link('Problemas',array('controller' => 'problemas'), array('class' => 'problemas'))?></li>
				<li><?php echo $html->link('Actividades',array('controller' => 'actividades'), array('class' => 'actividades'))?></li>
				<li><?php echo $html->link('Grupos',array('controller' => 'grupos'), array('class' => 'grupos'))?></li>
				<li><?php echo $html->link('Roles',array('controller' => 'roles'), array('class' => 'roles'))?></li>
				<li><?php echo $html->link('Usuarios',array('controller' => 'usuarios'), array('class' => 'usuarios'))?></li>
				<li class="corner_right"><?php echo $html->link('UEAs',array('controller' => 'ueas'), array('class' => 'ueas'))?></li>
				<?php if($this->Session->read('Auth.Usuario.nombre')){
					echo '<li class="corner_left">'.$this->Html->link('Mi perfil', array('controller' => 'usuarios', 'action' => 'view', $this->Session->read('Auth.Usuario.id')), array('class' => 'perfil')).'</li>';
					echo '<li class="corner_right">'.$this->Html->link('Salir', array('controller' => 'usuarios', 'action' => 'logout'), array('class' => 'logout')).'</li>';
				}
				else {
					echo '<li class="corner_left">'.$this->Html->link('Registrarse', array('controller' => 'usuarios', 'action' => 'register'), array('class' => 'registro')).'</li>';
					echo '<li class="corner_right">'.$this->Html->link('Entrar', array('controller' => 'usuarios', 'action' => 'login'), array('class' => 'login')).'</li>';
				}
				?>
			</ul>
		</div>
		<div style="clear:both"></div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			Sistema de Evaluación Automática de Programas <br/>
			Powered by 
			<?php echo $html->link('CakePHP', 'http://cakephp.org'); ?>, 
			<?php echo $html->link('Apache Server', 'http://httpd.apache.org/') ?>, 
			<?php echo $html->link('PHP', 'http://www.php.net/') ?>, 
			<?php echo $html->link('MySQL', 'http://www.mysql.com/') ?> & 
			<?php echo $html->link('Silk Icons', 'http://www.famfamfam.com/lab/icons/silk/'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
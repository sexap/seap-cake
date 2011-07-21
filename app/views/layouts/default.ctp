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
				<?php echo $html->link('Inicio', '/')?> | 
				<?php echo $html->link('Problemas',array('controller' => 'problemas'))?>  | 
				<?php echo $html->link('Actividades',array('controller' => 'actividades'))?>  | 
				<?php echo $html->link('Grupos',array('controller' => 'grupos'))?>  | 
				<?php echo $html->link('Roles',array('controller' => 'roles'))?>  | 
				<?php echo $html->link('Usuarios',array('controller' => 'usuarios'))?>  | 
				<?php echo $html->link('UEAs',array('controller' => 'ueas'))?> |
				<?php if($this->Session->read('Auth.Usuario.nombre')){
					echo 'Ver perfil: ' . $this->Session->read('Auth.Usuario.nombre') . ' | ';
					echo $this->Html->link('Salir', array('controller' => 'usuarios', 'action' => 'logout'));
				}
				else {
					echo $this->Html->link('Entrar', array('controller' => 'usuarios', 'action' => 'login'));
				}
				?>
			</ul>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			Sistema de Evaluación Automática de Programas <br/>
			<?php echo $this->Html->link('CakePHP: the rapid development php framework', 'http://cakephp.org'); ?> | 
			<?php echo $this->Html->link('Silk Icons', 'http://www.famfamfam.com/lab/icons/silk/'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
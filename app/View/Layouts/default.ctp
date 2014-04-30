<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Inmobiliaria San Cayetano');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		//echo $this->Html->css('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		<!--	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					 <a class="navbar-brand" href="#">S. A. San Cayetano</a>
					 <ul class="nav navbar-nav">
					 	<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Propietarios<b class="caret"></b></a>
				          	<ul class="dropdown-menu">
					           <li><?php echo $this->Html->link(__('New Owner'), array('controller' =>'owners','action' => 'add')); ?></li>
					           <li><?php echo $this->Html->link(__('List Owners'), array('controller' =>'owners','action' => 'index')); ?></li>
				          	</ul>
				        </li>
				        <li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inquilinos<b class="caret"></b></a>
				          	<ul class="dropdown-menu">
					           <li><?php echo $this->Html->link(__('New Renter'), array('controller' =>'renters','action' => 'add')); ?></li>
					           <li><?php echo $this->Html->link(__('List Renters'), array('controller' =>'renters','action' => 'index')); ?></li>
				          	</ul>
				        </li>
				         <li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Propiedades<b class="caret"></b></a>
				          	<ul class="dropdown-menu">
					           <li><?php echo $this->Html->link(__('New Estate'), array('controller' =>'estates','action' => 'add')); ?></li>
					           <li><?php echo $this->Html->link(__('List Estates'), array('controller' =>'estates','action' => 'index')); ?></li>
				          	</ul>
				        </li>
				        <li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Facturas<b class="caret"></b></a>
				          	<ul class="dropdown-menu">
					           <li><?php echo $this->Html->link(__('New Invoice'), array('controller' =>'invoices','action' => 'add')); ?></li>
					           <li><?php echo $this->Html->link(__('List Invoices'), array('controller' =>'invoices','action' => 'index')); ?></li>
				          	</ul>
				        </li>
					 </ul>
    			</div>
			</nav>
-->
			<h1>S. A. San Cayetano</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Sistema de Gestión San Cayetano
			<?php
			 // echo $this->Html->link(
				// 	$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				// 	'http://www.cakephp.org/',
				// 	array('target' => '_blank', 'escape' => false)
				// );
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php
			echo $this->Html->script(array(
			'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
			'//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js'
			));
			echo $this->fetch('script');
			?>
</body>
</html>

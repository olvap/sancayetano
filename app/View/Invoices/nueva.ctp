<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Add Invoice'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre del Inquilino'));
		echo $this->Form->input('address', array('label' => 'Domicilio del Inmueble'));
		echo $this->Form->input('ficha', array('label' => 'Número de Ficha'));
		echo $this->Form->input('subtotal');
		echo $this->Form->input('iva');
		echo $this->Form->input('total');
		// echo $this->Form->input('contract_start');
		// echo $this->Form->input('contract_end');
		echo $this->Form->input('cae', array('disabled'=>true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estates'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<?php echo $this->element('menu'); ?>
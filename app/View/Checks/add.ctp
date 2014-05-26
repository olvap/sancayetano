<div class="checks form">
<?php echo $this->Form->create('Check'); ?>
	<fieldset>
		<legend><?php echo __('Add Check'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('number');
		echo $this->Form->input('bank');
		echo $this->Form->input('amount');
		echo $this->Form->input('invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Checks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>

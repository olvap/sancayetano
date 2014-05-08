<div class="invoices form">
<?php echo $this->Form->create('Invoice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('owner');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('iva');
		echo $this->Form->input('total');
		echo $this->Form->input('contract_start');
		echo $this->Form->input('contract_end');
		echo $this->Form->input('cae');
		echo $this->Form->input('estate_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Invoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estates'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<?php echo $this->element('menu'); ?>
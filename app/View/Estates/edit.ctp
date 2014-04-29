<div class="estates form">
<?php echo $this->Form->create('Estate'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numeroficha');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('price');
		echo $this->Form->input('contract_start');
		echo $this->Form->input('contract_end');
		echo $this->Form->input('owner_id');
		echo $this->Form->input('renter_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estate.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Estate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Renters'), array('controller' => 'renters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renter'), array('controller' => 'renters', 'action' => 'add')); ?> </li>
	</ul>
</div>

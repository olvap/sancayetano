<div class="renters form">
<?php echo $this->Form->create('Renter'); ?>
	<fieldset>
		<legend><?php echo __('Add Renter'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Renters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>

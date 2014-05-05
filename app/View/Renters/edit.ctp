<div class="renters form">
<?php echo $this->Form->create('Renter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Renter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Renter.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Renter.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Renters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>

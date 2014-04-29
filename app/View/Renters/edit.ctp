<div class="renters form">
<?php echo $this->Form->create('Renter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Renter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('telephone');
		echo $this->Form->input('email');
		echo $this->Form->input('dni');
		echo $this->Form->input('cuit');
		echo $this->Form->input('responsableinscripto');
		echo $this->Form->input('exento');
		echo $this->Form->input('monotributista');
		echo $this->Form->input('consumidorfinal');
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

<div class="ivas form">
<?php echo $this->Form->create('Iva'); ?>
	<fieldset>
		<legend><?php echo __('Edit Iva'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Iva.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Iva.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ivas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>

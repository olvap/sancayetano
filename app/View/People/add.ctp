<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('telephone');
		echo $this->Form->input('email');
		echo $this->Form->input('cuit');
		echo $this->Form->input('iva_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

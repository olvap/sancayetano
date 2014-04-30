<div class="owners view">
<h2><?php echo __('Owner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsableinscripto'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['responsableinscripto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exento'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['exento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monotributista'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['monotributista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumidorfinal'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['consumidorfinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Owner'), array('action' => 'edit', $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Owner'), array('action' => 'delete', $owner['Owner']['id']), null, __('Are you sure you want to delete # %s?', $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
<?php echo $this->element('menu'); ?>

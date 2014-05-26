<div class="checks view">
<h2><?php echo __('Check'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($check['Check']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($check['Check']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($check['Check']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank'); ?></dt>
		<dd>
			<?php echo h($check['Check']['bank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($check['Check']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($check['Check']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($check['Check']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($check['Invoice']['name'], array('controller' => 'invoices', 'action' => 'view', $check['Invoice']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Check'), array('action' => 'edit', $check['Check']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Check'), array('action' => 'delete', $check['Check']['id']), null, __('Are you sure you want to delete # %s?', $check['Check']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Checks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>

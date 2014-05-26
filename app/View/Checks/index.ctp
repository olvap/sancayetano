<div class="checks index">
	<h2><?php echo __('Checks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('number'); ?></th>
			<th><?php echo $this->Paginator->sort('bank'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($checks as $check): ?>
	<tr>
		<td><?php echo h($check['Check']['id']); ?>&nbsp;</td>
		<td><?php echo h($check['Check']['name']); ?>&nbsp;</td>
		<td><?php echo h($check['Check']['number']); ?>&nbsp;</td>
		<td><?php echo h($check['Check']['bank']); ?>&nbsp;</td>
		<td><?php echo h($check['Check']['amount']); ?>&nbsp;</td>
		<td><?php echo h($check['Check']['created']); ?>&nbsp;</td>
		<td><?php echo h($check['Check']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($check['Invoice']['name'], array('controller' => 'invoices', 'action' => 'view', $check['Invoice']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $check['Check']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $check['Check']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $check['Check']['id']), null, __('Are you sure you want to delete # %s?', $check['Check']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Check'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>

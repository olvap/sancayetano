<div class="people index">
	<h2><?php echo __('People'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('cuit'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('iva_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($people as $person): ?>
	<tr>
		<td><?php echo h($person['Person']['id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['name']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['address']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['email']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['cuit']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['created']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($person['Iva']['name'], array('controller' => 'ivas', 'action' => 'view', $person['Iva']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ivas'), array('controller' => 'ivas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iva'), array('controller' => 'ivas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>

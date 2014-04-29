<div class="owners index">
	<h2><?php echo __('Owners'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('cuit'); ?></th>
			<th><?php echo $this->Paginator->sort('responsableinscripto'); ?></th>
			<th><?php echo $this->Paginator->sort('exento'); ?></th>
			<th><?php echo $this->Paginator->sort('monotributista'); ?></th>
			<th><?php echo $this->Paginator->sort('consumidorfinal'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($owners as $owner): ?>
	<tr>
		<td><?php echo h($owner['Owner']['id']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['name']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['address']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['email']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['cuit']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['responsableinscripto']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['exento']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['monotributista']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['consumidorfinal']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['created']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $owner['Owner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $owner['Owner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $owner['Owner']['id']), null, __('Are you sure you want to delete # %s?', $owner['Owner']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>

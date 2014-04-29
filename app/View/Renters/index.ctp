<div class="renters index">
	<h2><?php echo __('Renters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('cuit'); ?></th>
			<th><?php echo $this->Paginator->sort('responsableinscripto'); ?></th>
			<th><?php echo $this->Paginator->sort('exento'); ?></th>
			<th><?php echo $this->Paginator->sort('monotributista'); ?></th>
			<th><?php echo $this->Paginator->sort('consumidorfinal'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($renters as $renter): ?>
	<tr>
		<td><?php echo h($renter['Renter']['id']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['name']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['address']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['city']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['state']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['email']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['dni']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['cuit']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['responsableinscripto']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['exento']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['monotributista']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['consumidorfinal']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['created']); ?>&nbsp;</td>
		<td><?php echo h($renter['Renter']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $renter['Renter']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $renter['Renter']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $renter['Renter']['id']), null, __('Are you sure you want to delete # %s?', $renter['Renter']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Renter'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>

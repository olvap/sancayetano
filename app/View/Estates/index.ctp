<div class="estates index">
	<h2><?php echo __('Estates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('numeroficha'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('contract_start'); ?></th>
			<th><?php echo $this->Paginator->sort('contract_end'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('renter_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estates as $estate): ?>
	<tr>
		<td><?php echo h($estate['Estate']['ficha']); ?>&nbsp;</td>
		<td><?php echo h($estate['Estate']['name']); ?>&nbsp;</td>
		<td><?php echo h($estate['Estate']['address']); ?>&nbsp;</td>
		<td><?php echo h($estate['Estate']['price']); ?>&nbsp;</td>
		<td><?php echo h($estate['Estate']['contract_start']); ?>&nbsp;</td>
		<td><?php echo h($estate['Estate']['contract_end']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estate['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $estate['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estate['Renter']['name'], array('controller' => 'renters', 'action' => 'view', $estate['Renter']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('Facturar', array('controller'=>'invoices', 'action' => 'nueva', $estate['Estate']['id'])); ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estate['Estate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estate['Estate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estate['Estate']['id']), null, __('Are you sure you want to delete # %s?', $estate['Estate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Renters'), array('controller' => 'renters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renter'), array('controller' => 'renters', 'action' => 'add')); ?> </li>
	</ul>
</div>

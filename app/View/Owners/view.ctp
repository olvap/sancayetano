<div class="owners view">
<h2><?php echo __('Owner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['id']); ?>
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
		<dt><?php echo __('Person Id'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['person_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
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
</div>
<div class="related">
	<h3><?php echo __('Related Estates'); ?></h3>
	<?php if (!empty($owner['Estate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ficha'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Contract Start'); ?></th>
		<th><?php echo __('Contract End'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Renter Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($owner['Estate'] as $estate): ?>
		<tr>
			<td><?php echo $estate['id']; ?></td>
			<td><?php echo $estate['ficha']; ?></td>
			<td><?php echo $estate['name']; ?></td>
			<td><?php echo $estate['address']; ?></td>
			<td><?php echo $estate['price']; ?></td>
			<td><?php echo $estate['contract_start']; ?></td>
			<td><?php echo $estate['contract_end']; ?></td>
			<td><?php echo $estate['created']; ?></td>
			<td><?php echo $estate['modified']; ?></td>
			<td><?php echo $estate['owner_id']; ?></td>
			<td><?php echo $estate['renter_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estates', 'action' => 'view', $estate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estates', 'action' => 'edit', $estate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estates', 'action' => 'delete', $estate['id']), null, __('Are you sure you want to delete # %s?', $estate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="renters view">
<h2><?php echo __('Renter'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsableinscripto'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['responsableinscripto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exento'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['exento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monotributista'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['monotributista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumidorfinal'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['consumidorfinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($renter['Renter']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Renter'), array('action' => 'edit', $renter['Renter']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Renter'), array('action' => 'delete', $renter['Renter']['id']), null, __('Are you sure you want to delete # %s?', $renter['Renter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Renters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estates'); ?></h3>
	<?php if (!empty($renter['Estate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numeroficha'); ?></th>
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
	<?php foreach ($renter['Estate'] as $estate): ?>
		<tr>
			<td><?php echo $estate['id']; ?></td>
			<td><?php echo $estate['numeroficha']; ?></td>
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

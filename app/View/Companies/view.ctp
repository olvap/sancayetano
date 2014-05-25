<div class="companies view">
<h2><?php echo __('Company'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($company['Company']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($company['Company']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($company['Company']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($company['Company']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($company['Company']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company'), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estates'); ?></h3>
	<?php if (!empty($company['Estate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ficha'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Insurance'); ?></th>
		<th><?php echo __('Contract Start'); ?></th>
		<th><?php echo __('Contract End'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Renter Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($company['Estate'] as $estate): ?>
		<tr>
			<td><?php echo $estate['id']; ?></td>
			<td><?php echo $estate['ficha']; ?></td>
			<td><?php echo $estate['name']; ?></td>
			<td><?php echo $estate['address']; ?></td>
			<td><?php echo $estate['price']; ?></td>
			<td><?php echo $estate['insurance']; ?></td>
			<td><?php echo $estate['contract_start']; ?></td>
			<td><?php echo $estate['contract_end']; ?></td>
			<td><?php echo $estate['created']; ?></td>
			<td><?php echo $estate['modified']; ?></td>
			<td><?php echo $estate['company_id']; ?></td>
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

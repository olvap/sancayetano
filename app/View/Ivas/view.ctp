<div class="ivas view">
<h2><?php echo __('Iva'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($iva['Iva']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($iva['Iva']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($iva['Iva']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($iva['Iva']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Iva'), array('action' => 'edit', $iva['Iva']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Iva'), array('action' => 'delete', $iva['Iva']['id']), null, __('Are you sure you want to delete # %s?', $iva['Iva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ivas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iva'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<?php if (!empty($iva['Person'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Cuit'); ?></th>
		<th><?php echo __('Responsableinscripto'); ?></th>
		<th><?php echo __('Exento'); ?></th>
		<th><?php echo __('Monotributista'); ?></th>
		<th><?php echo __('Consumidorfinal'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Iva Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($iva['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['address']; ?></td>
			<td><?php echo $person['telephone']; ?></td>
			<td><?php echo $person['email']; ?></td>
			<td><?php echo $person['cuit']; ?></td>
			<td><?php echo $person['responsableinscripto']; ?></td>
			<td><?php echo $person['exento']; ?></td>
			<td><?php echo $person['monotributista']; ?></td>
			<td><?php echo $person['consumidorfinal']; ?></td>
			<td><?php echo $person['created']; ?></td>
			<td><?php echo $person['modified']; ?></td>
			<td><?php echo $person['iva_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), null, __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

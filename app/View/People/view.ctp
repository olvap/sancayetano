<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($person['Person']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsableinscripto'); ?></dt>
		<dd>
			<?php echo h($person['Person']['responsableinscripto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exento'); ?></dt>
		<dd>
			<?php echo h($person['Person']['exento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monotributista'); ?></dt>
		<dd>
			<?php echo h($person['Person']['monotributista']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumidorfinal'); ?></dt>
		<dd>
			<?php echo h($person['Person']['consumidorfinal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($person['Person']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iva'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Iva']['name'], array('controller' => 'ivas', 'action' => 'view', $person['Iva']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ivas'), array('controller' => 'ivas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iva'), array('controller' => 'ivas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Owners'); ?></h3>
	<?php if (!empty($person['Owner'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['Owner'] as $owner): ?>
		<tr>
			<td><?php echo $owner['id']; ?></td>
			<td><?php echo $owner['created']; ?></td>
			<td><?php echo $owner['modified']; ?></td>
			<td><?php echo $owner['person_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'owners', 'action' => 'view', $owner['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'owners', 'action' => 'edit', $owner['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'owners', 'action' => 'delete', $owner['id']), null, __('Are you sure you want to delete # %s?', $owner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

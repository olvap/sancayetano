<div class="renters view">
	<h2><?php echo __('Renter'); ?></h2>
	<dl class="dl-horizontal">
		<dt>Nombre</dt>
		<dd>
			<?php echo h($renter['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt>Dirección</dt>
		<dd>
			<?php echo h($renter['Person']['address']); ?>
			&nbsp;
		</dd>
		<dt>Teléfono</dt>
		<dd>
			<?php echo h($renter['Person']['telephone']); ?>
			&nbsp;
		</dd>
		<dt>Email</dt>
		<dd>
			<?php echo h($renter['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt>CUIT</dt>
		<dd>
			<?php echo h($renter['Person']['cuit']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Estates'); ?></h3>
	<?php if (!empty($renter['Estate'])): ?>
		<table cellpadding = "0" cellspacing = "0" class="table">
			<tr>
				<th><?php echo __('Ficha'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Address'); ?></th>
				<th><?php echo __('Price'); ?></th>
				<th><?php echo __('Contract Start'); ?></th>
				<th><?php echo __('Contract End'); ?></th>
				<th><?php echo __('Owner'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($renter['Estate'] as $estate): ?>
				<tr>
					<td><?php echo $estate['ficha']; ?></td>
					<td><?php echo $estate['name']; ?></td>
					<td><?php echo $estate['address']; ?></td>
					<td><?php echo $this->Number->currency($estate['price'], 'ARG'); ?></td>
					<td><?php echo $this->Time->format($estate['contract_start'], '%d-%m-%Y'); ?></td>
					<td><?php echo $this->Time->format($estate['contract_end'], '%d-%m-%Y'); ?></td>
					<td>
						<?php echo $this->Html->link($estate['owner_name'], array('controller' => 'owners', 'action' => 'view', $estate['owner_id'])); ?>
					</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'estates', 'action' => 'view', $estate['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'estates', 'action' => 'edit', $estate['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estates', 'action' => 'delete', $estate['id']), null, __('Are you sure you want to delete # %s?', $estate['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>

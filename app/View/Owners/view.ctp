<?php //debug($owner) ?>
<div class="owners view">
	<h2><?php echo __('Owner'); ?></h2>
	<dl class="dl-horizontal">
		<dt>Nombre</dt>
		<dd>
			<?php echo h($owner['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt>Dirección</dt>
		<dd>
			<?php echo h($owner['Person']['address']); ?>
			&nbsp;
		</dd>
		<dt>Teléfono</dt>
		<dd>
			<?php echo h($owner['Person']['telephone']); ?>
			&nbsp;
		</dd>
		<dt>Email</dt>
		<dd>
			<?php echo h($owner['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt>CUIT</dt>
		<dd>
			<?php echo h($owner['Person']['cuit']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Estates'); ?></h3>
	<?php if (!empty($owner['Estate'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table">
	<tr>
		<th><?php echo __('Ficha'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Contract Start'); ?></th>
		<th><?php echo __('Contract End'); ?></th>
		<th><?php echo __('Renter'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($owner['Estate'] as $estate): ?>
		<tr>
			<td><?php echo $estate['ficha']; ?></td>
			<td><?php echo $estate['name']; ?></td>
			<td><?php echo $estate['address']; ?></td>
			<td class="text-center">
				<?php
				echo $this->Number->currency($estate['price'], 'ARG');
				?>&nbsp;
			</td>
			<td class="text-center">
				<?php 
				echo $this->Time->format($estate['contract_start'], '%d-%m-%Y'); 
				?>&nbsp;
			</td>
			<td class="text-center">
				<?php 
				echo $this->Time->format($estate['contract_end'], '%d-%m-%Y'); 
				?>&nbsp;
			</td>
			<td>
				<?php echo $this->Html->link($estate['renter_name'], array('controller' => 'renters', 'action' => 'view', $estate['renter_id'])); ?>
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

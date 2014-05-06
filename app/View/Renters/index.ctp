<div class="row">
	<div class="col-sm-12">
		<h1><?php echo __('Renters'); ?></h1>
		<table cellpadding="0" cellspacing="0" class="table">
			<tr>
				<th><?php echo $this->Paginator->sort('Person.name', 'Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('Person.address', 'Dirección'); ?></th>
				<th><?php echo $this->Paginator->sort('Person.telephone', 'Teléfono'); ?></th>
				<th><?php echo $this->Paginator->sort('Person.email', 'Email'); ?></th>
				<th><?php echo $this->Paginator->sort('Person.cuit', 'CUIT'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($renters as $renter): ?>
				<tr>
					<td><?php echo h($renter['Person']['name']); ?>&nbsp;</td>
					<td><?php echo h($renter['Person']['address']); ?>&nbsp;</td>
					<td><?php echo h($renter['Person']['telephone']); ?>&nbsp;</td>
					<td><?php echo h($renter['Person']['email']); ?>&nbsp;</td>
					<td><?php echo h($renter['Person']['cuit']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $renter['Renter']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $renter['Renter']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $renter['Renter']['id']), null, __('Are you sure you want to delete # %s?', $renter['Renter']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		
		<?php echo $this->element('paginator') ?>
	</div>
</div>
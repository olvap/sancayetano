<div class="row">
	<div class="col-sm-12">
		<h1><?php echo __('Owners'); ?></h1>
		<table cellpadding="0" cellspacing="0" class="table">
			<tr>
					<th><?php echo $this->Paginator->sort('Person.name', 'Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('Person.address', 'Dirección'); ?></th>
					<th><?php echo $this->Paginator->sort('Person.telephone', 'Teléfono'); ?></th>
					<th><?php echo $this->Paginator->sort('Person.email', 'Email'); ?></th>
					<th><?php echo $this->Paginator->sort('Person.cuit', 'CUIT'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($owners as $owner): ?>
				<tr>
					<td><?php echo h($owner['Person']['name']); ?>&nbsp;</td>
					<td><?php echo h($owner['Person']['address']); ?>&nbsp;</td>
					<td><?php echo h($owner['Person']['telephone']); ?>&nbsp;</td>
					<td><?php echo h($owner['Person']['email']); ?>&nbsp;</td>
					<td><?php echo h($owner['Person']['cuit']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $owner['Owner']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $owner['Owner']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $owner['Owner']['id']), null, __('Are you sure you want to delete # %s?', $owner['Owner']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		
		<?php echo $this->element('paginator') ?>
	</div>
</div>

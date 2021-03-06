<div class="estates index">
	<h2><?php echo __('Estates'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
		<tr>
				<th><?php echo $this->Paginator->sort('ficha'); ?></th>
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
				<td class="text-center"><?php echo h($estate['Estate']['ficha']); ?>&nbsp;</td>
				<td><?php echo h($estate['Estate']['name']); ?>&nbsp;</td>
				<td><?php echo h($estate['Estate']['address']); ?>&nbsp;</td>
				<td class="text-center">
					<?php
					echo $this->Number->currency($estate['Estate']['price'], 'ARG');
					?>&nbsp;
				</td>
				<td class="text-center">
					<?php 
					echo $this->Time->format($estate['Estate']['contract_start'], '%d-%m-%Y'); 
					?>&nbsp;
				</td>
				<td class="text-center">
					<?php 
					echo $this->Time->format($estate['Estate']['contract_end'], '%d-%m-%Y'); 
					?>&nbsp;
				</td>
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
	
	<?php echo $this->element('paginator'); ?>
	
</div>
<?php //echo $this->element('menu'); ?>

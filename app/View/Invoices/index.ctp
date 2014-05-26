<div class="invoices index">
	<h2><?php echo __('Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
		<tr>
				<th><?php echo $this->Paginator->sort('created', 'Fecha'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('address'); ?></th>
				<th><?php echo $this->Paginator->sort('subtotal'); ?></th>
				<th><?php echo $this->Paginator->sort('iva'); ?></th>
				<th><?php echo $this->Paginator->sort('total'); ?></th>
				<th><?php echo $this->Paginator->sort('estate_id'); ?></th>
				<th class="actions text-center"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($invoices as $invoice): ?>
			<tr>
				<td class="text-center">
					<?php 
					echo $this->Time->format($invoice['Invoice']['created'], '%d-%m-%Y'); 
					?>&nbsp;
				</td>
				<td><?php echo h($invoice['Invoice']['name']); ?>&nbsp;</td>
				<td><?php echo h($invoice['Invoice']['address']); ?>&nbsp;</td>
				<td class="text-center">
					<?php
					echo $this->Number->currency($invoice['Invoice']['subtotal'], 'ARG');
					?>&nbsp;
				</td>
				<td class="text-center">
					<?php
					echo $this->Number->currency($invoice['Invoice']['iva'], 'ARG');
					?>&nbsp;
				</td>
				<td class="text-center">
					<?php
					echo $this->Number->currency($invoice['Invoice']['total'], 'ARG');
					?>&nbsp;
				</td>
				<td>
					<?php echo $this->Html->link($invoice['Estate']['name'], array('controller' => 'estates', 'action' => 'view', $invoice['Estate']['id'])); ?>
				</td>
				<td class="actions text-center">
					<?php //echo $this->Html->link(__('View'), array('action' => 'view', $invoice['Invoice']['id'])); ?>
					<?php echo $this->Html->link('Imprimir', array('action' => 'printPDF', $invoice['Invoice']['id']), array('target'=>'_blank')); ?>
					<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
					<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	
	<?php echo $this->element('paginator'); ?>

</div>

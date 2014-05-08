<div class="estates view">
<h2><?php echo __('Estate'); ?></h2>
	<dl class="dl-horizontal">
			<dt><?php echo __('ficha'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['ficha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo $this->Number->currency($estate['Estate']['price'], 'ARG'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Start'); ?></dt>
		<dd>
			<?php echo $this->Time->format($estate['Estate']['contract_start'], '%d-%m-%Y'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract End'); ?></dt>
		<dd>
			<?php echo $this->Time->format($estate['Estate']['contract_end'], '%d-%m-%Y'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estate['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $estate['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Renter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estate['Renter']['name'], array('controller' => 'renters', 'action' => 'view', $estate['Renter']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

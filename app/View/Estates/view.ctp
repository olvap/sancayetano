<div class="estates view">
<h2><?php echo __('Estate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numeroficha'); ?></dt>
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
			<?php echo h($estate['Estate']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract Start'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['contract_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contract End'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['contract_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($estate['Estate']['modified']); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estate'), array('action' => 'edit', $estate['Estate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estate'), array('action' => 'delete', $estate['Estate']['id']), null, __('Are you sure you want to delete # %s?', $estate['Estate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Renters'), array('controller' => 'renters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renter'), array('controller' => 'renters', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="actions">
	<h3>Menu</h3>
	<ul>
		<li>Propietario</li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		
		<li>Inquilino</li>
		<li><?php echo $this->Html->link(__('List Renters'), array('controller' => 'renters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Renter'), array('controller' => 'renters', 'action' => 'add')); ?> </li>
		
		<li>Propiedades</li>
		<li><?php echo $this->Html->link(__('List Estates'), array('controller' => 'estates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estate'), array('controller' => 'estates', 'action' => 'add')); ?> </li>
		
		
		<li>Facturas</li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
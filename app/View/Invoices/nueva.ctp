<?php 
echo $this->Html->script(array('angular/1.2.16/angular.min'
	, 'angular/1.2.16/angular-resource.min'
	, 'app'
	, 'filters'
	, 'vendors/keypress'
	, 'models'
	, 'controllers/invoices'
	)
);

?>

<div class="row" data-ng-app="SancayetanoApp">
	<div class="col-sm-12" data-ng-controller="InvoicesController" data-ng-init='invoice=<?php echo json_encode($this->request->data['Invoice'], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>'>
		<?php echo $this->Form->create('Invoice', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<fieldset>
				<legend><?php echo __('Add Invoice'); ?></legend>
				<?php
					echo $this->Form->input('name'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Nombre del Inquilino')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('address'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Domicilio del Inmueble')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('ficha'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Número de Ficha')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					
					echo $this->Form->input('subtotal', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularIVA()'
							, 'data-ng-model' => 'invoice.subtotal'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Subtotal')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('iva', array('class'=>'form-control'
							, 'data-ng-model' => 'invoice.iva'
							, 'data-ng-change' => 'calcularTotal()'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'IVA')
							, 'model' => 'invoice.iva'
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

					echo $this->Form->input('total', array('class'=>'form-control'
							, 'data-ng-model' => 'invoice.total'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total')
							, 'model' => 'invoice.total'
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

				?>
			</fieldset>

			<?php echo $this->Form->input(__('Submit'), array('class'=>'btn btn-primary'
					, 'div'=>'form-group'
					, 'label' => false
					, 'between' => '<div class="col-sm-8 col-sm-offset-2">'
					, 'after' => '</div>'
					, 'type' => 'submit')
				);
			?>

		<?php echo $this->Form->end(); ?>
	</div>
</div>

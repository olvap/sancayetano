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
					# Tipo Factura
					echo $this->Form->input('type'
						, array('class'=>'form-control'
							, 'disabled'=> true
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Tipo Factura')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>'
						)
					);
					echo $this->Form->input('ficha'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Número de Ficha')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('name'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Nombre del Inquilino')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('cuit'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'CUIT del Inquilino')
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
					
					echo $this->Form->input('price', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularIVA()'
							, 'data-ng-model' => 'invoice.price'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total Alquiler')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('insurance', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularIVA()'
							, 'data-ng-model' => 'invoice.insurance'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total Seguro')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('iva', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularTotal()'
							, 'data-ng-model' => 'invoice.iva'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'IVA')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

					echo $this->Form->input('subtotal', array('class'=>'form-control'
							, 'data-ng-model' => 'invoice.subtotal'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total Alq. y Seguro')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					
					# API
					echo $this->Form->input('api', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularTotal()'
							, 'data-ng-model' => 'invoice.api'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Imp. Provincial')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					
					# TGI
					echo $this->Form->input('tgi', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularTotal()'
							, 'data-ng-model' => 'invoice.tgi'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Imp. Municipal')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

					# Agua
					echo $this->Form->input('agua', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularTotal()'
							, 'data-ng-model' => 'invoice.agua'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Imp. Aguas Pciales.')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

					# Sellado
					echo $this->Form->input('stamped', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularTotal()'
							, 'data-ng-model' => 'invoice.stamped'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Sellado')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

					# Total General
					echo $this->Form->input('total', array('class'=>'form-control'
							, 'data-ng-model' => 'invoice.total'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total General')
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

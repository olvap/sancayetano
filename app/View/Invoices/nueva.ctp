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
	<div class="col-sm-12" data-ng-controller="InvoicesController" data-ng-init='invoice=<?php echo json_encode($this->request->data['Invoice']) ?>'>
		<?php echo $this->Form->create('Invoice', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<fieldset>
				<legend><?php echo __('Add Invoice'); ?></legend>
				<?php
					# Empresa
					echo $this->Form->input('Company.name'
						, array('class'=>'form-control'
							, 'disabled'=> true
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Empresa')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>'
						)
					);

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
					echo $this->Form->input('Estate.renter_iva'
						, array('class'=>'form-control'
							, 'disabled'=> true
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Condición IVA')
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

					// echo $this->Form->label('address', 'Domicilio del Inmueble', array('class' => 'col-sm-2 control-label'));
					echo $this->Form->input('address'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Domicilio del Inmueble')
							// , 'label' => false
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>'
							)
					);
					
					# Precio Cuota
					echo "<div class='form-group'>";
						echo $this->Form->label('price', 'Total Alquiler', array('class' => 'col-sm-2 control-label'));
						echo $this->Form->input('price', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularIVA()'
								, 'data-ng-model' => 'invoice.price'
								// , 'div'=>'form-group col-sm-4'
								, 'div'=>'col-sm-4'
								// , 'label' => array('class' => 'col-sm-4 control-label', 'text'=>'Total Alquiler')
								, 'label' => false
								// , 'between' => '<div class="col-sm-8">'
								// , 'after' => '</div>'
								)
						);

						# Observaciones Precio Cuota de Alquiler
						echo $this->Form->input('observation_price', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularIVA()'
								, 'data-ng-model' => 'invoice.observation_price'
								, 'div'=>'col-sm-4'
								// , 'div'=>'col-sm-6'
								// , 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Observaciones')
								, 'label' => false
								, 'placeholder' => 'Observaciones Alquiler'
								// , 'between' => '<div class="col-sm-8">'
								// , 'after' => '</div>'
								)
						);
					echo "</div>";

					# Gastos Administrativos
					echo $this->Form->input('gastos_administrativos', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularIVA()'
							, 'data-ng-model' => 'invoice.gastos_administrativos'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Gastos Administrativos')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);

					# IVA
					echo $this->Form->input('iva', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularTotal()'
							, 'data-ng-model' => 'invoice.iva'
							, 'disabled'=> true
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'IVA')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('insurance', array('class'=>'form-control'
							, 'data-ng-change' => 'calcularSubtotal()'
							, 'data-ng-model' => 'invoice.insurance'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total Seguro')
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
					// echo $this->Form->input('api', array('class'=>'form-control'
					// 		, 'data-ng-change' => 'calcularTotal()'
					// 		, 'data-ng-model' => 'invoice.api'
					// 		, 'div'=>'form-group'
					// 		, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Imp. Provincial')
					// 		, 'between' => '<div class="col-sm-8">'
					// 		, 'after' => '</div>')
					// );

					echo "<div class='form-group'>";
						echo $this->Form->label('api', 'Imp. Provincial', array('class' => 'col-sm-2 control-label'));
						echo $this->Form->input('api', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularTotal()'
								, 'data-ng-model' => 'invoice.api'
								, 'div'=>'col-sm-4'
								, 'label' => false
								)
						);

						# Observaciones Precio Cuota de Alquiler
						echo $this->Form->input('observation_api', array('class'=>'form-control'
								, 'data-ng-model' => 'invoice.observation_api'
								, 'div'=>'col-sm-4'
								, 'label' => false
								, 'placeholder' => 'Observaciones Imp. Provincial'
								)
						);
					echo "</div>";
					
					# TGI
					// echo $this->Form->input('tgi', array('class'=>'form-control'
					// 		, 'data-ng-change' => 'calcularTotal()'
					// 		, 'data-ng-model' => 'invoice.tgi'
					// 		, 'div'=>'form-group'
					// 		, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Imp. Municipal')
					// 		, 'between' => '<div class="col-sm-8">'
					// 		, 'after' => '</div>')
					// );
					echo "<div class='form-group'>";
						echo $this->Form->label('tgi', 'Imp. Municipal', array('class' => 'col-sm-2 control-label'));
						echo $this->Form->input('tgi', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularTotal()'
								, 'data-ng-model' => 'invoice.tgi'
								, 'div'=>'col-sm-4'
								, 'label' => false
								)
						);

						# Observaciones Imp. Municipal
						echo $this->Form->input('observation_tgi', array('class'=>'form-control'
								, 'data-ng-model' => 'invoice.observation_tgi'
								, 'div'=>'col-sm-4'
								, 'label' => false
								, 'placeholder' => 'Observaciones Imp. Municipal'
								)
						);
					echo "</div>";

					# Agua
					// echo $this->Form->input('agua', array('class'=>'form-control'
					// 		, 'data-ng-change' => 'calcularTotal()'
					// 		, 'data-ng-model' => 'invoice.agua'
					// 		, 'div'=>'form-group'
					// 		, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Imp. Aguas Pciales.')
					// 		, 'between' => '<div class="col-sm-8">'
					// 		, 'after' => '</div>')
					// );
					echo "<div class='form-group'>";
						echo $this->Form->label('agua', 'Imp. Aguas Pciales.', array('class' => 'col-sm-2 control-label'));
						echo $this->Form->input('agua', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularTotal()'
								, 'data-ng-model' => 'invoice.agua'
								, 'div'=>'col-sm-4'
								, 'label' => false
								)
						);

						# Observaciones Imp. Aguas Pciales.
						echo $this->Form->input('observation_agua', array('class'=>'form-control'
								, 'data-ng-model' => 'invoice.observation_agua'
								, 'div'=>'col-sm-4'
								, 'label' => false
								, 'placeholder' => 'Observaciones Imp. Aguas Pciales.'
								)
						);
					echo "</div>";

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

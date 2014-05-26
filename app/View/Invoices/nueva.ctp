<?php
echo $this->Html->css('invoices/common', array('inline'=>true));
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

<div data-ng-app="SancayetanoApp" data-ng-controller="InvoicesController" >
	<div class="row">
		<div class="col-sm-12" data-ng-init='invoice=<?php echo json_encode($this->request->data['Invoice']) ?>'>
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

						# Número de Ficha
						echo $this->Form->input('ficha'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Número de Ficha')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);

						# Nombre del Inquilino
						echo $this->Form->input('name'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Nombre del Inquilino')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);

						# Condición de IVA: RI, Monotributo, Exento
						echo $this->Form->input('Estate.renter_iva'
							, array('class'=>'form-control'
								, 'disabled'=> true
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Condición IVA')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);

						# CUIT del Inquilino
						echo $this->Form->input('cuit'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'CUIT del Inquilino')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);

						# Domicilio del Inmueble
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
									, 'before' => '<div class="input-group"><span class="input-group-addon">$</span>'
									// , 'between' => '<div class="col-sm-8">'
									, 'after' => '</div>'
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
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);

						# IVA
						echo $this->Form->input('iva', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularTotal()'
								, 'data-ng-model' => 'invoice.iva'
								, 'disabled'=> true
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'IVA')
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);

						# Seguro
						echo $this->Form->input('insurance', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularSubtotal()'
								, 'data-ng-model' => 'invoice.insurance'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total Seguro')
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);

						# Subtotal
						echo $this->Form->input('subtotal', array('class'=>'form-control'
								, 'data-ng-model' => 'invoice.subtotal'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total Alq. y Seguro')
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
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
									, 'before' => '<div class="input-group"><span class="input-group-addon">$</span>'
									, 'after' => '</div>'
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
									, 'before' => '<div class="input-group"><span class="input-group-addon">$</span>'
									, 'after' => '</div>'
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
									, 'before' => '<div class="input-group"><span class="input-group-addon">$</span>'
									, 'after' => '</div>'
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
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);

						# Retenciones
						echo $this->Form->input('retenciones', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularTotal()'
								, 'data-ng-model' => 'invoice.retenciones'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Retenciones')
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);

						# Percepciones
						echo $this->Form->input('percepciones', array('class'=>'form-control'
								, 'data-ng-change' => 'calcularTotal()'
								, 'data-ng-model' => 'invoice.percepciones'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Percepciones')
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);

						# Total General
						echo $this->Form->input('total', array('class'=>'form-control'
								, 'data-ng-model' => 'invoice.total'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Total General')
								, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
								, 'after' => '</div></div>'
							)
						);
					?>
					
					<div class="row cheques">
						<div class="col-sm-9 col-sm-offset-1">
							<div class="row">
								<div class="col-sm-6">
									<h2>Registro de Cheques</h2>
								</div>
								<div class="col-sm-6 text-right">
									<h2>
										
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#checkModal">
										+ Agregar
									</a>
									</h2>
								</div>
							</div>
							<div class="col-sm-12" data-ng-hide="invoice.checks && invoice.checks.length > 0">
								No se han registrado cheques.
							</div>
							<div class="col-sm-12" data-ng-show="invoice.checks && invoice.checks.length > 0">
								<table class="table table-stripped">
									<thead>
										<th>Número</th>
										<th>Banco</th>
										<th>Monto</th>
										<th>Acciones</th>
									</thead>
									<tbody>
										<tr data-ng-repeat="check in invoice.checks">
											<td class="text-center">
												{{check.number}}
												<input name="data[Check][{{$index}}][number]" 
													type="hidden"
													value='{{check.number}}' />
											</td>
											<td class="text-center">
												{{check.bank}}
												<input name="data[Check][{{$index}}][bank]" 
													type="hidden"
													value='{{check.bank}}' />
											</td>
											<td class="data-ng-cloak text-right">
												{{check.amount | currency: '$ '}}
												<input name="data[Check][{{$index}}][amount]" 
													type="hidden"
													value='{{check.amount}}' />
											</td>
											<td class="col-sm-1 text-center">
												<a href="#" class="btn btn-sm btn-warning" data-ng-click="checkRemove($index)">X</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


				</fieldset>

				<?php echo $this->Form->input('Facturar', array('class'=>'btn btn-primary col-sm-12'
						, 'div'=>'form-group'
						, 'label' => false
						, 'between' => '<div class="col-sm-6 col-sm-offset-3 text-center">'
						, 'after' => '</div>'
						, 'type' => 'submit')
					);
				?>

			<?php echo $this->Form->end(); ?>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="checkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Agregar Nuevo Cheque</h4>
			</div>
			<div class="modal-body">
				<div class="row form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<input class="form-control" data-ng-model='check.number' placeholder="Número" type="text" />
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-8 col-sm-offset-2">
						<input class="form-control" data-ng-model='check.bank' placeholder="Banco" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="input-group">
							<span class="input-group-addon">$</span>
							<input class="form-control" data-ng-model="check.amount" placeholder="Monto" type="text" />
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
				<a href="#" type="button" class="btn btn-primary" data-ng-click="checkAdd()">Save changes</a>
			</div>
		</div>
		</div>
	</div>
</div>

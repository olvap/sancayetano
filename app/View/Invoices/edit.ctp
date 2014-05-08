<div class="row">
	<div class="col-sm-12">
		<?php echo $this->Form->create('Invoice', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<fieldset>
				<legend><?php echo __('Edit Invoice'); ?></legend>
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
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Domicilio del Inmueble')
							, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
							, 'after' => '</div></div>')
					);
					echo $this->Form->input('iva', array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Domicilio del Inmueble')
							, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
							, 'after' => '</div></div>')
					);

					echo $this->Form->input('total', array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'Domicilio del Inmueble')
							, 'between' => '<div class="col-sm-8"><div class="input-group"><span class="input-group-addon">$</span>'
							, 'after' => '</div></div>')
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

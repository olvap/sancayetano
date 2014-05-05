<div class="row">
	<div class="col-sm-12">
		<?php echo $this->Form->create('Owner', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<fieldset>
				<legend><?php echo __('Add Owner'); ?></legend>
				
				<?php
					echo $this->Form->input('Person.name'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('Person.address'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('Person.telephone'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('Person.email'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('Person.cuit'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('Person.iva_id'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
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

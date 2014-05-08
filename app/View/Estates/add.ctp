<div class="row">
	<div class="col-sm-12">
		<?php echo $this->Form->create('Estate', array('class'=>'form-horizontal', 'role'=>'form')); ?>
			<fieldset>
				<legend><?php echo __('Add Estate'); ?></legend>
				
				<?php
					echo $this->Form->input('ficha'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('name'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('address'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('price'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('contract_start'
						, array('class'=>'form-control'
							, 'dateFormat' => 'DMY'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('contract_end'
						, array('class'=>'form-control'
							, 'dateFormat' => 'DMY'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('owner_id'
						, array('class'=>'form-control'
							, 'div'=>'form-group'
							, 'label' => array('class' => 'col-sm-2 control-label')
							, 'between' => '<div class="col-sm-8">'
							, 'after' => '</div>')
					);
					echo $this->Form->input('renter_id'
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



<div class="estates form">
<?php echo $this->Form->create('Estate'); ?>
	<fieldset>
		<legend><?php echo __('Add Estate'); ?></legend>
	<?php
		echo $this->Form->input('ficha');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('price');
		echo $this->Form->input('contract_start', array('dateFormat' => 'DMY'));
		echo $this->Form->input('contract_end', array('dateFormat' => 'DMY'));
		echo $this->Form->input('owner_id');
		echo $this->Form->input('renter_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

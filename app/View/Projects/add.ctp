<hr>
<div class="projects form">
<?php echo $this->Form->create('Project',array('class'=>'form','type' => 'file') ); ?>
	<fieldset>
		<legend><?php echo __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('description',array('rows'=>10) );
		echo '<div class="input-append">'.
				'<label for="ProjectImage2">Image 2</label>'.
				'<input name="data[Project][image_1]" maxlength="200" type="text" id="ProjectImage1">'.
			 '<button class="btn btn-warning" type="button">Agregar Imagen</button></div>';
		echo $this->Form->input('image_2',array('type' => 'file'));
		echo $this->Form->input('image_3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('uploadById',array('id'=>'ProjectImage1')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<hr>
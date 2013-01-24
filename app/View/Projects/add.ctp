<hr>
<div class="projects form" style="background:#f9f9f9; padding:30px">
<?php echo $this->Form->create('Project',array('class'=>'form') ); ?>
	<fieldset>
		<legend><?php echo __('Agregar Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('client_id',array('label'=>'Cliente') );
		echo $this->Form->input('title',array('label'=>'Titulo') );
		echo $this->Form->input('description',array('rows'=>10,'label'=>'Descripcion') );
		echo $this->Form->input('image_1',array('type'=>'hidden'));
		echo 'Imagen 1'.$this->element('uploadById',array('id'=>'ProjectImage1'));
		echo '<hr>';
		echo $this->Form->input('image_2',array('type'=>'hidden'));
		echo 'Imagen 2'.$this->element('uploadById',array('id'=>'ProjectImage2'));
		echo '<hr>';
		echo $this->Form->input('image_3',array('type'=>'hidden'));
		echo 'Imagen 3'.$this->element('uploadById',array('id'=>'ProjectImage3'));
		/*echo $this->Form->input('image_2',array('type' => 'file'));
		echo $this->Form->input('image_3');*/
	?>
	<?php echo $this->Form->end(__('Guardar')); ?>
	</fieldset>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class="nav nav-tabs nav-stacked">

		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<hr>
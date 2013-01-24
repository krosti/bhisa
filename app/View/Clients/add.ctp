<hr>
<div class="clients form" style="background:#f9f9f9; padding:30px">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>'Nombre') );
		echo $this->Form->input('description',array('rows'=>12,'label'=>'Descripcion') );
		echo $this->Form->input('logo',array('type'=>'hidden'));
		echo 'Logo'.$this->element('uploadById',array('id'=>'ClientLogo'));
	?>
	<hr>
	<?php echo $this->Form->end(__('Submit'),array('class'=>'btn') ); ?>	
	</fieldset>
</div>
<div class="actions" style="background:#f9f9f9; padding:30px">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class="nav nav-tabs nav-stacked">
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyects'), array('controller' => 'proyects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyect'), array('controller' => 'proyects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<hr>
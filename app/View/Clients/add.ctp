<hr>
<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description',array('rows'=>12) );
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'),array('class'=>'btn') ); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyects'), array('controller' => 'proyects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyect'), array('controller' => 'proyects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<hr>
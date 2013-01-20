<hr>
<div class="clients view">
<h2><?php  echo __('Client'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($client['Client']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($client['Client']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyects'), array('controller' => 'proyects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyect'), array('controller' => 'proyects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Proyects'); ?></h3>
	<?php if (!empty($client['Proyect'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Image 1'); ?></th>
		<th><?php echo __('Image 2'); ?></th>
		<th><?php echo __('Image 3'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Proyect'] as $proyect): ?>
		<tr>
			<td><?php echo $proyect['id']; ?></td>
			<td><?php echo $proyect['client_id']; ?></td>
			<td><?php echo $proyect['description']; ?></td>
			<td><?php echo $proyect['created']; ?></td>
			<td><?php echo $proyect['image_1']; ?></td>
			<td><?php echo $proyect['image_2']; ?></td>
			<td><?php echo $proyect['image_3']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proyects', 'action' => 'view', $proyect['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proyects', 'action' => 'edit', $proyect['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proyects', 'action' => 'delete', $proyect['id']), null, __('Are you sure you want to delete # %s?', $proyect['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proyect'), array('controller' => 'proyects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<hr>
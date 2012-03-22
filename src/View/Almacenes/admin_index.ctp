<div class="almacenes index">
	<h2><?php echo __('Almacenes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_almacen');?></th>
			<th><?php echo $this->Paginator->sort('descripcion_almacen');?></th>
			<th><?php echo $this->Paginator->sort('direccion_almacen');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($almacenes as $almacen): ?>
	<tr>
		<td><?php echo h($almacen['Almacen']['id']); ?>&nbsp;</td>
		<td><?php echo h($almacen['Almacen']['nombre_almacen']); ?>&nbsp;</td>
		<td><?php echo h($almacen['Almacen']['descripcion_almacen']); ?>&nbsp;</td>
		<td><?php echo h($almacen['Almacen']['direccion_almacen']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $almacen['Almacen']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $almacen['Almacen']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $almacen['Almacen']['id']), null, __('Are you sure you want to delete # %s?', $almacen['Almacen']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Almacen'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

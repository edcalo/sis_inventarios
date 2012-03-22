<div class="detalleNotaVentas index">
	<h2><?php echo __('Detalle Nota Ventas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('item_id');?></th>
			<th><?php echo $this->Paginator->sort('nota_de_venta_id');?></th>
			<th><?php echo $this->Paginator->sort('cantidad');?></th>
			<th><?php echo $this->Paginator->sort('precio_venta');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($detalleNotaVentas as $detalleNotaVenta): ?>
	<tr>
		<td><?php echo h($detalleNotaVenta['DetalleNotaVenta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleNotaVenta['Item']['nombre_articulo'], array('controller' => 'items', 'action' => 'view', $detalleNotaVenta['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($detalleNotaVenta['NotaDeVenta']['fecha_nota_venta'], array('controller' => 'nota_de_ventas', 'action' => 'view', $detalleNotaVenta['NotaDeVenta']['id'])); ?>
		</td>
		<td><?php echo h($detalleNotaVenta['DetalleNotaVenta']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($detalleNotaVenta['DetalleNotaVenta']['precio_venta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $detalleNotaVenta['DetalleNotaVenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $detalleNotaVenta['DetalleNotaVenta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $detalleNotaVenta['DetalleNotaVenta']['id']), null, __('Are you sure you want to delete # %s?', $detalleNotaVenta['DetalleNotaVenta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Nota Venta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Nota De Ventas'), array('controller' => 'nota_de_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota De Venta'), array('controller' => 'nota_de_ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

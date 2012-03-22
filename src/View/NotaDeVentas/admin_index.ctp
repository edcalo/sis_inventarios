<div class="notaDeVentas index">
	<h2><?php echo __('Nota De Ventas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('venta_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_nota_venta');?></th>
			<th><?php echo $this->Paginator->sort('monto_total');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($notaDeVentas as $notaDeVenta): ?>
	<tr>
		<td><?php echo h($notaDeVenta['NotaDeVenta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($notaDeVenta['Venta']['fecha_venta'], array('controller' => 'ventas', 'action' => 'view', $notaDeVenta['Venta']['id'])); ?>
		</td>
		<td><?php echo h($notaDeVenta['NotaDeVenta']['fecha_nota_venta']); ?>&nbsp;</td>
		<td><?php echo h($notaDeVenta['NotaDeVenta']['monto_total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $notaDeVenta['NotaDeVenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $notaDeVenta['NotaDeVenta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $notaDeVenta['NotaDeVenta']['id']), null, __('Are you sure you want to delete # %s?', $notaDeVenta['NotaDeVenta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Nota De Venta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Nota Ventas'), array('controller' => 'detalle_nota_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Nota Venta'), array('controller' => 'detalle_nota_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>

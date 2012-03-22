<div class="facturas index">
	<h2><?php echo __('Facturas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('dosificacion_id');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('venta_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_factura');?></th>
			<th><?php echo $this->Paginator->sort('monto_total');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($facturas as $factura): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($factura['Dosificacion']['numero_de_autorizacion'], array('controller' => 'dosificaciones', 'action' => 'view', $factura['Dosificacion']['id'])); ?>
		</td>
		<td><?php echo h($factura['Factura']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($factura['Venta']['fecha_venta'], array('controller' => 'ventas', 'action' => 'view', $factura['Venta']['id'])); ?>
		</td>
		<td><?php echo h($factura['Factura']['fecha_factura']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['monto_total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $factura['Factura']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $factura['Factura']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $factura['Factura']['id']), null, __('Are you sure you want to delete # %s?', $factura['Factura']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dosificaciones'), array('controller' => 'dosificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dosificacion'), array('controller' => 'dosificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Factura Itemes'), array('controller' => 'factura_itemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura Item'), array('controller' => 'factura_itemes', 'action' => 'add')); ?> </li>
	</ul>
</div>

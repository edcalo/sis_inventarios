<div class="compras index">
	<h2><?php echo __('Compras');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('credito_id');?></th>
			<th><?php echo $this->Paginator->sort('empleado_id');?></th>
			<th><?php echo $this->Paginator->sort('proveedor_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_compra');?></th>
			<th><?php echo $this->Paginator->sort('monto_total');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($compras as $compra): ?>
	<tr>
		<td><?php echo h($compra['Compra']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($compra['Credito']['cuota_inicial'], array('controller' => 'creditos', 'action' => 'view', $compra['Credito']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($compra['Empleado']['doc_identidad'], array('controller' => 'empleados', 'action' => 'view', $compra['Empleado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($compra['Proveedor']['nombre_proveedor'], array('controller' => 'proveedores', 'action' => 'view', $compra['Proveedor']['id'])); ?>
		</td>
		<td><?php echo h($compra['Compra']['fecha_compra']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['monto_total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $compra['Compra']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $compra['Compra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $compra['Compra']['id']), null, __('Are you sure you want to delete # %s?', $compra['Compra']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Compra'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('controller' => 'creditos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credito'), array('controller' => 'creditos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

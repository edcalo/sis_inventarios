<div class="empleados index">
	<h2><?php echo __('Empleados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('doc_identidad');?></th>
			<th><?php echo $this->Paginator->sort('nombres');?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno');?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno');?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso');?></th>
			<th><?php echo $this->Paginator->sort('contacto');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('tipo_doc_identidad');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($empleados as $empleado): ?>
	<tr>
		<td><?php echo h($empleado['Empleado']['id']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['doc_identidad']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['contacto']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['email']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['tipo_doc_identidad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empleado['Empleado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empleado['Empleado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empleado['Empleado']['id']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>

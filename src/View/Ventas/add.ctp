<div class="ventas form">
<?php echo $this->Form->create('Venta');?>
	<fieldset>
		<legend><?php echo __('Add Venta'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('descuento_id');
		echo $this->Form->input('empleado_id');
		echo $this->Form->input('fecha_venta');
		echo $this->Form->input('pagado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('controller' => 'descuentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('controller' => 'descuentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('controller' => 'creditos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credito'), array('controller' => 'creditos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nota De Ventas'), array('controller' => 'nota_de_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota De Venta'), array('controller' => 'nota_de_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>

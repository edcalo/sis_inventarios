<div class="compras form">
<?php echo $this->Form->create('Compra');?>
	<fieldset>
		<legend><?php echo __('Admin Add Compra'); ?></legend>
	<?php
		echo $this->Form->input('credito_id');
		echo $this->Form->input('empleado_id');
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('fecha_compra');
		echo $this->Form->input('monto_total');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Compras'), array('action' => 'index'));?></li>
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

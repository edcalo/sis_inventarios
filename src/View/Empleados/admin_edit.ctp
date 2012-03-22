<div class="empleados form">
<?php echo $this->Form->create('Empleado');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Empleado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('doc_identidad');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('contacto');
		echo $this->Form->input('telefono');
		echo $this->Form->input('email');
		echo $this->Form->input('tipo_doc_identidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Empleado.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Empleado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>

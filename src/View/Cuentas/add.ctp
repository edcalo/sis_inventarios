<div class="cuentas form">
<?php echo $this->Form->create('Cuenta');?>
	<fieldset>
		<legend><?php echo __('Add Cuenta'); ?></legend>
	<?php
		echo $this->Form->input('empleado_id');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('nombre_usuario');
		echo $this->Form->input('password');
		echo $this->Form->input('fecha_inicio_valides');
		echo $this->Form->input('fecha_final_valides');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>

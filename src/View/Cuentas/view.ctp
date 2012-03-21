<div class="cuentas view">
<h2><?php  echo __('Cuenta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empleado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuenta['Empleado']['doc_identidad'], array('controller' => 'empleados', 'action' => 'view', $cuenta['Empleado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuenta['Rol']['nombre_rol'], array('controller' => 'roles', 'action' => 'view', $cuenta['Rol']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Usuario'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['nombre_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Valides'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['fecha_inicio_valides']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Final Valides'); ?></dt>
		<dd>
			<?php echo h($cuenta['Cuenta']['fecha_final_valides']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuenta'), array('action' => 'edit', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuenta'), array('action' => 'delete', $cuenta['Cuenta']['id']), null, __('Are you sure you want to delete # %s?', $cuenta['Cuenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('controller' => 'empleados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('controller' => 'empleados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="empleados view">
<h2><?php  echo __('Empleado');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc Identidad'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['doc_identidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Doc Identidad'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['tipo_doc_identidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado'), array('action' => 'edit', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado'), array('action' => 'delete', $empleado['Empleado']['id']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuentas'), array('controller' => 'cuentas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Compras');?></h3>
	<?php if (!empty($empleado['Compra'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Credito Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Proveedor Id'); ?></th>
		<th><?php echo __('Fecha Compra'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Compra'] as $compra): ?>
		<tr>
			<td><?php echo $compra['id'];?></td>
			<td><?php echo $compra['credito_id'];?></td>
			<td><?php echo $compra['empleado_id'];?></td>
			<td><?php echo $compra['proveedor_id'];?></td>
			<td><?php echo $compra['fecha_compra'];?></td>
			<td><?php echo $compra['monto_total'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'compras', 'action' => 'view', $compra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'compras', 'action' => 'edit', $compra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'compras', 'action' => 'delete', $compra['id']), null, __('Are you sure you want to delete # %s?', $compra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cuentas');?></h3>
	<?php if (!empty($empleado['Cuenta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Nombre Usuario'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Fecha Inicio Valides'); ?></th>
		<th><?php echo __('Fecha Final Valides'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Cuenta'] as $cuenta): ?>
		<tr>
			<td><?php echo $cuenta['id'];?></td>
			<td><?php echo $cuenta['empleado_id'];?></td>
			<td><?php echo $cuenta['rol_id'];?></td>
			<td><?php echo $cuenta['nombre_usuario'];?></td>
			<td><?php echo $cuenta['password'];?></td>
			<td><?php echo $cuenta['fecha_inicio_valides'];?></td>
			<td><?php echo $cuenta['fecha_final_valides'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuentas', 'action' => 'view', $cuenta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuentas', 'action' => 'edit', $cuenta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuentas', 'action' => 'delete', $cuenta['id']), null, __('Are you sure you want to delete # %s?', $cuenta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuenta'), array('controller' => 'cuentas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ventas');?></h3>
	<?php if (!empty($empleado['Venta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Descuento Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Fecha Venta'); ?></th>
		<th><?php echo __('Pagado'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empleado['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['id'];?></td>
			<td><?php echo $venta['cliente_id'];?></td>
			<td><?php echo $venta['descuento_id'];?></td>
			<td><?php echo $venta['empleado_id'];?></td>
			<td><?php echo $venta['fecha_venta'];?></td>
			<td><?php echo $venta['pagado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ventas', 'action' => 'view', $venta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ventas', 'action' => 'edit', $venta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ventas', 'action' => 'delete', $venta['id']), null, __('Are you sure you want to delete # %s?', $venta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

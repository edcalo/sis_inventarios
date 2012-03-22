<div class="ventas view">
<h2><?php  echo __('Venta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Cliente']['nombres'], array('controller' => 'clientes', 'action' => 'view', $venta['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descuento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Descuento']['nombre_descuento'], array('controller' => 'descuentos', 'action' => 'view', $venta['Descuento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empleado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Empleado']['doc_identidad'], array('controller' => 'empleados', 'action' => 'view', $venta['Empleado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Venta'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['fecha_venta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagado'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['pagado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Venta'), array('action' => 'edit', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Venta'), array('action' => 'delete', $venta['Venta']['id']), null, __('Are you sure you want to delete # %s?', $venta['Venta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Facturas');?></h3>
	<?php if (!empty($venta['Factura'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dosificacion Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venta Id'); ?></th>
		<th><?php echo __('Fecha Factura'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venta['Factura'] as $factura): ?>
		<tr>
			<td><?php echo $factura['dosificacion_id'];?></td>
			<td><?php echo $factura['id'];?></td>
			<td><?php echo $factura['venta_id'];?></td>
			<td><?php echo $factura['fecha_factura'];?></td>
			<td><?php echo $factura['monto_total'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'facturas', 'action' => 'view', $factura['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'facturas', 'action' => 'edit', $factura['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'facturas', 'action' => 'delete', $factura['id']), null, __('Are you sure you want to delete # %s?', $factura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Creditos');?></h3>
	<?php if (!empty($venta['Credito'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venta Id'); ?></th>
		<th><?php echo __('Cuota Inicial'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venta['Credito'] as $credito): ?>
		<tr>
			<td><?php echo $credito['id'];?></td>
			<td><?php echo $credito['venta_id'];?></td>
			<td><?php echo $credito['cuota_inicial'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'creditos', 'action' => 'view', $credito['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'creditos', 'action' => 'edit', $credito['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'creditos', 'action' => 'delete', $credito['id']), null, __('Are you sure you want to delete # %s?', $credito['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Credito'), array('controller' => 'creditos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Nota De Ventas');?></h3>
	<?php if (!empty($venta['NotaDeVenta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venta Id'); ?></th>
		<th><?php echo __('Fecha Nota Venta'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($venta['NotaDeVenta'] as $notaDeVenta): ?>
		<tr>
			<td><?php echo $notaDeVenta['id'];?></td>
			<td><?php echo $notaDeVenta['venta_id'];?></td>
			<td><?php echo $notaDeVenta['fecha_nota_venta'];?></td>
			<td><?php echo $notaDeVenta['monto_total'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nota_de_ventas', 'action' => 'view', $notaDeVenta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nota_de_ventas', 'action' => 'edit', $notaDeVenta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nota_de_ventas', 'action' => 'delete', $notaDeVenta['id']), null, __('Are you sure you want to delete # %s?', $notaDeVenta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nota De Venta'), array('controller' => 'nota_de_ventas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

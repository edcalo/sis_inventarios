<div class="compras view">
<h2><?php  echo __('Compra');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($compra['Credito']['cuota_inicial'], array('controller' => 'creditos', 'action' => 'view', $compra['Credito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empleado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($compra['Empleado']['doc_identidad'], array('controller' => 'empleados', 'action' => 'view', $compra['Empleado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($compra['Proveedor']['nombre_proveedor'], array('controller' => 'proveedores', 'action' => 'view', $compra['Proveedor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Compra'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['fecha_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Total'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['monto_total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Compra'), array('action' => 'edit', $compra['Compra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Compra'), array('action' => 'delete', $compra['Compra']['id']), null, __('Are you sure you want to delete # %s?', $compra['Compra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Items');?></h3>
	<?php if (!empty($compra['Item'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Industria Id'); ?></th>
		<th><?php echo __('Almacen Id'); ?></th>
		<th><?php echo __('Nombre Articulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Numero De Serie'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($compra['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id'];?></td>
			<td><?php echo $item['marca_id'];?></td>
			<td><?php echo $item['grupo_id'];?></td>
			<td><?php echo $item['industria_id'];?></td>
			<td><?php echo $item['almacen_id'];?></td>
			<td><?php echo $item['nombre_articulo'];?></td>
			<td><?php echo $item['descripcion'];?></td>
			<td><?php echo $item['numero_de_serie'];?></td>
			<td><?php echo $item['codigo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

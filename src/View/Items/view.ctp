<div class="items view">
<h2><?php  echo __('Item');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Marca']['nombre_marca'], array('controller' => 'marcas', 'action' => 'view', $item['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Grupo']['nombre_grupo'], array('controller' => 'grupos', 'action' => 'view', $item['Grupo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Industria']['nombre_industria'], array('controller' => 'industrias', 'action' => 'view', $item['Industria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Almacen'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['Almacen']['nombre_almacen'], array('controller' => 'almacenes', 'action' => 'view', $item['Almacen']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Articulo'); ?></dt>
		<dd>
			<?php echo h($item['Item']['nombre_articulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($item['Item']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Serie'); ?></dt>
		<dd>
			<?php echo h($item['Item']['numero_de_serie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($item['Item']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Compra'); ?></dt>
		<dd>
			<?php echo h($item['Item']['precio_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Referencia Venta'); ?></dt>
		<dd>
			<?php echo h($item['Item']['precio_referencia_venta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Garantia Compra'); ?></dt>
		<dd>
			<?php echo h($item['Item']['garantia_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compra Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['compra_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industrias'), array('controller' => 'industrias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industria'), array('controller' => 'industrias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Almacenes'), array('controller' => 'almacenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Almacen'), array('controller' => 'almacenes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Compras');?></h3>
	<?php if (!empty($item['Compra'])):?>
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
		foreach ($item['Compra'] as $compra): ?>
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
	<h3><?php echo __('Related Facturas');?></h3>
	<?php if (!empty($item['Factura'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Dosificacion Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venta Id'); ?></th>
		<th><?php echo __('Fecha Factura'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Numero Factura'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Factura'] as $factura): ?>
		<tr>
			<td><?php echo $factura['dosificacion_id'];?></td>
			<td><?php echo $factura['id'];?></td>
			<td><?php echo $factura['venta_id'];?></td>
			<td><?php echo $factura['fecha_factura'];?></td>
			<td><?php echo $factura['monto_total'];?></td>
			<td><?php echo $factura['numero_factura'];?></td>
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

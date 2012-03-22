<div class="facturas view">
<h2><?php  echo __('Factura');?></h2>
	<dl>
		<dt><?php echo __('Dosificacion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['Dosificacion']['numero_de_autorizacion'], array('controller' => 'dosificaciones', 'action' => 'view', $factura['Dosificacion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['Venta']['fecha_venta'], array('controller' => 'ventas', 'action' => 'view', $factura['Venta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Factura'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['fecha_factura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Total'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['monto_total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Factura'), array('action' => 'edit', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Factura'), array('action' => 'delete', $factura['Factura']['id']), null, __('Are you sure you want to delete # %s?', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dosificaciones'), array('controller' => 'dosificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dosificacion'), array('controller' => 'dosificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Factura Itemes'), array('controller' => 'factura_itemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura Item'), array('controller' => 'factura_itemes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Factura Itemes');?></h3>
	<?php if (!empty($factura['FacturaItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Factura Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio Venta'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($factura['FacturaItem'] as $facturaItem): ?>
		<tr>
			<td><?php echo $facturaItem['id'];?></td>
			<td><?php echo $facturaItem['item_id'];?></td>
			<td><?php echo $facturaItem['factura_id'];?></td>
			<td><?php echo $facturaItem['cantidad'];?></td>
			<td><?php echo $facturaItem['precio_venta'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'factura_itemes', 'action' => 'view', $facturaItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'factura_itemes', 'action' => 'edit', $facturaItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'factura_itemes', 'action' => 'delete', $facturaItem['id']), null, __('Are you sure you want to delete # %s?', $facturaItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Factura Item'), array('controller' => 'factura_itemes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

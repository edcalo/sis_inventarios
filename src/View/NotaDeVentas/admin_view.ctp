<div class="notaDeVentas view">
<h2><?php  echo __('Nota De Venta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($notaDeVenta['NotaDeVenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($notaDeVenta['Venta']['fecha_venta'], array('controller' => 'ventas', 'action' => 'view', $notaDeVenta['Venta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nota Venta'); ?></dt>
		<dd>
			<?php echo h($notaDeVenta['NotaDeVenta']['fecha_nota_venta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Total'); ?></dt>
		<dd>
			<?php echo h($notaDeVenta['NotaDeVenta']['monto_total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nota De Venta'), array('action' => 'edit', $notaDeVenta['NotaDeVenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nota De Venta'), array('action' => 'delete', $notaDeVenta['NotaDeVenta']['id']), null, __('Are you sure you want to delete # %s?', $notaDeVenta['NotaDeVenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nota De Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota De Venta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Nota Ventas'), array('controller' => 'detalle_nota_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Nota Venta'), array('controller' => 'detalle_nota_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Detalle Nota Ventas');?></h3>
	<?php if (!empty($notaDeVenta['DetalleNotaVenta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Nota De Venta Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Precio Venta'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($notaDeVenta['DetalleNotaVenta'] as $detalleNotaVenta): ?>
		<tr>
			<td><?php echo $detalleNotaVenta['id'];?></td>
			<td><?php echo $detalleNotaVenta['item_id'];?></td>
			<td><?php echo $detalleNotaVenta['nota_de_venta_id'];?></td>
			<td><?php echo $detalleNotaVenta['cantidad'];?></td>
			<td><?php echo $detalleNotaVenta['precio_venta'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'detalle_nota_ventas', 'action' => 'view', $detalleNotaVenta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'detalle_nota_ventas', 'action' => 'edit', $detalleNotaVenta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'detalle_nota_ventas', 'action' => 'delete', $detalleNotaVenta['id']), null, __('Are you sure you want to delete # %s?', $detalleNotaVenta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Detalle Nota Venta'), array('controller' => 'detalle_nota_ventas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

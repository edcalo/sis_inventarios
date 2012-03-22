<div class="detalleNotaVentas view">
<h2><?php  echo __('Detalle Nota Venta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($detalleNotaVenta['DetalleNotaVenta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleNotaVenta['Item']['nombre_articulo'], array('controller' => 'items', 'action' => 'view', $detalleNotaVenta['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota De Venta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($detalleNotaVenta['NotaDeVenta']['fecha_nota_venta'], array('controller' => 'nota_de_ventas', 'action' => 'view', $detalleNotaVenta['NotaDeVenta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($detalleNotaVenta['DetalleNotaVenta']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Venta'); ?></dt>
		<dd>
			<?php echo h($detalleNotaVenta['DetalleNotaVenta']['precio_venta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Detalle Nota Venta'), array('action' => 'edit', $detalleNotaVenta['DetalleNotaVenta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Detalle Nota Venta'), array('action' => 'delete', $detalleNotaVenta['DetalleNotaVenta']['id']), null, __('Are you sure you want to delete # %s?', $detalleNotaVenta['DetalleNotaVenta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Nota Ventas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Nota Venta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nota De Ventas'), array('controller' => 'nota_de_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota De Venta'), array('controller' => 'nota_de_ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="facturaItemes view">
<h2><?php  echo __('Factura Item');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($facturaItem['FacturaItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($facturaItem['Item']['nombre_articulo'], array('controller' => 'items', 'action' => 'view', $facturaItem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Factura'); ?></dt>
		<dd>
			<?php echo $this->Html->link($facturaItem['Factura']['fecha_factura'], array('controller' => 'facturas', 'action' => 'view', $facturaItem['Factura']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($facturaItem['FacturaItem']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Venta'); ?></dt>
		<dd>
			<?php echo h($facturaItem['FacturaItem']['precio_venta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Factura Item'), array('action' => 'edit', $facturaItem['FacturaItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Factura Item'), array('action' => 'delete', $facturaItem['FacturaItem']['id']), null, __('Are you sure you want to delete # %s?', $facturaItem['FacturaItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Factura Itemes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>

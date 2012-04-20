<div class="items index">
	<h2><?php echo __('Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('marca_id');?></th>
			<th><?php echo $this->Paginator->sort('grupo_id');?></th>
			<th><?php echo $this->Paginator->sort('industria_id');?></th>
			<th><?php echo $this->Paginator->sort('almacen_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_articulo');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_serie');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('precio_compra');?></th>
			<th><?php echo $this->Paginator->sort('precio_referencia_venta');?></th>
			<th><?php echo $this->Paginator->sort('garantia_compra');?></th>
			<th><?php echo $this->Paginator->sort('compra_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($items as $item): ?>
	<tr>
		<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($item['Marca']['nombre_marca'], array('controller' => 'marcas', 'action' => 'view', $item['Marca']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['Grupo']['nombre_grupo'], array('controller' => 'grupos', 'action' => 'view', $item['Grupo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['Industria']['nombre_industria'], array('controller' => 'industrias', 'action' => 'view', $item['Industria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['Almacen']['nombre_almacen'], array('controller' => 'almacenes', 'action' => 'view', $item['Almacen']['id'])); ?>
		</td>
		<td><?php echo h($item['Item']['nombre_articulo']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['numero_de_serie']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['precio_compra']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['precio_referencia_venta']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['garantia_compra']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['compra_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
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

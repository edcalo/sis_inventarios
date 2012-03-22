<div class="detalleNotaVentas form">
<?php echo $this->Form->create('DetalleNotaVenta');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Detalle Nota Venta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('nota_de_venta_id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('precio_venta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DetalleNotaVenta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DetalleNotaVenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Nota Ventas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Nota De Ventas'), array('controller' => 'nota_de_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota De Venta'), array('controller' => 'nota_de_ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

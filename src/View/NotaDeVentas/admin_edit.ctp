<div class="notaDeVentas form">
<?php echo $this->Form->create('NotaDeVenta');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Nota De Venta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('venta_id');
		echo $this->Form->input('fecha_nota_venta');
		echo $this->Form->input('monto_total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NotaDeVenta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('NotaDeVenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nota De Ventas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Nota Ventas'), array('controller' => 'detalle_nota_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Nota Venta'), array('controller' => 'detalle_nota_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>

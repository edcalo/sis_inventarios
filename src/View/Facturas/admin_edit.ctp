<div class="facturas form">
<?php echo $this->Form->create('Factura');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Factura'); ?></legend>
	<?php
		echo $this->Form->input('dosificacion_id');
		echo $this->Form->input('id');
		echo $this->Form->input('venta_id');
		echo $this->Form->input('fecha_factura');
		echo $this->Form->input('monto_total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Factura.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Factura.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Dosificaciones'), array('controller' => 'dosificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dosificacion'), array('controller' => 'dosificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Factura Itemes'), array('controller' => 'factura_itemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura Item'), array('controller' => 'factura_itemes', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="descuentos form">
<?php echo $this->Form->create('Descuento');?>
	<fieldset>
		<legend><?php echo __('Add Descuento'); ?></legend>
	<?php
		echo $this->Form->input('nombre_descuento');
		echo $this->Form->input('fecha_incicio_descuento');
		echo $this->Form->input('fecha_fin_descuento');
		echo $this->Form->input('cuota_inicial');
		echo $this->Form->input('tipo');
		echo $this->Form->input('descripcion_descuento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Descuentos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>

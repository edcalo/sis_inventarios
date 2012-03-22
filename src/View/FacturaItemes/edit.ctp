<div class="facturaItemes form">
<?php echo $this->Form->create('FacturaItem');?>
	<fieldset>
		<legend><?php echo __('Edit Factura Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('factura_id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('precio_venta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FacturaItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FacturaItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Factura Itemes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>

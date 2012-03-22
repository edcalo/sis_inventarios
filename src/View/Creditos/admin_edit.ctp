<div class="creditos form">
<?php echo $this->Form->create('Credito');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Credito'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('venta_id');
		echo $this->Form->input('cuota_inicial');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Credito.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Credito.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('controller' => 'plan_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>

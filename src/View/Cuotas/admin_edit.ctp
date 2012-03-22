<div class="cuotas form">
<?php echo $this->Form->create('Cuota');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Cuota'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plan_pago_id');
		echo $this->Form->input('monto_capital');
		echo $this->Form->input('monto_interes');
		echo $this->Form->input('numero_cuota');
		echo $this->Form->input('fecha_pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cuota.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cuota.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('controller' => 'plan_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>

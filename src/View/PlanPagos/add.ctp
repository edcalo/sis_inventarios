<div class="planPagos form">
<?php echo $this->Form->create('PlanPago');?>
	<fieldset>
		<legend><?php echo __('Add Plan Pago'); ?></legend>
	<?php
		echo $this->Form->input('credito_id');
		echo $this->Form->input('fecha_inicio_pagos');
		echo $this->Form->input('numero_de_cuotas');
		echo $this->Form->input('tipo');
		echo $this->Form->input('interes');
		echo $this->Form->input('numero_de_dias');
		echo $this->Form->input('tolerancia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('controller' => 'creditos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credito'), array('controller' => 'creditos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>

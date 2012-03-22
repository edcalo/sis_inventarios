<div class="cuotas view">
<h2><?php  echo __('Cuota');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plan Pago'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuota['PlanPago']['fecha_inicio_pagos'], array('controller' => 'plan_pagos', 'action' => 'view', $cuota['PlanPago']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Capital'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['monto_capital']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto Interes'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['monto_interes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Cuota'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['numero_cuota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Pago'); ?></dt>
		<dd>
			<?php echo h($cuota['Cuota']['fecha_pago']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuota'), array('action' => 'edit', $cuota['Cuota']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuota'), array('action' => 'delete', $cuota['Cuota']['id']), null, __('Are you sure you want to delete # %s?', $cuota['Cuota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('controller' => 'plan_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>

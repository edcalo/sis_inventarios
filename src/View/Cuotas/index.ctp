<div class="cuotas index">
	<h2><?php echo __('Cuotas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('plan_pago_id');?></th>
			<th><?php echo $this->Paginator->sort('monto_capital');?></th>
			<th><?php echo $this->Paginator->sort('monto_interes');?></th>
			<th><?php echo $this->Paginator->sort('numero_cuota');?></th>
			<th><?php echo $this->Paginator->sort('fecha_pago');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cuotas as $cuota): ?>
	<tr>
		<td><?php echo h($cuota['Cuota']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cuota['PlanPago']['fecha_inicio_pagos'], array('controller' => 'plan_pagos', 'action' => 'view', $cuota['PlanPago']['id'])); ?>
		</td>
		<td><?php echo h($cuota['Cuota']['monto_capital']); ?>&nbsp;</td>
		<td><?php echo h($cuota['Cuota']['monto_interes']); ?>&nbsp;</td>
		<td><?php echo h($cuota['Cuota']['numero_cuota']); ?>&nbsp;</td>
		<td><?php echo h($cuota['Cuota']['fecha_pago']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cuota['Cuota']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cuota['Cuota']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cuota['Cuota']['id']), null, __('Are you sure you want to delete # %s?', $cuota['Cuota']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cuota'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('controller' => 'plan_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="planPagos index">
	<h2><?php echo __('Plan Pagos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('credito_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_pagos');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_cuotas');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th><?php echo $this->Paginator->sort('interes');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_dias');?></th>
			<th><?php echo $this->Paginator->sort('tolerancia');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($planPagos as $planPago): ?>
	<tr>
		<td><?php echo h($planPago['PlanPago']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planPago['Credito']['cuota_inicial'], array('controller' => 'creditos', 'action' => 'view', $planPago['Credito']['id'])); ?>
		</td>
		<td><?php echo h($planPago['PlanPago']['fecha_inicio_pagos']); ?>&nbsp;</td>
		<td><?php echo h($planPago['PlanPago']['numero_de_cuotas']); ?>&nbsp;</td>
		<td><?php echo h($planPago['PlanPago']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($planPago['PlanPago']['interes']); ?>&nbsp;</td>
		<td><?php echo h($planPago['PlanPago']['numero_de_dias']); ?>&nbsp;</td>
		<td><?php echo h($planPago['PlanPago']['tolerancia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $planPago['PlanPago']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $planPago['PlanPago']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $planPago['PlanPago']['id']), null, __('Are you sure you want to delete # %s?', $planPago['PlanPago']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('controller' => 'creditos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credito'), array('controller' => 'creditos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>

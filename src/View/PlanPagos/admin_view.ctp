<div class="planPagos view">
<h2><?php  echo __('Plan Pago');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planPago['Credito']['cuota_inicial'], array('controller' => 'creditos', 'action' => 'view', $planPago['Credito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Pagos'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['fecha_inicio_pagos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Cuotas'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['numero_de_cuotas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interes'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['interes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Dias'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['numero_de_dias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tolerancia'); ?></dt>
		<dd>
			<?php echo h($planPago['PlanPago']['tolerancia']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plan Pago'), array('action' => 'edit', $planPago['PlanPago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plan Pago'), array('action' => 'delete', $planPago['PlanPago']['id']), null, __('Are you sure you want to delete # %s?', $planPago['PlanPago']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('controller' => 'creditos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credito'), array('controller' => 'creditos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cuotas');?></h3>
	<?php if (!empty($planPago['Cuota'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Plan Pago Id'); ?></th>
		<th><?php echo __('Monto Capital'); ?></th>
		<th><?php echo __('Monto Interes'); ?></th>
		<th><?php echo __('Numero Cuota'); ?></th>
		<th><?php echo __('Fecha Pago'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($planPago['Cuota'] as $cuota): ?>
		<tr>
			<td><?php echo $cuota['id'];?></td>
			<td><?php echo $cuota['plan_pago_id'];?></td>
			<td><?php echo $cuota['monto_capital'];?></td>
			<td><?php echo $cuota['monto_interes'];?></td>
			<td><?php echo $cuota['numero_cuota'];?></td>
			<td><?php echo $cuota['fecha_pago'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuotas', 'action' => 'view', $cuota['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuotas', 'action' => 'edit', $cuota['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuotas', 'action' => 'delete', $cuota['id']), null, __('Are you sure you want to delete # %s?', $cuota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

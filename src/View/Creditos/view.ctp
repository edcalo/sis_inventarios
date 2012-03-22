<div class="creditos view">
<h2><?php  echo __('Credito');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($credito['Credito']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($credito['Venta']['fecha_venta'], array('controller' => 'ventas', 'action' => 'view', $credito['Venta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuota Inicial'); ?></dt>
		<dd>
			<?php echo h($credito['Credito']['cuota_inicial']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Credito'), array('action' => 'edit', $credito['Credito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Credito'), array('action' => 'delete', $credito['Credito']['id']), null, __('Are you sure you want to delete # %s?', $credito['Credito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Creditos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Credito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('controller' => 'plan_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Compras');?></h3>
	<?php if (!empty($credito['Compra'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Credito Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Proveedor Id'); ?></th>
		<th><?php echo __('Fecha Compra'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($credito['Compra'] as $compra): ?>
		<tr>
			<td><?php echo $compra['id'];?></td>
			<td><?php echo $compra['credito_id'];?></td>
			<td><?php echo $compra['empleado_id'];?></td>
			<td><?php echo $compra['proveedor_id'];?></td>
			<td><?php echo $compra['fecha_compra'];?></td>
			<td><?php echo $compra['monto_total'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'compras', 'action' => 'view', $compra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'compras', 'action' => 'edit', $compra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'compras', 'action' => 'delete', $compra['id']), null, __('Are you sure you want to delete # %s?', $compra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Plan Pagos');?></h3>
	<?php if (!empty($credito['PlanPago'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Credito Id'); ?></th>
		<th><?php echo __('Fecha Inicio Pagos'); ?></th>
		<th><?php echo __('Numero De Cuotas'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Interes'); ?></th>
		<th><?php echo __('Numero De Dias'); ?></th>
		<th><?php echo __('Tolerancia'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($credito['PlanPago'] as $planPago): ?>
		<tr>
			<td><?php echo $planPago['id'];?></td>
			<td><?php echo $planPago['credito_id'];?></td>
			<td><?php echo $planPago['fecha_inicio_pagos'];?></td>
			<td><?php echo $planPago['numero_de_cuotas'];?></td>
			<td><?php echo $planPago['tipo'];?></td>
			<td><?php echo $planPago['interes'];?></td>
			<td><?php echo $planPago['numero_de_dias'];?></td>
			<td><?php echo $planPago['tolerancia'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plan_pagos', 'action' => 'view', $planPago['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plan_pagos', 'action' => 'edit', $planPago['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plan_pagos', 'action' => 'delete', $planPago['id']), null, __('Are you sure you want to delete # %s?', $planPago['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

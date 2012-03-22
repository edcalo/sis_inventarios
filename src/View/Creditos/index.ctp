<div class="creditos index">
	<h2><?php echo __('Creditos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('venta_id');?></th>
			<th><?php echo $this->Paginator->sort('cuota_inicial');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($creditos as $credito): ?>
	<tr>
		<td><?php echo h($credito['Credito']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($credito['Venta']['fecha_venta'], array('controller' => 'ventas', 'action' => 'view', $credito['Venta']['id'])); ?>
		</td>
		<td><?php echo h($credito['Credito']['cuota_inicial']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $credito['Credito']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $credito['Credito']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $credito['Credito']['id']), null, __('Are you sure you want to delete # %s?', $credito['Credito']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Credito'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plan Pagos'), array('controller' => 'plan_pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plan Pago'), array('controller' => 'plan_pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>

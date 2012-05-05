<div class="monedas view">
<h2><?php  echo __('Moneda');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Moneda'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['nombre_moneda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Simbolo Moneda'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['simbolo_moneda']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Moneda'), array('action' => 'edit', $moneda['Moneda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Moneda'), array('action' => 'delete', $moneda['Moneda']['id']), null, __('Are you sure you want to delete # %s?', $moneda['Moneda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Monedas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moneda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Compras');?></h3>
	<?php if (!empty($moneda['Compra'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Credito Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Proveedor Id'); ?></th>
		<th><?php echo __('Fecha Compra'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Moneda Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($moneda['Compra'] as $compra): ?>
		<tr>
			<td><?php echo $compra['id'];?></td>
			<td><?php echo $compra['credito_id'];?></td>
			<td><?php echo $compra['empleado_id'];?></td>
			<td><?php echo $compra['proveedor_id'];?></td>
			<td><?php echo $compra['fecha_compra'];?></td>
			<td><?php echo $compra['monto_total'];?></td>
			<td><?php echo $compra['moneda_id'];?></td>
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

<div class="proveedores view">
<h2><?php  echo __('Proveedor');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['nombre_proveedor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Proveedor'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['direccion_proveedor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Contacto'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['email_contacto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedor'), array('action' => 'edit', $proveedor['Proveedor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['id']), null, __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Compras');?></h3>
	<?php if (!empty($proveedor['Compra'])):?>
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
		foreach ($proveedor['Compra'] as $compra): ?>
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

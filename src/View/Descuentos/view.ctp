<div class="descuentos view">
<h2><?php  echo __('Descuento');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Descuento'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['nombre_descuento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Incicio Descuento'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['fecha_incicio_descuento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Fin Descuento'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['fecha_fin_descuento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuota Inicial'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['cuota_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Descuento'); ?></dt>
		<dd>
			<?php echo h($descuento['Descuento']['descripcion_descuento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Descuento'), array('action' => 'edit', $descuento['Descuento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Descuento'), array('action' => 'delete', $descuento['Descuento']['id']), null, __('Are you sure you want to delete # %s?', $descuento['Descuento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Descuentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Descuento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ventas'), array('controller' => 'ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ventas');?></h3>
	<?php if (!empty($descuento['Venta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Descuento Id'); ?></th>
		<th><?php echo __('Empleado Id'); ?></th>
		<th><?php echo __('Fecha Venta'); ?></th>
		<th><?php echo __('Pagado'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($descuento['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['id'];?></td>
			<td><?php echo $venta['cliente_id'];?></td>
			<td><?php echo $venta['descuento_id'];?></td>
			<td><?php echo $venta['empleado_id'];?></td>
			<td><?php echo $venta['fecha_venta'];?></td>
			<td><?php echo $venta['pagado'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ventas', 'action' => 'view', $venta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ventas', 'action' => 'edit', $venta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ventas', 'action' => 'delete', $venta['id']), null, __('Are you sure you want to delete # %s?', $venta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Venta'), array('controller' => 'ventas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

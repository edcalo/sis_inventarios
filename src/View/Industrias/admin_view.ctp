<div class="industrias view">
<h2><?php  echo __('Industria');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($industria['Industria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Industria'); ?></dt>
		<dd>
			<?php echo h($industria['Industria']['nombre_industria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Industria'); ?></dt>
		<dd>
			<?php echo h($industria['Industria']['descripcion_industria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Industria'), array('action' => 'edit', $industria['Industria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Industria'), array('action' => 'delete', $industria['Industria']['id']), null, __('Are you sure you want to delete # %s?', $industria['Industria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Industrias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items');?></h3>
	<?php if (!empty($industria['Item'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Industria Id'); ?></th>
		<th><?php echo __('Almacen Id'); ?></th>
		<th><?php echo __('Nombre Articulo'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Numero De Serie'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($industria['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id'];?></td>
			<td><?php echo $item['marca_id'];?></td>
			<td><?php echo $item['grupo_id'];?></td>
			<td><?php echo $item['industria_id'];?></td>
			<td><?php echo $item['almacen_id'];?></td>
			<td><?php echo $item['nombre_articulo'];?></td>
			<td><?php echo $item['descripcion'];?></td>
			<td><?php echo $item['numero_de_serie'];?></td>
			<td><?php echo $item['codigo'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

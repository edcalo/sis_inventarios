<div class="comprasItemes index">
	<h2><?php echo __('Compras Itemes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('item_id');?></th>
			<th><?php echo $this->Paginator->sort('compra_id');?></th>
			<th><?php echo $this->Paginator->sort('precio_de_compra');?></th>
			<th><?php echo $this->Paginator->sort('recio_referencial_de_vewnta');?></th>
			<th><?php echo $this->Paginator->sort('garantia');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($comprasItemes as $comprasItem): ?>
	<tr>
		<td><?php echo h($comprasItem['ComprasItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($comprasItem['Item']['nombre_articulo'], array('controller' => 'items', 'action' => 'view', $comprasItem['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($comprasItem['Compra']['fecha_compra'], array('controller' => 'compras', 'action' => 'view', $comprasItem['Compra']['id'])); ?>
		</td>
		<td><?php echo h($comprasItem['ComprasItem']['precio_de_compra']); ?>&nbsp;</td>
		<td><?php echo h($comprasItem['ComprasItem']['recio_referencial_de_vewnta']); ?>&nbsp;</td>
		<td><?php echo h($comprasItem['ComprasItem']['garantia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comprasItem['ComprasItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comprasItem['ComprasItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comprasItem['ComprasItem']['id']), null, __('Are you sure you want to delete # %s?', $comprasItem['ComprasItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Compras Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>

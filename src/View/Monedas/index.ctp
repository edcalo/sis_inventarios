<div class="monedas index">
	<h2><?php echo __('Monedas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_moneda');?></th>
			<th><?php echo $this->Paginator->sort('simbolo_moneda');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($monedas as $moneda): ?>
	<tr>
		<td><?php echo h($moneda['Moneda']['id']); ?>&nbsp;</td>
		<td><?php echo h($moneda['Moneda']['nombre_moneda']); ?>&nbsp;</td>
		<td><?php echo h($moneda['Moneda']['simbolo_moneda']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $moneda['Moneda']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $moneda['Moneda']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $moneda['Moneda']['id']), null, __('Are you sure you want to delete # %s?', $moneda['Moneda']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Moneda'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>

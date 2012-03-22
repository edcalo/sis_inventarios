<div class="dosificaciones index">
	<h2><?php echo __('Dosificaciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo_dosificacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_inicio_emicion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_limite_emision');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_autorizacion');?></th>
			<th><?php echo $this->Paginator->sort('numero_de_factura');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($dosificaciones as $dosificacion): ?>
	<tr>
		<td><?php echo h($dosificacion['Dosificacion']['id']); ?>&nbsp;</td>
		<td><?php echo h($dosificacion['Dosificacion']['codigo_dosificacion']); ?>&nbsp;</td>
		<td><?php echo h($dosificacion['Dosificacion']['fecha_inicio_emicion']); ?>&nbsp;</td>
		<td><?php echo h($dosificacion['Dosificacion']['fecha_limite_emision']); ?>&nbsp;</td>
		<td><?php echo h($dosificacion['Dosificacion']['numero_de_autorizacion']); ?>&nbsp;</td>
		<td><?php echo h($dosificacion['Dosificacion']['numero_de_factura']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dosificacion['Dosificacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dosificacion['Dosificacion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dosificacion['Dosificacion']['id']), null, __('Are you sure you want to delete # %s?', $dosificacion['Dosificacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dosificacion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="comprasItemes view">
<h2><?php  echo __('Compras Item');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comprasItem['ComprasItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comprasItem['Item']['nombre_articulo'], array('controller' => 'items', 'action' => 'view', $comprasItem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compra'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comprasItem['Compra']['fecha_compra'], array('controller' => 'compras', 'action' => 'view', $comprasItem['Compra']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio De Compra'); ?></dt>
		<dd>
			<?php echo h($comprasItem['ComprasItem']['precio_de_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recio Referencial De Vewnta'); ?></dt>
		<dd>
			<?php echo h($comprasItem['ComprasItem']['recio_referencial_de_vewnta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Garantia'); ?></dt>
		<dd>
			<?php echo h($comprasItem['ComprasItem']['garantia']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Compras Item'), array('action' => 'edit', $comprasItem['ComprasItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Compras Item'), array('action' => 'delete', $comprasItem['ComprasItem']['id']), null, __('Are you sure you want to delete # %s?', $comprasItem['ComprasItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras Itemes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compras Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>

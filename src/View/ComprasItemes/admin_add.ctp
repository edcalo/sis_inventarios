<div class="comprasItemes form">
<?php echo $this->Form->create('ComprasItem');?>
	<fieldset>
		<legend><?php echo __('Admin Add Compras Item'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('compra_id');
		echo $this->Form->input('precio_de_compra');
		echo $this->Form->input('recio_referencial_de_vewnta');
		echo $this->Form->input('garantia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Compras Itemes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>

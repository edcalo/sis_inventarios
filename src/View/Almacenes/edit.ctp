<div class="almacenes form">
<?php echo $this->Form->create('Almacen');?>
	<fieldset>
		<legend><?php echo __('Edit Almacen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_almacen');
		echo $this->Form->input('descripcion_almacen');
		echo $this->Form->input('direccion_almacen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Almacen.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Almacen.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Almacenes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

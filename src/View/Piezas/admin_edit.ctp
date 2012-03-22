<div class="piezas form">
<?php echo $this->Form->create('Pieza');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Pieza'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('articulo_id');
		echo $this->Form->input('nombre_pieza');
		echo $this->Form->input('numero_de_serie');
		echo $this->Form->input('descripcion_pieza');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pieza.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pieza.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Piezas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

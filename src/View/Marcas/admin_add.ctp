<div class="marcas form">
<?php echo $this->Form->create('Marca');?>
	<fieldset>
		<legend><?php echo __('Admin Add Marca'); ?></legend>
	<?php
		echo $this->Form->input('nombre_marca');
		echo $this->Form->input('descripcion_marca');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Marcas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

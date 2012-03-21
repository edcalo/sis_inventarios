<div class="industrias form">
<?php echo $this->Form->create('Industria');?>
	<fieldset>
		<legend><?php echo __('Admin Add Industria'); ?></legend>
	<?php
		echo $this->Form->input('nombre_industria');
		echo $this->Form->input('descripcion_industria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Industrias'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

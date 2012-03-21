<div class="industrias form">
<?php echo $this->Form->create('Industria');?>
	<fieldset>
		<legend><?php echo __('Edit Industria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_industria');
		echo $this->Form->input('descripcion_industria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Industria.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Industria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Industrias'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

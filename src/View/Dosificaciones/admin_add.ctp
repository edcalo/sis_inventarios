<div class="dosificaciones form">
<?php echo $this->Form->create('Dosificacion');?>
	<fieldset>
		<legend><?php echo __('Admin Add Dosificacion'); ?></legend>
	<?php
		echo $this->Form->input('codigo_dosificacion');
		echo $this->Form->input('fecha_inicio_emicion');
		echo $this->Form->input('fecha_limite_emision');
		echo $this->Form->input('numero_de_autorizacion');
		echo $this->Form->input('numero_de_factura');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dosificaciones'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>

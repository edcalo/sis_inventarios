<div class="proveedores form">
<?php echo $this->Form->create('Proveedor');?>
	<fieldset>
		<legend><?php echo __('Admin Add Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('nombre_proveedor');
		echo $this->Form->input('direccion_proveedor');
		echo $this->Form->input('telefono');
		echo $this->Form->input('contacto');
		echo $this->Form->input('email');
		echo $this->Form->input('email_contacto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>

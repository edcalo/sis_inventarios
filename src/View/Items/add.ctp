<div class="items form">
<?php echo $this->Form->create('Item');?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('marca_id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('industria_id');
		echo $this->Form->input('almacen_id');
		echo $this->Form->input('nombre_articulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('numero_de_serie');
		echo $this->Form->input('codigo');
		echo $this->Form->input('Compra');
		echo $this->Form->input('Factura');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industrias'), array('controller' => 'industrias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industria'), array('controller' => 'industrias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Almacenes'), array('controller' => 'almacenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Almacen'), array('controller' => 'almacenes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>

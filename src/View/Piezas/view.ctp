<div class="piezas view">
<h2><?php  echo __('Pieza');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Articulo Id'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['articulo_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Pieza'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['nombre_pieza']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Serie'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['numero_de_serie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion Pieza'); ?></dt>
		<dd>
			<?php echo h($pieza['Pieza']['descripcion_pieza']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pieza'), array('action' => 'edit', $pieza['Pieza']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pieza'), array('action' => 'delete', $pieza['Pieza']['id']), null, __('Are you sure you want to delete # %s?', $pieza['Pieza']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Piezas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pieza'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>

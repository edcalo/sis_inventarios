<div class="dosificaciones view">
<h2><?php  echo __('Dosificacion');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dosificacion['Dosificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Dosificacion'); ?></dt>
		<dd>
			<?php echo h($dosificacion['Dosificacion']['codigo_dosificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio Emicion'); ?></dt>
		<dd>
			<?php echo h($dosificacion['Dosificacion']['fecha_inicio_emicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Limite Emision'); ?></dt>
		<dd>
			<?php echo h($dosificacion['Dosificacion']['fecha_limite_emision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Autorizacion'); ?></dt>
		<dd>
			<?php echo h($dosificacion['Dosificacion']['numero_de_autorizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero De Factura'); ?></dt>
		<dd>
			<?php echo h($dosificacion['Dosificacion']['numero_de_factura']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dosificacion'), array('action' => 'edit', $dosificacion['Dosificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dosificacion'), array('action' => 'delete', $dosificacion['Dosificacion']['id']), null, __('Are you sure you want to delete # %s?', $dosificacion['Dosificacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dosificaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dosificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Facturas');?></h3>
	<?php if (!empty($dosificacion['Factura'])):?>
		<dl>
			<dt><?php echo __('Dosificacion Id');?></dt>
		<dd>
	<?php echo $dosificacion['Factura']['dosificacion_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $dosificacion['Factura']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Venta Id');?></dt>
		<dd>
	<?php echo $dosificacion['Factura']['venta_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Fecha Factura');?></dt>
		<dd>
	<?php echo $dosificacion['Factura']['fecha_factura'];?>
&nbsp;</dd>
		<dt><?php echo __('Monto Total');?></dt>
		<dd>
	<?php echo $dosificacion['Factura']['monto_total'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Factura'), array('controller' => 'facturas', 'action' => 'edit', $dosificacion['Factura']['id'])); ?></li>
			</ul>
		</div>
	</div>
	
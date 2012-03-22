<?php
App::uses('AppModel', 'Model');
/**
 * DetalleNotaVenta Model
 *
 * @property NotaDeVenta $NotaDeVenta
 * @property Item $Item
 */
class DetalleNotaVenta extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'precio_venta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'NotaDeVenta' => array(
			'className' => 'NotaDeVenta',
			'foreignKey' => 'nota_de_venta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * FacturaItem Model
 *
 * @property Item $Item
 * @property Factura $Factura
 */
class FacturaItem extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'factura_items';
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
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Factura' => array(
			'className' => 'Factura',
			'foreignKey' => 'factura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

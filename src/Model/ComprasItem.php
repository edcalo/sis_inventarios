<?php
App::uses('AppModel', 'Model');
/**
 * ComprasItem Model
 *
 * @property Item $Item
 * @property Compra $Compra
 */
class ComprasItem extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'compras_items';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'precio_de_compra';

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
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'compra_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

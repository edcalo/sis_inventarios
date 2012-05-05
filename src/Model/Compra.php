<?php
App::uses('AppModel', 'Model');
/**
 * Compra Model
 *
 * @property Credito $Credito
 * @property Empleado $Empleado
 * @property Proveedor $Proveedor
 * @property Item $Item
 */
class Compra extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha_compra';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Credito' => array(
			'className' => 'Credito',
			'foreignKey' => 'credito_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proveedor' => array(
			'className' => 'Proveedor',
			'foreignKey' => 'proveedor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Moneda' => array(
			'className' => 'Moneda',
			'foreignKey' => 'moneda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'compra_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

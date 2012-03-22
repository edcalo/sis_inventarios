<?php
App::uses('AppModel', 'Model');
/**
 * Venta Model
 *
 * @property Cliente $Cliente
 * @property Descuento $Descuento
 * @property Empleado $Empleado
 * @property Factura $Factura
 * @property Credito $Credito
 * @property NotaDeVenta $NotaDeVenta
 */
class Venta extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha_venta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Descuento' => array(
			'className' => 'Descuento',
			'foreignKey' => 'descuento_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Factura' => array(
			'className' => 'Factura',
			'foreignKey' => 'venta_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Credito' => array(
			'className' => 'Credito',
			'foreignKey' => 'venta_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'NotaDeVenta' => array(
			'className' => 'NotaDeVenta',
			'foreignKey' => 'venta_id',
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

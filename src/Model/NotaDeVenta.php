<?php
App::uses('AppModel', 'Model');
/**
 * NotaDeVenta Model
 *
 * @property Venta $Venta
 * @property DetalleNotaVenta $DetalleNotaVenta
 */
class NotaDeVenta extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha_nota_venta';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'venta_id',
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
		'DetalleNotaVenta' => array(
			'className' => 'DetalleNotaVenta',
			'foreignKey' => 'nota_de_venta_id',
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

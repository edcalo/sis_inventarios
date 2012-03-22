<?php
App::uses('AppModel', 'Model');
/**
 * Factura Model
 *
 * @property Dosificacion $Dosificacion
 * @property Venta $Venta
 * @property FacturaItem $FacturaItem
 */
class Factura extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha_factura';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dosificacion' => array(
			'className' => 'Dosificacion',
			'foreignKey' => 'dosificacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
		'FacturaItem' => array(
			'className' => 'FacturaItem',
			'foreignKey' => 'factura_id',
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

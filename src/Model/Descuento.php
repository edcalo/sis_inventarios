<?php
App::uses('AppModel', 'Model');
/**
 * Descuento Model
 *
 * @property Venta $Venta
 */
class Descuento extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_descuento';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'descuento_id',
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

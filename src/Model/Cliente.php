<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property Venta $Venta
 */
class Cliente extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombres';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'cliente_id',
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

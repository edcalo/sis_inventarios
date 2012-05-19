<?php
App::uses('AppModel', 'Model');
/**
 * Moneda Model
 *
 * @property Compra $Compra
 */
class Moneda extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_moneda';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'moneda_id',
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

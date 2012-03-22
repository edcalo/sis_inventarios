<?php
App::uses('AppModel', 'Model');
/**
 * Proveedor Model
 *
 * @property Compra $Compra
 */
class Proveedor extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_proveedor';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'proveedor_id',
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

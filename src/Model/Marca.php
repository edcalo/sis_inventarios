<?php
App::uses('AppModel', 'Model');
/**
 * Marca Model
 *
 * @property Item $Item
 */
class Marca extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_marca';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'marca_id',
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

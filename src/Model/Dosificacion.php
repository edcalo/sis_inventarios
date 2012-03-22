<?php
App::uses('AppModel', 'Model');
/**
 * Dosificacion Model
 *
 * @property Factura $Factura
 */
class Dosificacion extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero_de_autorizacion';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Factura' => array(
			'className' => 'Factura',
			'foreignKey' => 'dosificacion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

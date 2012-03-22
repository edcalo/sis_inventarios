<?php
App::uses('AppModel', 'Model');
/**
 * PlanPago Model
 *
 * @property Credito $Credito
 * @property Cuota $Cuota
 */
class PlanPago extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha_inicio_pagos';

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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Cuota' => array(
			'className' => 'Cuota',
			'foreignKey' => 'plan_pago_id',
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

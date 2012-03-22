<?php
App::uses('AppModel', 'Model');
/**
 * Cuota Model
 *
 * @property PlanDePago $PlanDePago
 */
class Cuota extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'monto_capital';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PlanPago' => array(
			'className' => 'PlanPago',
			'foreignKey' => 'plan_pago_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

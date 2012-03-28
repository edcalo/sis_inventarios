<?php

App::uses('AppModel', 'Model');

/**
 * Rol Model
 *
 * @property Cuenta $Cuenta
 */
class Rol extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombre_rol';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'nombre_rol' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'El nombre del Rol es requerido'
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Cuenta' => array(
            'className' => 'Cuenta',
            'foreignKey' => 'rol_id',
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

<?php

App::uses('AppModel', 'Model');

/**
 * Almacen Model
 *
 * @property Item $Item
 */
class Almacen extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombre_almacen';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'nombre_almacen' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'El nombre de almacen es requerido',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'unico' => array(
                'rule' => array('isUnique'),
                'message' => 'El Nombre de Almacen ya existe',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'custom' => array(
                'rule' => array('custom', '/^[a-zA-Z\s]+$/'),
                'message' => 'Solo Caracteres y Espacios'
            )
        ),
        'direccion_almacen' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Direccion de almacen requerida',
                'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
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
        'Item' => array(
            'className' => 'Item',
            'foreignKey' => 'almacen_id',
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

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
        'nit_ci' => array(
            'alphanumeric' => array(
                'rule' => array('alphanumeric'),
                'message' => 'Debe ser Numeros o caracteres',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Este campo de NIT o CI es requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        'nombres' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Este campo de nombres es requerido',
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
        'apellido_paterno' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'El Apellido paterno es requerido',
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
        'telefono' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Debe ser solo numeros',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'unico' => array(
                'rule' => array('isUnique'),
                'message' => 'El numero ya esta registrado',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'debe ser formato email',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'email requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'unico' => array(
                'rule' => array('isUnique'),
                'message' => 'El email ya esta registrado',
            //'allowEmpty' => false,
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

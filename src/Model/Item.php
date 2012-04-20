<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property Marca $Marca
 * @property Grupo $Grupo
 * @property Industria $Industria
 * @property Almacen $Almacen
 * @property Compra $Compra
 * @property DetalleNotaVenta $DetalleNotaVenta
 * @property Pieza $Pieza
 * @property Factura $Factura
 */
class Item extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_articulo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Marca' => array(
			'className' => 'Marca',
			'foreignKey' => 'marca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Grupo' => array(
			'className' => 'Grupo',
			'foreignKey' => 'grupo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Industria' => array(
			'className' => 'Industria',
			'foreignKey' => 'industria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Almacen' => array(
			'className' => 'Almacen',
			'foreignKey' => 'almacen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'compra_id',
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
		'DetalleNotaVenta' => array(
			'className' => 'DetalleNotaVenta',
			'foreignKey' => 'item_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Pieza' => array(
			'className' => 'Pieza',
			'foreignKey' => 'item_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Factura' => array(
			'className' => 'Factura',
			'joinTable' => 'factura_items',
			'foreignKey' => 'item_id',
			'associationForeignKey' => 'factura_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}

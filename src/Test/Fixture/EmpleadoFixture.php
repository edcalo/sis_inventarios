<?php
/* Empleado Fixture generated on: 2012-03-21 08:58:49 : 1332316729 */

/**
 * EmpleadoFixture
 *
 */
class EmpleadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'doc_identidad' => array('type' => 'string', 'null' => true, 'length' => 20),
		'nombres' => array('type' => 'string', 'null' => true, 'length' => 30),
		'apellido_paterno' => array('type' => 'string', 'null' => true, 'length' => 50),
		'apellido_materno' => array('type' => 'string', 'null' => true, 'length' => 50),
		'fecha_ingreso' => array('type' => 'date', 'null' => true),
		'contacto' => array('type' => 'string', 'null' => true),
		'telefono' => array('type' => 'integer', 'null' => true),
		'email' => array('type' => 'string', 'null' => true, 'length' => 50),
		'tipo_doc_identidad' => array('type' => 'string', 'null' => true, 'length' => 20),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'empleados_pk' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'doc_identidad' => 'Lorem ipsum dolor ',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellido_paterno' => 'Lorem ipsum dolor sit amet',
			'apellido_materno' => 'Lorem ipsum dolor sit amet',
			'fecha_ingreso' => '2012-03-21',
			'contacto' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'tipo_doc_identidad' => 'Lorem ipsum dolor '
		),
	);
}

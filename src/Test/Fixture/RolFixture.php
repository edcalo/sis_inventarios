<?php
/* Rol Fixture generated on: 2012-03-21 09:02:13 : 1332316933 */

/**
 * RolFixture
 *
 */
class RolFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nombre_rol' => array('type' => 'string', 'null' => true, 'length' => 20),
		'descripcion' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'roles_pk' => array('unique' => true, 'column' => 'id')),
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
			'nombre_rol' => 'Lorem ipsum dolor ',
			'descripcion' => 'Lorem ipsum dolor sit amet'
		),
	);
}

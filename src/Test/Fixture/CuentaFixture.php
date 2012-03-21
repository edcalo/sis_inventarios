<?php
/* Cuenta Fixture generated on: 2012-03-21 09:03:55 : 1332317035 */

/**
 * CuentaFixture
 *
 */
class CuentaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'empleado_id' => array('type' => 'integer', 'null' => false),
		'rol_id' => array('type' => 'integer', 'null' => false),
		'nombre_usuario' => array('type' => 'string', 'null' => true, 'length' => 15),
		'password' => array('type' => 'string', 'null' => true, 'length' => 32),
		'fecha_inicio_valides' => array('type' => 'date', 'null' => true),
		'fecha_final_valides' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'cuentas_pk' => array('unique' => true, 'column' => 'id'), 'cuenta_de_usuario_fk' => array('unique' => false, 'column' => 'empleado_id'), 'tiene_rol_fk' => array('unique' => false, 'column' => 'rol_id')),
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
			'empleado_id' => 1,
			'rol_id' => 1,
			'nombre_usuario' => 'Lorem ipsum d',
			'password' => 'Lorem ipsum dolor sit amet',
			'fecha_inicio_valides' => '2012-03-21',
			'fecha_final_valides' => '2012-03-21'
		),
	);
}

<?php
/* Empleado Test cases generated on: 2012-03-21 08:58:49 : 1332316729*/
App::uses('Empleado', 'Model');

/**
 * Empleado Test Case
 *
 */
class EmpleadoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.empleado', 'app.compra', 'app.cuenta', 'app.venta');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Empleado = ClassRegistry::init('Empleado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Empleado);

		parent::tearDown();
	}

}

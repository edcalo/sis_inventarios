<?php
/* Cuenta Test cases generated on: 2012-03-21 09:03:55 : 1332317035*/
App::uses('Cuenta', 'Model');

/**
 * Cuenta Test Case
 *
 */
class CuentaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.cuenta', 'app.empleado', 'app.compra', 'app.venta', 'app.rol');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Cuenta = ClassRegistry::init('Cuenta');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuenta);

		parent::tearDown();
	}

}

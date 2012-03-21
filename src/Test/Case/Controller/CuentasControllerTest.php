<?php
/* Cuentas Test cases generated on: 2012-03-21 09:04:30 : 1332317070*/
App::uses('CuentasController', 'Controller');

/**
 * TestCuentasController *
 */
class TestCuentasController extends CuentasController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * CuentasController Test Case
 *
 */
class CuentasControllerTestCase extends CakeTestCase {
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

		$this->Cuentas = new TestCuentasController();
		$this->Cuentas->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cuentas);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {

	}

/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {

	}

/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {

	}

/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {

	}

/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {

	}

}

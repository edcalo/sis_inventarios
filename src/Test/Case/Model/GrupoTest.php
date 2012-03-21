<?php
/* Grupo Test cases generated on: 2012-03-21 08:38:33 : 1332315513*/
App::uses('Grupo', 'Model');

/**
 * Grupo Test Case
 *
 */
class GrupoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.grupo', 'app.item', 'app.marca', 'app.industria', 'app.almacen', 'app.compra', 'app.compras_item', 'app.factura', 'app.factura_item');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Grupo = ClassRegistry::init('Grupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grupo);

		parent::tearDown();
	}

}

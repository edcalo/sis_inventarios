<?php
/* Grupo Fixture generated on: 2012-03-21 08:38:33 : 1332315513 */

/**
 * GrupoFixture
 *
 */
class GrupoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'grupo_id' => array('type' => 'integer', 'null' => true),
		'nombre_grupo' => array('type' => 'string', 'null' => true, 'length' => 50),
		'descripcion_grupo' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'grupos_pk' => array('unique' => true, 'column' => 'id'), 'tiene_subgrupos_fk' => array('unique' => false, 'column' => 'grupo_id')),
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
			'grupo_id' => 1,
			'nombre_grupo' => 'Lorem ipsum dolor sit amet',
			'descripcion_grupo' => 'Lorem ipsum dolor sit amet'
		),
	);
}

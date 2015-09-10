<?php
class Imageurl extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'default';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'spots' => array(
					'imageurl' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8', 'after' => 'longitude'),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'spots' => array('imageurl'),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}

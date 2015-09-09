<?php
class Init extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'init';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'genres' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'name' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'indexes' => array(
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB'),
				),
				'plan-spots' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'plan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'spot_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'comment' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'sort' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'trans' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'distance' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'indexes' => array(
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB'),
				),
				'plans' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'name' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'start' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'member' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'cost' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'season' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'indexes' => array(
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB', 'comment' => 'palnsですよーって'),
				),
				'spots' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'name' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'spot-tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'genre_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'comment' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'latitude' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
					'longitude' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
					'indexes' => array(
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'genres', 'plan-spots', 'plans', 'spots'
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

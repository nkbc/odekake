<?php
class RenameTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'rename_table';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'genres' => array(
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
				'plans' => array(
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
				'spots' => array(
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
			),
			'create_table' => array(
				'plan_spots' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'plan_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'spot_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'comment' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'sort' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'trans' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
					'distance' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB'),
				),
			),
			'drop_table' => array(
				'plan-spots'
			),
		),
		'down' => array(
			'drop_field' => array(
				'genres' => array('indexes' => array('PRIMARY')),
				'plans' => array('indexes' => array('PRIMARY')),
				'spots' => array('indexes' => array('PRIMARY')),
			),
			'drop_table' => array(
				'plan_spots'
			),
			'create_table' => array(
				'planspots' => array(
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

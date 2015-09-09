<?php
class DeleteSpotTagId extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'delete_spot_tag_id';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'drop_field' => array(
				'spots' => array('spot-tag_id'),
			),
		),
		'down' => array(
			'create_field' => array(
				'spots' => array(
					'spot-tag_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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

<?php
class AddGalleryDetailsTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'gallery_details' => array(
					'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => '10', 'key' => 'primary'),
					'photo' => array('type' => 'string'),
					'gallery_id' => array('type' => 'integer')
				)
			)
		),
		'down' => array(
			'drop_table' => array('gallery_details')
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}

<?php
class CreateDefaultTablePramukap extends CakeMigration {

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
			'alter_field' => array(
				'categories' => array(
					'kategori' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
				),
				'comments' => array(
					'nama' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'komentar' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'status' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'post_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'gallery_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
				),
				'galleries' => array(
					'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'teks' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'status' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'tag' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'keyword' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
				),
				'pages' => array(
					'page' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'teks' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
				),
				'posts' => array(
					'sub_title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'photo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'thumb' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'photo_text' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'tag' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'keyword' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'kategori_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
					'status' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
					'hit' => array('type' => 'integer', 'null' => true, 'default' => NULL),
				),
				'users' => array(
					'username' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'nama' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'level' => array('type' => 'integer', 'null' => true, 'default' => NULL),
				),
			),
		),
		'down' => array(
			'alter_field' => array(
				'categories' => array(
					'kategori' => array('type' => 'string'),
				),
				'comments' => array(
					'nama' => array('type' => 'string'),
					'email' => array('type' => 'string'),
					'komentar' => array('type' => 'text'),
					'status' => array('type' => 'integer'),
					'post_id' => array('type' => 'integer'),
					'gallery_id' => array('type' => 'integer'),
				),
				'galleries' => array(
					'title' => array('type' => 'string'),
					'teks' => array('type' => 'text'),
					'status' => array('type' => 'integer'),
					'tag' => array('type' => 'string'),
					'keyword' => array('type' => 'string'),
					'user_id' => array('type' => 'integer'),
				),
				'pages' => array(
					'page' => array('type' => 'string'),
					'teks' => array('type' => 'text'),
				),
				'posts' => array(
					'sub_title' => array('type' => 'string'),
					'photo' => array('type' => 'string'),
					'thumb' => array('type' => 'string'),
					'photo_text' => array('type' => 'string'),
					'tag' => array('type' => 'string'),
					'keyword' => array('type' => 'string'),
					'user_id' => array('type' => 'integer'),
					'kategori_id' => array('type' => 'integer'),
					'status' => array('type' => 'integer', 'length' => 1),
					'hit' => array('type' => 'integer'),
				),
				'users' => array(
					'username' => array('type' => 'string'),
					'password' => array('type' => 'string'),
					'email' => array('type' => 'string'),
					'nama' => array('type' => 'string'),
					'level' => array('type' => 'integer'),
				),
			),
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

<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $posts = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
	  'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 255, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
	  'sub_title' => array('type' => 'string'),
	  'body' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
	  'headline' => array('type' => 'integer', 'null' => true, 'default' => NULL),
	  'photo' => array('type' => 'string'),
	  'thumb' => array('type' => 'string'),
	  'photo_text' => array('type' => 'string'),
	  'tag' => array('type' => 'string'),
	  'keyword' => array('type' => 'string'),
	  'user_id' => array('type' => 'integer'),
	  'kategori_id' => array('type' => 'integer'),
	  'status' => array('type' => 'integer', 'length' => 1),
	  'hit' => array('type' => 'integer'),
	  'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
	  'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

    public $users = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
	  'username' => array('type' => 'string'),
	  'password' => array('type' => 'string'),
	  'email' => array('type' => 'string'),
	  'nama' => array('type' => 'string'),
	  'level' => array('type' => 'integer'),
	  'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
	  'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	public $categories = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
	  'kategori' => array('type' => 'string'),
	  'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
	  'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	public $galleries = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
	  'title' => array('type' => 'string'),
	  'teks' => array('type' => 'text'),
	  'status' => array('type' => 'integer'),
	  'tag' => array('type' => 'string'),
	  'keyword' => array('type' => 'string'),
	  'user_id' => array('type' => 'integer'),
	  'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
	  'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	public $comments = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
	  'nama' => array('type' => 'string'),
	  'email' => array('type' => 'string'),
	  'komentar' => array('type' => 'text'),
	  'status' => array('type' => 'integer'),
	  'post_id' => array('type' => 'integer'),
	  'gallery_id' => array('type' => 'integer'),
	  'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
	  'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	public $pages = array(
	  'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
	  'page' => array('type' => 'string'),
	  'teks' => array('type' => 'text'),
	  'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
	  'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
	  'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

}

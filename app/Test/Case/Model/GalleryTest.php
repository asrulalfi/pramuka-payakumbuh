<?php
App::uses('Gallery', 'Model');

/**
 * Gallery Test Case
 *
 */
class GalleryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gallery', 'app.user', 'app.comment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Gallery = ClassRegistry::init('Gallery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gallery);

		parent::tearDown();
	}

}

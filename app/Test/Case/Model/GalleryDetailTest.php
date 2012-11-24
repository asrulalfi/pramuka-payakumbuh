<?php
App::uses('GalleryDetail', 'Model');

/**
 * GalleryDetail Test Case
 *
 */
class GalleryDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gallery_detail', 'app.gallery', 'app.user', 'app.post', 'app.category', 'app.comment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GalleryDetail = ClassRegistry::init('GalleryDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GalleryDetail);

		parent::tearDown();
	}

}

<?php
App::uses('GalleriesController', 'Controller');

/**
 * TestGalleriesController *
 */
class TestGalleriesController extends GalleriesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * GalleriesController Test Case
 *
 */
class GalleriesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gallery', 'app.user', 'app.post', 'app.kategori', 'app.comment');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Galleries = new TestGalleriesController();
		$this->Galleries->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Galleries);

		parent::tearDown();
	}

}

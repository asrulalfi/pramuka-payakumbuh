<?php
App::uses('CommentsController', 'Controller');

/**
 * TestCommentsController *
 */
class TestCommentsController extends CommentsController {
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
 * CommentsController Test Case
 *
 */
class CommentsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.comment', 'app.post', 'app.user', 'app.gallery', 'app.kategori');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comments = new TestCommentsController();
		$this->Comments->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comments);

		parent::tearDown();
	}

}

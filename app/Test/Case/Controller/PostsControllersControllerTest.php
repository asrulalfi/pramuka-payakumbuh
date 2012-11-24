<?php
App::uses('PostsControllersController', 'Controller');

/**
 * TestPostsControllersController *
 */
class TestPostsControllersController extends PostsControllersController {
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
 * PostsControllersController Test Case
 *
 */
class PostsControllersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.posts_controller');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PostsControllers = new TestPostsControllersController();
		$this->PostsControllers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PostsControllers);

		parent::tearDown();
	}

}

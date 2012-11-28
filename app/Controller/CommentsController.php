<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 */
class CommentsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public $components = array(
		'Paginator',
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'posts', 'action' => 'pending_posts'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
		)
	);

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
	}
	
	public function add(){

	}

	public function index(){
		$this->paginate = array(
			'conditions' => array('Comment.status' => 1),
			'limit' => 10
		);

		$this->set('comments', $this->paginate('Comment'));
	}

	public function pending_comments(){

	}

	public function delete_all(){

	}
}

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
		if($this->request->is('post')){
			if($this->Comment->save($this->request->data)){
				$this->Session->setFlash('Berhasil menambahkan komentar'); 
			}else{
				$this->Session->setFlash('Gagal menambahkan komentar');
			}

			$this->redirect(array(
				  'controller' => 'posts',
				  'action' => 'read',
				  $this->request->data('Comment.post_id'),
				  str_replace(" ", "-", $this->request->data('Comment.title'))
				)
			);
		}
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

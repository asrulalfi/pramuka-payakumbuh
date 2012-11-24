<?php
App::uses('AppController', 'Controller');
/**
 * Galleries Controller
 *
 */
class GalleriesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	public $helpers = array('Tinymce', 'Custom');
	public $components = array(
				'Paginator',
				'Session',
				'Auth' => array(
					'loginRedirect' => array('controller' => 'posts', 'action' => 'pending_posts'),
					'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
				)
		   );
	public $layout = "admin";

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	public function add(){	 
	  if($this->request->is('post')){
	  	 if ( $this->Gallery->saveAll($this->request->data)) {
             $this->Session->setFlash(__("Gallery added."));
         }else{
         	$this->Session->setFlash(__("Gallery Not added."));
         }
	  }
	}

	public function index(){

		$this->paginate = array(
			'conditions' =>  array('Gallery.status =' => 2),
			'limit' => 10
		);

		$this->set('galleries', $this->paginate('Gallery'));

	}

}

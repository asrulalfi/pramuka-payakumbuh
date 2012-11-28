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
			'conditions' =>  array('Gallery.status =' => 1),
			'limit' => 10
		);

		$this->set('galleries', $this->paginate('Gallery'));

	}

	public function edit($id = null){
		$this->Gallery->id = $id;

		if($this->request->is('get')){
			$this->request->data = $this->Gallery->read();
		}else{
			if($this->Gallery->save($this->request->data)){
				$this->Session->setFlash('Berhasil update gallery');		
			}else{
				$this->Session->setFlash('Gagal update gallery');
			}
		}
	}

	public function pending_galleries(){
		$this->paginate = array(
			'conditions' =>  array('Gallery.status =' => 2),
			'limit' => 10
		);

		$this->set('galleries', $this->paginate('Gallery'));
	}

	public function delete($id = null){
		if($this->request->is('get')){

		}
		if($this->Gallery->delete($id)){
           $this->Session->setFlash('Berhasil delete Galleries');
           $this->redirect(array('action' => 'index'));      
		}
	}

	public function publish(){
		if($this->request->is('post')){
			for($i = 0; $i < count($this->request->data('idgallery')); $i++){
				$this->Gallery->id = $this->request->data("idgallery.$i");
				$this->Gallery->saveField('status', 1);
			}

			$this->Session->setFlash('Berhasil publish gallery');
		}

		$redirect = ($this->request->data) ? $this->request->data('action') : "index";
		$this->redirect(array('action' => $redirect ));
	}

	public function delete_all(){
		if($this->request->is('post')){
			for($i = 0; $i < count($this->request->data('idgallery')); $i++){
				$this->Gallery->id = $this->request->data("idgallery.$i");
				$this->Gallery->delete();
			}

			$this->Session->setFlash('Berhasil delete gallery');
		}

		$redirect = ($this->request->data) ? $this->request->data('action') : "index";
		$this->redirect(array('action' => $redirect ));
	}

}

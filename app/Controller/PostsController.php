<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public $helpers = array('Tinymce', 'Custom');

	public $layout = "admin";

	public $components = array(
    	'Session',
    	'Paginator',
    	'Auth' => array(
        	'loginRedirect' => array('controller' => 'posts', 'action' => 'pending_posts'),
        	'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
    	)    
	);

	public function beforeFilter(){
    	parent::beforeFilter();
    	$this->Auth->allow('index');
	}
    
	public function index(){

		// change default layout
		$this->layout = 'application';

		// set pagination
		$this->paginate = array(
    	  'limit' => 10
		);

		$data = $this->paginate("Post");
		$this->set("posts", $data);

	}

	public function list_posts(){
		// set pagination
		$this->paginate = array(
		  'conditions' => 'Post.status = 1',	
    	  'limit' => 10
		);

		$data = $this->paginate("Post");
		$this->set("posts", $data);
	}

	public function add(){
		// change default layout
		// $this->layout = "admin";
        
        // get list category
		$categories = $this->Post->Category->find('all');

        foreach($categories as $cat) {
          $categories_list["{$cat['Category']['id']}"] = "{$cat['Category']['kategori']}";
        }

		$this->set("Categories", $categories_list);


        if($this->request->is('post')){
           $this->Post->create();

           if($this->Post->save($this->request->data)){
              $this->Session->setFlash('Berhasil menambahkan berita');
              $this->redirect(array('action' => 'list_posts'));
           }else{
              $this->Session->setFlash('Gagal menambahkan berita');
           }
        }
	}

	public function view($id = null){
        
        $id == null ? $this->redirect(array('action' => 'index')) : "";

		$this->Post->id = $id;
		$this->set("post", $this->Post->read());
	}

	public function edit($id = null){
        
         // get list category
		$categories = $this->Post->Category->find('all');

        foreach($categories as $cat) {
          $categories_list["{$cat['Category']['id']}"] = "{$cat['Category']['kategori']}";
        }

		$this->set('Categories', $categories_list);

		$this->Post->id = $id;
		if($this->request->is('get')){
			$this->request->data = $this->Post->read();
		}else{
			if($this->Post->save($this->request->data)){
			  $this->Session->setFlash('Berita berhasil di update');	
			}else{
			  $this->Session->setFlash('Berita gagal di update');	
			}
		}
	}

	public function delete($id){
		if($this->request->is('get')){
           
		}
		if($this->Post->delete($id)){
           $this->Session->setFlash('Berhasil delete berita');
           $this->redirect(array('action' => 'list_posts'));      
		}
	}

	public function pending_posts(){
		$this->paginate = array(
 			'conditions' => 'Post.status = 2',
 			'limit' => 10
		);

		$data = $this->paginate("Post");
		$this->set('pending_posts', $data);
	}

	public function publish(){
		if($this->request->is('get')){
           
		}else{
			for($i=0; $i < count($this->request->data("idpost")); $i++){
				$this->Post->id = $this->request->data("idpost.$i");
				$this->Post->saveField('status', 1);	
			}
			$this->Session->setFlash('Berhasil publish berita');
		}

		$redirect = ($this->request->data('action')) ? $this->request->data('action') : "list_posts";
		$this->redirect(array('action' => $redirect));
	}

	public function delete_all(){
		if($this->request->is('post')){
			for($i=0; $i < count($this->request->data("idpost")); $i++){
				$this->Post->id = $this->request->data("idpost.$i");
				$this->Post->delete();	
			}
			$this->Session->setFlash('Berhasil delete berita');
		}
		$redirect = ($this->request->data('action')) ? $this->request->data('action') : "list_posts";
		$this->redirect(array('action' => $redirect));
	}

}

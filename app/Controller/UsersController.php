<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
    
  public $layout = "admin";

  public $helpers = array(
            'Tinymce',
            'Custom',
            'Js' => array('Jquery', 'Prototype'),
  );

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
    $this->Auth->allow('logout', 'login', 'add');
  }

	public function index(){

		$this->paginate = array(
    	    'conditions' => array('User.username LIKE' => '%a%'),
    	    'limit' => 10 
        );

    $data = $this->paginate('User');
		$this->set('users', $data);
	}
    
  # asrulalfi@gmail.com
  # November 8, 2012
  # Method to add User 
	public function add(){
       # Save if get request post
       if($this->request->is('post')){
         
         # create user object
         $this->User->create();
         
         # save user by data post
         if($this->User->save($this->request->data))
         {
            $this->Session->setFlash('Berhasil menambahkan user baru');
            $this->redirect(array('action' => 'index'));   
         }else{
            $this->Session->setFlash('Gagal menambah user baru');
         }

       }  

	}
	# end function add

    public function edit($id = null){
        $this->User->id = $id;
        if($this->request->is('get')){
            $this->request->data = $this->User->read();
        }else{
            if($this->User->save($this->request->data)){
              $this->Session->setFlash('profile berhasil di update');    
            }else{
              $this->Session->setFlash('profile gagal di update');   
            }
        }
    }

    public function login(){
      $this->layout = "login";

      if($this->Session->check('Auth.User')){
        $this->redirect(array('controller' => 'posts', 'action' => 'pending_posts'));
      }

      if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash('Invalid username or password, try again');
        }
      }
    }

    public function logout(){
      $this->redirect($this->Auth->logout());
    }

}

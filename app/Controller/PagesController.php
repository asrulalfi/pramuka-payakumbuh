<?php
App::uses('AppController', 'Controller');
/**
 * Pages Controller
 *
 */
class PagesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	public $helpers = array('Tinymce');

	function display() {

      $path = func_get_args();

      $count = count($path);
      if (!$count) {
        $this->redirect('/');
      }
      
      $page = $subpage = $title_for_layout = null;

      if (!empty($path[0])) {
        $page = $path[0];
      }
      if (!empty($path[1])) {
        $subpage = $path[1];
      }
      $this->set(compact('page', 'subpage', 'title_for_layout'));

      switch ($page) {
        case 'home':
            $this->_home();
            $this->render('home');
        break;
        default:
            $this->render(implode('/', $path));
      }
    }

    public function index(){
	  $this->paginate = array(
        'limit' => 10 
	  );

	  $data = $this->paginate('Page');
	  $this->set('pages', $data);
	}

	public function add(){
	   debug('syalalala');	
	   if($this->request->is('post')){
	     $this->Page->create();
	     
	     if($this->Page->save($this->request->data)){
	     	$this->Session->setFlash('Pages Berhasil di simpan');
	     	$this->redirect(array('action' => 'index'));
	     }else{
	     	$this->Session->setFlash('Pages gagal di simpan');
	     }	
	   }
	}

}

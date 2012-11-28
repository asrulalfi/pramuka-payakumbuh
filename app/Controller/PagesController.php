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

	public function add(){
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

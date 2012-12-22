<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property Post $Post
 * @property Gallery $Gallery
 */
class Comment extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gallery' => array(
			'className' => 'Gallery',
			'foreignKey' => 'gallery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $validate = array(
		'email' => array(
			'rule' => 'email',
			'message' => 'Email tidak valid'
		),
		'komentar' => array(
			'rule' => 'notEmpty',
			'message' => 'Komentar tidak boleh kosong'
		),
		'nama' => array(
			'rule' => 'notEmpty',
			'message' => 'Nama tidak boleh kosong'
		)
	);

	public function beforeSave($data){
		$this->data['Comment']['status'] = 2;
	}
}

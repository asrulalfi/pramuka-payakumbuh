<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property User $User
 * @property Kategori $Kategori
 * @property Comment $Comment
 */
class Post extends AppModel {

//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'kategori_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'post_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	// validation 
	public $validate = array(
      'title' => array(
         'rule-1' => array(
           'rule' => 'notEmpty',
           'message' => 'Title tidak boleh kosong',  
         ), 
         'rule-2' => array(
           'rule' => array('minLength', '5'),
           'message' => 'Title tidak boleh kurang dari 5 karakter'
         )
      ),
      'body' => array(
        'rule' => 'notEmpty',
        'message' => 'Isi berita harus di isi'   
      ),
      'kategori_id' => array(
        'rule' => 'notEmpty',
        'message' => 'kategori harus di pilih'
      )
	);

	var $actsAs = array(
      'MeioUpload' => array(
          'photo' => array(
              'dir' => 'img{DS}uploads',
              'create_directory' => false,
              'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
              'allowed_ext' => array('.jpg', '.jpeg', '.png'),
              'thumbsizes' => array(
                  '320x90' => array(
                      'width' => 320,
                      'height' => 90
                 )
               ),
              'default' => 'default.jpg'
          )
      )
    );

    function beforeValidate(){
    	// unset request data if photo field is null
    	if($this->data['Post']['photo'] == ""){
    		unset($this->data['Post']['photo']);
    	}
        
    	if($this->data['Post']['headline'] == ""){
    		$this->data['Post']['headline'] = 2;
    	}

    	if($this->data['Post']['status'] == ""){
    		$this->data['Post']['status'] = 2;
    	}
    }

}

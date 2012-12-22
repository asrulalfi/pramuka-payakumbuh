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
			'foreignKey' => 'user_id'
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'kategori_id'
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
			'dependent' => true
		)
	);

	// validation 
	public $validate = array(
      'title' => array(
         'rule-1' => array(
           'rule' => 'notEmpty',
           'message' => 'Title tidak boleh kosong'
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
              'create_directory' => true,
              'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
              'allowed_ext' => array('.jpg', '.jpeg', '.png'),
              'thumbsizes' => array(
                  '320x90' => array(
                      'width' => 124,
                      'height' => 93
                 )
               ),
              'default' => 'default.jpg'
          )
      )
  );

  function beforeValidate($data){
    // unset request data if photo field is null
    if($this->data['Post']['photo'] == ""){
      unset($this->data['Post']['photo']);
    }

    if($this->data['Post']['headline'] == ""){
    	$this->data['Post']['headline'] = 2;
    }

    if(empty($this->data['Post']['status'])){
    	unset($this->data['Post']['status']);
    }else if($this->data['Post']['status'] == ""){
      $this->data['Post']['status'] = 2;
    }
  }

}

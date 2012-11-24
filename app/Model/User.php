<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Gallery $Gallery
 * @property Post $Post
 */
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
    
    function beforeSave($options = array()) { 
      if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
      }
      return true;
    }

    function beforeValidate(){
      if($this->data['User']['password'] == "" && $this->data['User']['confirm_password'] == "" ){
        unset($this->data['User']['password']);
        unset($this->data['User']['confirm_password']);
      }
    }

	public $hasMany = array(
		'Gallery' => array(
			'className' => 'Gallery',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
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

	public $validate = array(
        'username' => array(
        	'rule-1' => array(
        	   'rule' => 'notEmpty',
        	   'message' => "Username harus di isi"
        	),
        	'rule-2' => array(
 			 	'rule'       => array('isUnique'),
            	'required'   => true,
            	'allowEmpty' => false,
            	'on'         => 'create',
                'message'    => 'Username telah di daftarkan sebelumnya'
        	)
        ),
        'password' => array(
            'rule'    => array('minLength', '8'),
            'message' => 'Minimum 8 characters long',
            'required'   => true,
            'allowEmpty' => false,
            'on' => 'create'
        ),
        'email' => array(
           'rule' => 'email',
           'message' => 'Please insert valid email'
        ),
        'confirm_password' => array(
        	'rule' => 'validatePasswordConfirm',
        	'required' => true,
        	'allowEmpty' => false,
        	'message' => 'Passwords do not match',
            'on' => 'create'
        )
    );
    
    function validatePasswordConfirm($data){
    	if( $this->data['User']['password'] == $this->data['User']['confirm_password'] ){
    		return true;
    	}

    	return false;
    }
}

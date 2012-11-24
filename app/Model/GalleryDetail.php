<?php
App::uses('AppModel', 'Model');
/**
 * GalleryDetail Model
 *
 * @property Gallery $Gallery
 */
class GalleryDetail extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Gallery' => array(
			'className' => 'Gallery',
			'foreignKey' => 'gallery_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true
		)
	);

	var $actsAs = array(
      'MeioUpload' => array(
          'photo' => array(
              'dir' => 'img{DS}uploads{DS}gallery',
              'create_directory' => true,
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
}

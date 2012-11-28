<div id="second_tab">
   	<ul>
    	<li><a href="javascript:void(0)" class="selected" >Tambah Galery</a></li>
        <li><?php echo $this->Html->link(__('List Galery'), array('action' => 'index'));?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>

  <?php echo $this->Session->flash(); ?>

  <h2> Tambah Berita </h2>

  <?php echo $this->Form->create('Gallery', 
            array(
              'type' => 'file',
              'multiple'=>'multiple',
              'inputDefaults' => array(
                'div' => false,
                'between' => "<br />",
              )
            )
        );?>
    <ul id="entri_data">
    	<li>
          <p>
            <?php echo $this->Form->input('Gallery.user_id', array('type' => 'hidden')); ?>
            <?php echo $this->Form->input('Gallery.title'); ?>
          </p>
        </li>
        <li>
          <p><?php echo $this->Tinymce->input('Gallery.teks', array(
			                    'label' => 'Content',
                                'type' => 'textarea'
			                  	), array(
                            		'language' => 'en'
			                  	),
			                  	'basic'
		        ); ?>
        </p>
        </li>
        <li>
          <p><?php echo $this->Form->input('Gallery.tag'); ?></p>
        </li>
        <li>
            <p> <?php echo $this->Form->input('Gallery.keyword'); ?></em>
            </p>
        </li>
        <li>
            <p> <?php $status = array('1' => 'Publish', '2' => 'Tidak publish');
		                  echo $this->Form->input('Gallery.status', array('type' => 'select',
			                                        'options' => $status,
			                                        'empty' => 'Please select')); ?></em>
            </p>
        </li>
        <li>
        	<p> <input type="submit" value="tambah" class="submit_user"  /></p>
            <p></p>
        </li>
    </ul>	
    <?php echo $this->Form->end();?>
  </div>	
  <div class="clean"></div><!-- clean -->
</div>

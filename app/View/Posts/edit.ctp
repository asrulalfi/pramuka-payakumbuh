<div id="second_tab">
   	<ul>
    	<li><a href="?pil=user" class="selected" >Edit Berita</a></li>
        <li><?php echo $this->Html->link(__('List Berita'), array('controller' => 'posts', 'action' => 'list_posts'));?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>

  <?php echo $this->Session->flash(); ?>

  <h2> Edit Berita </h2>
  
  <!-- Create form -->
  <?php echo $this->Form->create('Post', 
             array( 
                'type' => 'file',
                'inputDefaults' => array(
                    'div' => false,
                    'between' => "<br />"
                )
             )
        );
  ?>
  <ul id="entri_data">
    <li>
      <p>
        <?php echo $this->Form->input('user_id', array('type' => 'hidden')); ?>
        <?php echo $this->Form->input('title'); ?>
      </p>
    </li>
    <li>
      <p> 
        <?php echo $this->Form->input('Post.kategori_id', array(
                                                            'type' => 'select',
		                                                        'options' => $Categories, 
			                                                     'empty' => array('' => 'Please select')
                                     )
                    );
		    ?>    
        </p>
    </li>
    <li>
        <p> <?php echo $this->Form->input('sub_title'); ?></p>
    </li>
    <li>
        <p><?php echo $this->Tinymce->input('Post.body',
                        array(
			                     'label' => 'Content'
			                  ), 
                        array(
                           'language' => 'en'
			                  ),
			                  'basic'
		          ); ?>
        </p>
    </li>
    <li>
      <p><?php echo $this->Form->input('photo', array('type' => 'file')); ?></p>
    </li>
    <li>
      <p> <?php echo $this->Form->input('photo_text'); ?></p>
    </li>
    <li>
      <p><?php echo $this->Form->input('tag'); ?></p>
    </li>
    <li>
      <p> <?php echo $this->Form->input('keyword'); ?></p>
    </li>
    <li>
      <p>
        <?php $headline = array('1' => 'headline', '2' => 'Tidak headline');
		          echo $this->Form->input('headline', array('type' => 'select',
			                                      'options' => $headline,
			                                      'empty' => 'Please select')); ?>
      </p>
    </li>
    <li>
      <p> 
        <?php $status = array('1' => 'Publish', '2' => 'Tidak publish');
		          echo $this->Form->input('status', array('type' => 'select',
			                                    'options' => $status,
			                                    'empty' => 'please select')); ?></em>
      </p>
    </li>
    <li>
      <p> <input type="submit" value="Edit" class="submit_user"  /></p>
    </li>
  </ul>	
  <?php echo $this->Form->end();?>
  <!-- End form -->
</div>	
<div class="clean"></div><!-- clean -->
</div>

<div class="content grid_12">

  <section class="primary_content grid_8  alpha">
    <?php echo $this->Session->flash(); ?>
    
    <section class="read">

      <article>
      	<section>
      	  <h3> <?php echo  $post['Post']['title']; ?></h3>
      	  <span>
      	  	<?php echo date('d F Y', strtotime($post['Post']['created'])); ?> , 
      	  	<?php echo $post['User']['nama']; ?>
      	  </span>
        </section> 
          <?php echo $this->Html->image('uploads/'.$post['Post']['photo'], array('class' => 'imageRead')); ?>
      	  <?php echo $post['Post']['body']; ?>
  
      </article>

      <div class="clear"></div>

      <section id="comment_form">
        <?php echo $this->Form->create('Comment', array(
                    'action' => 'add',
                    'inputDefaults' => array(
                      'div' => false,
                      'between' => '<br />'
                    )
                  )
              ); ?>
          <li>
            <p>
              <?php echo $this->Form->input('Comment.post_id', array('type' => 'hidden', 'value' => $post['Post']['id'])); ?>
              <?php echo $this->Form->input('title', array('type' => 'hidden', 'value' => $post['Post']['title'])); ?>
              <?php echo $this->Form->input('Comment.nama'); ?>
            </p>
            <p>
              <?php echo $this->Form->input('Comment.email'); ?>
            </p>
          </li>
          <li>
            <p>
              <?php echo $this->Form->input('Comment.komentar', array('type' => 'textarea')); ?>
            </p>  
          </li>
          <li>
            <p>
              <?php echo $this->Form->input('add comment', array('type' => 'submit', 'label' => false)); ?>
            </p>  
          </li>
        <?php $this->Form->end(); ?>    
      </section>  

    </section><!-- End of list posts -->	
  </section><!-- End of primary section -->

  <aside class="sidebar grid_3 omega alpha">
    <?php echo $this->element('sidebar'); ?>
  <aside>

  <div class="clear"></div>

</div>
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
        <span> 
          <?php echo $this->Html->image('uploads/'.$post['Post']['photo'], array('class' => 'imageRead')); ?>
          <em class="photo_text"><?php echo $post['Post']['photo_text']; ?></em>
      	  <?php echo $post['Post']['body']; ?>
        </span>  
        <div class="clear"></div> 
  
      </article>

      <div class="clear"></div>
      
      <section class="comment_list">
        <h2> Komentar </h2>
        <ul>  
          <li>
            <p><b>Nama</b></p>
            <p> Komentar </p>  
          </li>
          <li>
            <p><b>Nama</b></p>
            <p> Komentar </p>  
          </li>
        </ul>
        <h4><a>Komentar lain</a></h4>       
      </section>  

      <section id="comment_form">
        <?php echo $this->Form->create('Comment', array(
                    'action' => 'add',
                    'inputDefaults' => array(
                      'div' => false,
                      'between' => '<br />'
                    )
                  )
              ); ?>
          <li class="name_and_email">
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
              <?php echo $this->Form->input('Add Comment', array('type' => 'submit', 'label' => false)); ?>
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
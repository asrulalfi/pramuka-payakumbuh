<div class="content grid_12 ">

  <section class="primary_content grid_8  alpha">
    <?php echo $this->Session->flash(); ?>
    
    <section class="list">
      <h2> Search  : <em> <?php echo $this->request->data('Post.search'); ?> </h2>

      <?php 

      foreach ($posts as $post) :
      
      ?>

      <article>
        <?php echo $this->Html->image('uploads/thumb/320x90/'.$post["Post"]["photo"], array('class' => 'imageIndex')); ?>

      	<section>
      	  <h3>
      	  	<?php echo $this->Html->link($post['Post']['title'], array(
      	                    'controller' => 'posts',
      	                    'action' => 'read',
      	                    $post['Post']['id'],
      	                    str_replace(" ", "-", $post['Post']['title'])
      	          	)
      	          ); ?>
      	  </h3>
      	  <span>
      	  	<?php echo date('d F Y', strtotime($post['Post']['created'])); ?> , 
      	  	<?php echo $post['User']['nama']; ?>
      	  </span> 
          <?php echo $this->Text->truncate($post['Post']['body'], 500, array('ellipsis' => '...', 'exact' => false, 'p' => false )); ?>
      	</section>
        <div class="clear"></div>
      </article>

      <?php endforeach; ?>

      <div class="paging">
      <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
      ?>
      </div>

    </section><!-- End of list posts -->	
  </section><!-- End of primary section -->

  <aside class="sidebar grid_4 omega alpha">
    <?php echo $this->element('sidebar'); ?>
  <aside>

  <div class="clear"></div>

</div>
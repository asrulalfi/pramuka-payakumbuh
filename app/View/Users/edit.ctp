<div id="second_tab">
   	<ul>
    	<li><a href="?pil=user" class="selected" >Edit User</a></li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>

  <?php echo $this->Session->flash(); ?>

  <h2> Tambah User </h2>
    <!-- Create form --> 
    <?php echo $this->Form->create('User', array(
                      'inputDefaults' => array(
                          'div' => false,
                          'between' => "<br />"    
                      )
                  )
              );
    ?>
    <ul id="entri_data">
    	<li>
          <p> <?php echo $this->Form->input('nama'); ?></p>
      </li>
      <li>
        <p> 
          <?php $user_level = array('1' => 'Reporter', '2' => 'Redaksi', '3' => 'Admin');
        	      echo $this->Form->input('level', array(
        	                  'type' => 'select',
        	                  'options' => $user_level,
        	                  'empty' => 'Please select'
        	             )
        	          );
		      ?>    
        </p>
      </li>
      <li>
        <p> <?php echo $this->Form->input('username'); ?></p>
      </li>
      <li>
        <p><?php echo $this->Form->input('password', array('empty' => true, 'id' => 'edit_password')); ?></p>
      </li>
      <li>
        <p><?php echo $this->Form->input('confirm_password', array('type' => 'password')); ?></p>
      </li>
      <li>
        <p> <?php echo $this->Form->input('email'); ?></p>
      </li>
      <li>
        <p> <input type="submit" name="adduser" value="Edit" class="submit_user"  /></p>
      </li>
    </ul>	
    <?php echo $this->Form->end();?>
    <!-- End form -->
  </div>	
  <div class="clean"></div><!-- clean -->
</div>

<div id="second_tab">
   	<ul>
   		<li><a href="javascript:void(0)" class="selected">List Galery</a></li>
    	<li><?php echo $this->Html->link(__('Tambah Galery'), array('action' => 'add')) ?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>
  	<?php echo $this->Session->flash(); ?>
    <h2 id="list_head"> List Galery </h2>
  
    <?php echo $this->Form->create('Galery', array('action' => 'delete_all')); ?>
    <table border="0" class="list_form" width="900px">
    <thead>
    <tr>
    	<td class="check-column"> <input type="checkbox" name="ckall" /></td>
    	<td width="30%"><?php echo $this->Paginator->sort('title');?></td>
      <td width="30%"><?php echo $this->Paginator->sort('user_id');?></td>
      <td width="20%"><?php echo $this->Paginator->sort('created');?></td>
      <td width="30%"><?php echo $this->Paginator->sort('status');?> </td>
    </tr>	
    </thead>
    <tbody>
    
    <?php
	foreach ($galleries as $gallery): ?>
    <tr class="">
      <td valign="top" class="check-column"> 
        <input type="checkbox" value="<?php echo h($gallery['Gallery']['id']); ?>" name="idgallery[]" />
      </td>
      <td width="30%">
        <?php echo h($gallery['Gallery']['title']); ?>
        <section>
          <?php echo $this->Html->link(__('View'), array('action' => 'view', $gallery['Gallery']['id'])); ?>
          <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gallery['Gallery']['id'])); ?>
          <?php echo $this->Custom->filterContent( $this->Html->link(__('Delete'),
                array('action' => 'delete', $gallery['Gallery']['id']),
                null, __('Are you sure you want to delete This post?', $gallery['Gallery']['id'])),
                $this->Session->read('Auth.User.level')); ?>
        </section>
      </td>
      <td width="30%"><?php echo h($gallery['User']['nama']); ?></td>
      <td width="20%"><?php echo date('d F Y', strtotime(h($gallery['Gallery']['created']))); ?></td>
      <td width="30%"><?php echo h($gallery['Gallery']['status']); ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
    <tfoot>
    <tr>
    	<td colspan="5">
        <input type="hidden" value="index" name="action" />
        <input type="submit" value="delete" class="submit_user"  />
      </td>
    </tr>	
    </tfoot>
    </table>
    <?php echo $this->Form->end(); ?>
    <div class="clean"></div>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
  </div>    
  <div class="clean"></div> <!-- pembersih part -->  	
</div>
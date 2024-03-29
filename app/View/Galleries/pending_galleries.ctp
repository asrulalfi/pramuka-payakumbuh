<div id="second_tab">
    <ul>
      <li><?php echo $this->Html->link(__('List Berita Pending'), array('controller' => 'posts', 'action' => 'pending_posts')) ?></li>
      <li><a href="javascript:void(0)" class="selected">List Galleries Pending</a></li>
      <li><?php echo $this->Html->link(__('List komentar Pending'), array('action' => 'list_posts')) ?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>
  	<?php echo $this->Session->flash(); ?>
    <h2 id="list_head"> List Galery </h2>
  
    <?php echo $this->Form->create('Gallery', array('action' => 'publish')); ?>
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
      <td width="30%"><?php echo h($gallery['Gallery']['title']); ?></td>
      <td width="30%"><?php echo h($gallery['User']['nama']); ?></td>
      <td width="20%"><?php echo date('d F Y', strtotime(h($gallery['Gallery']['created']))); ?></td>
      <td width="30%"><?php echo h($gallery['Gallery']['status']); ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
    <tfoot>
    <tr>
    	<td colspan="5">
        <input type="hidden" value="pending_galleries" name="action"  />
        <input type="submit" value="publish" class="submit_user"  />
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
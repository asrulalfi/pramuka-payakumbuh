<div id="second_tab">
   	<ul>
   		<li><a href="javascript:void(0)" class="selected">List Berita</a></li>
    	<li><?php echo $this->Html->link(__('Tambah berita'), array('action' => 'add')) ?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>
  	<?php echo $this->Session->flash(); ?>
    <h2 id="list_head"> List Berita </h2>
  
    <form action="proses.php" method="post">
    <table border="0" class="list_form" width="900px">
    <thead>
    <tr>
    	<td class="check-column"> <input type="checkbox" name="ckall" /></td>
    	<td width="40%"><?php echo $this->Paginator->sort('title');?></td>
        <td width="5%"><?php echo $this->Paginator->sort('headline');?></td>
        <td width="10%"><?php echo $this->Paginator->sort('user_id');?></td>
        <td width="10%"><?php echo $this->Paginator->sort('kategori_id');?> </td>
        <td width="5%"><?php echo $this->Paginator->sort('status');?></td>
		<td width="30%"><?php echo $this->Paginator->sort('created');?></td>
    </tr>	
    </thead>
    <tbody>

    <?php
	foreach ($posts as $post): ?>
    <tr>
    	<td valign="top" class="check-column"> 
          <input type="checkbox" value="<?php echo h($post['Post']['id']); ?>"  name="iduser[]" />
        </td>
		<td>
			<?php echo h($post['Post']['title']); ?>
      <section>
        <?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			  <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			  <?php echo $this->Custom->filterContent( $this->Form->postLink(__('Delete'),
              array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete This post?')),
              $this->Session->read('Auth.User.level')); ?>
      </section> 	
		</td>
		<td><?php echo h($post['Post']['headline']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['User']['nama'],
                  array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Category']['kategori'],
                  array('controller' => 'categories', 'action' => 'view', $post['Category']['id'])); ?>
		</td>
		<td><?php echo h($post['Post']['status']); ?>&nbsp;</td>
		<td><?php echo date('d F Y', strtotime(h($post['Post']['created']))); ?>&nbsp;</td>

	</tr>
    <?php endforeach; ?>
    
    </tbody>
    <tfoot>
    <tr>
    	<td colspan="8"> <input type="submit" name="deleteuser" value="delete" class="submit_user"  /></td>
    </tr>	
    </tfoot>
    </table>
    </form>
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

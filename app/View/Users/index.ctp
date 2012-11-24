<div id="second_tab">
   	<ul>
   		<li><a href="javascript:void(0)" class="selected">List User</a></li>
    	<li><?php echo $this->Html->link(__('Tambah user'), array('action' => 'add')) ?></li>
    </ul>
</div>
<div class="clean"></div> <!-- pembersih part -->
<div id="content_bottom">
  <div>
  	<?php echo $this->Session->flash(); ?>
    <h2 id="list_head"> List User </h2>
  
    <form action="proses.php" method="post">
    <table border="0" class="list_form" width="900px">
    <thead>
    <tr>
    	<td class="check-column"> <input type="checkbox" name="ckall" /></td>
    	<td width="30%"><?php echo $this->Paginator->sort('username');?></td>
        <td width="30%"><?php echo $this->Paginator->sort('nama');?></td>
        <td width="20%"><?php echo $this->Paginator->sort('level');?></td>
        <td width="30%"><?php echo $this->Paginator->sort('email');?> </td>
    </tr>	
    </thead>
    <tbody>
    
    <?php
	foreach ($users as $user): ?>
    <tr class="">
      <td valign="top" class="check-column"> 
        <input type="checkbox" value="<?php echo h($user['User']['id']); ?>"  name="iduser[]" />
      </td>
      <td width="30%"><?php echo h($user['User']['username']); ?></td>
      <td width="30%"><?php echo h($user['User']['nama']); ?></td>
      <td width="20%"><?php echo $this->Custom->generateUserLevel(h($user['User']['level'])); ?></td>
      <td width="30%"><?php echo h($user['User']['email']); ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
    <tfoot>
    <tr>
    	<td colspan="5"> <input type="submit" name="deleteuser" value="delete" class="submit_user"  /></td>
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
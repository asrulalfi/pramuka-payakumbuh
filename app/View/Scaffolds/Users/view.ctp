<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama'); ?></dt>
		<dd>
			<?php echo h($user['User']['nama']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($user['User']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Galleries');?></h3>
	<?php if (!empty($user['Gallery'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Teks'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Tag'); ?></th>
		<th><?php echo __('Keyword'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Gallery'] as $gallery): ?>
		<tr>
			<td><?php echo $gallery['id'];?></td>
			<td><?php echo $gallery['title'];?></td>
			<td><?php echo $gallery['teks'];?></td>
			<td><?php echo $gallery['status'];?></td>
			<td><?php echo $gallery['tag'];?></td>
			<td><?php echo $gallery['keyword'];?></td>
			<td><?php echo $gallery['user_id'];?></td>
			<td><?php echo $gallery['created'];?></td>
			<td><?php echo $gallery['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'galleries', 'action' => 'view', $gallery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'galleries', 'action' => 'edit', $gallery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'galleries', 'action' => 'delete', $gallery['id']), null, __('Are you sure you want to delete # %s?', $gallery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gallery'), array('controller' => 'galleries', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts');?></h3>
	<?php if (!empty($user['Post'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Sub Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Headline'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th><?php echo __('Thumb'); ?></th>
		<th><?php echo __('Photo Text'); ?></th>
		<th><?php echo __('Tag'); ?></th>
		<th><?php echo __('Keyword'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Kategori Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Hit'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id'];?></td>
			<td><?php echo $post['title'];?></td>
			<td><?php echo $post['sub_title'];?></td>
			<td><?php echo $post['body'];?></td>
			<td><?php echo $post['headline'];?></td>
			<td><?php echo $post['photo'];?></td>
			<td><?php echo $post['thumb'];?></td>
			<td><?php echo $post['photo_text'];?></td>
			<td><?php echo $post['tag'];?></td>
			<td><?php echo $post['keyword'];?></td>
			<td><?php echo $post['user_id'];?></td>
			<td><?php echo $post['kategori_id'];?></td>
			<td><?php echo $post['status'];?></td>
			<td><?php echo $post['hit'];?></td>
			<td><?php echo $post['created'];?></td>
			<td><?php echo $post['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

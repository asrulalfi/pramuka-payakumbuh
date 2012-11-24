<div class="galleries view">
<h2><?php  echo __('Gallery');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Teks'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['teks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['tag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gallery['User']['id'], array('controller' => 'users', 'action' => 'view', $gallery['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gallery['Gallery']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gallery'), array('action' => 'edit', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gallery'), array('action' => 'delete', $gallery['Gallery']['id']), null, __('Are you sure you want to delete # %s?', $gallery['Gallery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galleries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments');?></h3>
	<?php if (!empty($gallery['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nama'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Komentar'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Gallery Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gallery['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['nama'];?></td>
			<td><?php echo $comment['email'];?></td>
			<td><?php echo $comment['komentar'];?></td>
			<td><?php echo $comment['status'];?></td>
			<td><?php echo $comment['post_id'];?></td>
			<td><?php echo $comment['gallery_id'];?></td>
			<td><?php echo $comment['created'];?></td>
			<td><?php echo $comment['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

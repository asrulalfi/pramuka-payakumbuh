<div class="categories view">
<h2><?php  echo __('Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kategori'); ?></dt>
		<dd>
			<?php echo h($category['Category']['kategori']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts');?></h3>
	<?php if (!empty($category['Post'])):?>
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
		foreach ($category['Post'] as $post): ?>
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

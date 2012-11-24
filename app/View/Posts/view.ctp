<div class="Posts view">
<h2><?php  echo __('Post');?></h2>
	<dl>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub title'); ?></dt>
		<dd>
			<?php echo h($post['Post']['sub_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isi'); ?></dt>
		<dd>
			<?php echo h($post['Post']['body']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('tag'); ?></dt>
		<dd>
			<?php echo h($post['Post']['tag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('keyword'); ?></dt>
		<dd>
			<?php echo h($post['Post']['tag']); ?>
		</dd>	
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo date('F d, Y', strtotime($post['Post']['created'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo date('F d, Y', strtotime($post['Post']['modified'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

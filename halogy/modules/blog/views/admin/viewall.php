<div class="row">
	<div class="large-12 columns body">
		<div class="row">
			<div class="large-6 columns">
				<h1 class="headingleft">Blog Posts</h1>
			</div>
			<div class="large-6 columns">
				<?php if (in_array('blog_edit', $this->permission->permissions)): ?>
					<a href="<?php echo site_url('/admin/blog/add_post'); ?>" class="green right">Add Post</a>
				<?php endif; ?>
			</div>
		</div>

		<?php if ($blog_posts): ?>

		<?php echo $this->pagination->create_links(); ?>

		<table class="default clear">
			<thead>
				<tr>
					<th><?php echo order_link('/admin/blog/viewall','posttitle','Post'); ?></th>
					<th><?php echo order_link('/admin/blog/viewall','datecreated','Date'); ?></th>
					<th class="narrow"><?php echo order_link('/admin/blog/viewall','published','Published'); ?></th>
					<th class="tiny">&nbsp;</th>
					<th class="tiny">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($blog_posts as $post): ?>
					<tr class="<?php echo (!$post['published']) ? 'draft' : ''; ?>">
						<td><?php echo (in_array('blog_edit', $this->permission->permissions)) ? anchor('/admin/blog/edit_post/'.$post['postID'], $post['postTitle']) : $post['postTitle']; ?></td>
						<td><?php echo dateFmt($post['dateCreated'], '', '', TRUE); ?></td>
						<td>
							<?php
								if ($post['published']) echo '<span style="color:green;">Yes</span>';
								else echo 'No';
							?>
						</td>
						<td class="tiny">
							<?php if (in_array('blog_edit', $this->permission->permissions)): ?>
								<?php echo anchor('/admin/blog/edit_post/'.$post['postID'], 'Edit'); ?>
							<?php endif; ?>
						</td>
						<td class="tiny">			
							<?php if (in_array('blog_delete', $this->permission->permissions)): ?>
								<?php echo anchor('/admin/blog/delete_post/'.$post['postID'], 'Delete', 'onclick="return confirm(\'Are you sure you want to delete this?\')"'); ?>
							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<?php echo $this->pagination->create_links(); ?>


		<?php else: ?>

		<p class="clear">There are no blog posts yet.</p>

		<?php endif; ?>
	</div>
</div>
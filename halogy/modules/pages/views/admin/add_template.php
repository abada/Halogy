<script type="text/javascript" src="<?php echo $this->config->item('staticPath'); ?>/js/templates.js" /></script>
<form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>" class="">

<div class="large-10 columns body">
	<div class="small-12 large-8 large-centered columns card">
		<h2 class="left">Add Template</h2>

		<div class="right">
			<a href="<?php echo site_url('/admin/pages/templates'); ?>" class="button">Back to Templates</a>
		</div>
		<div class="clear"></div>


				<?php if ($errors = validation_errors()): ?>
					<div class="error">
						<?php echo $errors; ?>
					</div>
				<?php endif; ?>
				<div class="item">
					<div class="showModuleName">
						<label for="templateName">Name:</label>
						<?php echo @form_input('templateName',set_value('templateName', $data['templateName']), 'id="templateName" class="formelement"'); ?>
					</div>
				</div>
				
				<div class="item">
					<label for="moduleSelect">Module:</label>
					<p>To make a module template (e.g. for the Blog) select the module here.</p>
					<?php 
						$values = array();
						$values[''] = 'Not a module template';
						$values['!'] = '---------------------------';
						if (@in_array('blog', $this->permission->permissions)) $values['!blog'] = 'Blog';
						if (@in_array('blog', $this->permission->permissions)) $values['blog'] = '-- View Posts';		
						if (@in_array('blog', $this->permission->permissions)) $values['blog_single'] = '-- Single Post';		
						if (@in_array('blog', $this->permission->permissions)) $values['blog_search'] = '-- Blog Search Results';
						if (@in_array('community', $this->permission->permissions)) $values['!community'] = 'Community';
						if (@in_array('community', $this->permission->permissions)) $values['community_account'] = '-- Account';
						if (@in_array('community', $this->permission->permissions)) $values['community_create_account'] = '-- Create Account';
						if (@in_array('community', $this->permission->permissions)) $values['community_forgotten'] = '-- Forgotten Password';
						if (@in_array('community', $this->permission->permissions)) $values['community_home'] = '-- Home (My Profile)';
						if (@in_array('community', $this->permission->permissions)) $values['community_login'] = '-- Login';
						if (@in_array('community', $this->permission->permissions)) $values['community_members'] = '-- Members';
						if (@in_array('community', $this->permission->permissions)) $values['community_messages'] = '-- Messages';
						if (@in_array('community', $this->permission->permissions)) $values['community_messages_form'] = '-- Messages Form';
						if (@in_array('community', $this->permission->permissions)) $values['community_messages_popup'] = '-- Messages Popup';
						if (@in_array('community', $this->permission->permissions)) $values['community_messages_read'] = '-- Messages Read';
						if (@in_array('community', $this->permission->permissions)) $values['community_reset'] = '-- Reset Password';
						if (@in_array('community', $this->permission->permissions)) $values['community_view_profile'] = '-- View Profile';
						if (@in_array('community', $this->permission->permissions)) $values['community_view_profile_private'] = '-- View Private Profile';
						if (@in_array('events', $this->permission->permissions)) $values['!events'] = 'Events';
						if (@in_array('events', $this->permission->permissions)) $values['events'] = '-- View Events';		
						if (@in_array('events', $this->permission->permissions)) $values['events_single'] = '-- Single Event';
						if (@in_array('events', $this->permission->permissions)) $values['events_featured'] = '-- Featured Events';
						if (@in_array('events', $this->permission->permissions)) $values['events_search'] = '-- Events Search Results';
						if (@in_array('forums', $this->permission->permissions)) $values['!forums'] = 'Forums';
						if (@in_array('forums', $this->permission->permissions)) $values['forums'] = '-- Forums List';
						if (@in_array('forums', $this->permission->permissions)) $values['forums_delete'] = '-- Delete Forum';
						if (@in_array('forums', $this->permission->permissions)) $values['forums_forum'] = '-- View Forum';
						if (@in_array('forums', $this->permission->permissions)) $values['forums_post_reply'] = '-- Post Reply';
						if (@in_array('forums', $this->permission->permissions)) $values['forums_post_topic'] = '-- Post Topic';
						if (@in_array('forums', $this->permission->permissions)) $values['forums_search'] = '-- Forums Search Results';
						if (@in_array('forums', $this->permission->permissions)) $values['forums_topic'] = '-- View Topic';
						if (@in_array('shop', $this->permission->permissions)) $values['!shop'] = 'Shop';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_account'] = '-- Account (Shop)';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_browse'] = '-- Browse Products';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_cancel'] = '-- Cancel Purchase';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_cart'] = '-- Shopping Cart';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_checkout'] = '-- Checkout';		
						if (@in_array('shop', $this->permission->permissions)) $values['shop_create_account'] = '-- Create Account (Shop)';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_donation'] = '-- Successful Donation';		
						if (@in_array('shop', $this->permission->permissions)) $values['shop_featured'] = '-- Featured Products';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_forgotten'] = '-- Forgotten Password (Shop)';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_login'] = '-- Login (Shop)';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_orders'] = '-- Orders';		
						if (@in_array('shop', $this->permission->permissions)) $values['shop_prelogin'] = '-- Pre-login';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_product'] = '-- View Product';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_recommend'] = '-- Recommend Product';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_reset'] = '-- Reset Password (Shop)';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_review'] = '-- Review Product';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_subscriptions'] = '-- Subscriptions';		
						if (@in_array('shop', $this->permission->permissions)) $values['shop_success'] = '-- Successful Transaction';
						if (@in_array('shop', $this->permission->permissions)) $values['shop_view_order'] = '-- View Order';
						if (@in_array('wiki', $this->permission->permissions)) $values['!wiki'] = 'Wiki';
						if (@in_array('wiki', $this->permission->permissions)) $values['wiki'] = '-- Browse Pages';
						if (@in_array('wiki', $this->permission->permissions)) $values['wiki_form'] = '-- Edit Page';
						if (@in_array('wiki', $this->permission->permissions)) $values['wiki_page'] = '-- View Page';		
						if (@in_array('wiki', $this->permission->permissions)) $values['wiki_search'] = '-- Wiki Search Results';

						$values['custom'] = 'Custom Module';

						echo @form_dropdown('moduleSelect',$values, (($data['templateName'] == 'custom') ? 'custom' : $data['modulePath']), 'id="moduleSelect" class="formelement" rel="'.site_url('/admin/pages/module').'"'); 
					?>
					<div class="showModulePath">
						<label for="modulePath">Module Reference:</label>
						<?php echo @form_input('modulePath',set_value('modulePath', $data['modulePath']), 'id="modulePath" class="formelement"'); ?>
					</div>
				</div>

				<div class="item">
					<div class="autosave">
						<label for="body">Markup:</label>
						<p>Paste the code from your editor here.</p>
						<?php echo @form_textarea('body',set_value('body', $data['body']), 'id="body" class="code editor"'); ?>
					</div>
				</div>
				<input type="button" id="default" value="Reset to Default" class="button" />
				<input type="submit" value="Save Changes" class="button green" />

		
	</div>
</div>
	
</form>
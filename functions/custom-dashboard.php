<?php
// Dashboard Customization
show_admin_bar(false);

//Remove  WordPress Welcome Panel
remove_action('welcome_panel', 'wp_welcome_panel');

function fr_theme_setup()
{
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'widgets' );

}
add_action( 'after_setup_theme', 'fr_theme_setup' );

function fr_hide_dashboard()
{
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	wp_add_dashboard_widget( 'dashboard_widget_email_contact', 'Site Info', 'fr_site_options');
}
add_action('wp_dashboard_setup', 'fr_hide_dashboard' );

function fr_site_options()
{
	global $wp_meta_boxes;
	if ( $_POST && $_POST['update_the_options'] == 'true' )
	{
		update_option( 'info_email', $_POST['info_email'] );
		update_option( 'info_company_name', $_POST['info_company_name'] );
		update_option( 'info_phone', $_POST['info_phone'] );
		update_option( 'info_phone_display', $_POST['info_phone_display'] );
		update_option( 'info_social_facebook', $_POST['info_social_facebook'] );
		update_option( 'info_social_twitter', $_POST['info_social_twitter'] );
		update_option( 'info_social_gplus', $_POST['info_social_gplus'] );
		update_option( 'info_social_youtube', $_POST['info_social_youtube'] );
		update_option( 'info_social_linkedin', $_POST['info_social_linkedin'] );
		update_option( 'info_social_instagram', $_POST['info_social_instagram'] );
		update_option( 'info_social_pinterest', $_POST['info_social_pinterest'] );
		update_option( 'info_address', $_POST['info_address'] );
	}
?>
	
	<form name="form1" method="post" action="">
		<input type="hidden" name="update_the_options" value="true" />
		<table width="100%" border="0">
			<tr>
				<td colspan="3"><strong>General Options</strong></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name="info_email" type="email" class="option-input" id="info_email" value="<?php echo get_option('info_email'); ?>"/></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td>:</td>
				<td><input name="info_company_name" type="text" class="option-input" id="info_company_name" value="<?php echo get_option('info_company_name'); ?>"/></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><input name="info_phone" type="text" class="option-input" id="info_phone" value="<?php echo get_option('info_phone'); ?>"/></td>
			</tr>
			<tr>
				<td>Phone Display</td>
				<td>:</td>
				<td><input name="info_phone_display" type="text" class="option-input" id="info_phone_display" value="<?php echo get_option('info_phone_display'); ?>"/></td>
			</tr>
			<tr>
				<td>Facebook</td>
				<td>:</td>
				<td><input name="info_social_facebook" type="text" class="option-input" id="info_social_facebook" value="<?php echo get_option('info_social_facebook'); ?>"/></td>
			</tr>
			<tr>
				<td>Twitter</td>
				<td>:</td>
				<td><input name="info_social_twitter" type="text" class="option-input" id="info_social_twitter" value="<?php echo get_option('info_social_twitter'); ?>"/></td>
			</tr>
			<tr>
				<td>Google Plus</td>
				<td>:</td>
				<td><input name="info_social_gplus" type="text" class="option-input" id="info_social_gplus" value="<?php echo get_option('info_social_gplus'); ?>"/></td>
			</tr>
			<tr>
				<td>Youtube Channel</td>
				<td>:</td>
				<td><input name="info_social_youtube" type="text" class="option-input" id="info_social_youtube" value="<?php echo get_option('info_social_youtube'); ?>"/></td>
			</tr>
			<tr>
				<td>LinkedIn</td>
				<td>:</td>
				<td><input name="info_social_linkedin" type="text" class="option-input" id="info_social_linkedin" value="<?php echo get_option('info_social_linkedin'); ?>"/></td>
			</tr>
			<tr>
				<td>Instagram</td>
				<td>:</td>
				<td><input name="info_social_instagram" type="text" class="option-input" id="info_social_instagram" value="<?php echo get_option('info_social_instagram'); ?>"/></td>
			</tr>
			<tr>
				<td>Pinterest</td>
				<td>:</td>
				<td><input name="info_social_pinterest" type="text" class="option-input" id="info_social_pinterest" value="<?php echo get_option('info_social_pinterest'); ?>"/></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td>
					<?php
					$settings = array(
						'teeny' => true,
						'textarea_rows' => 15,
						'tabindex' => 1,
						'wpautop' => false
					);
					wp_editor(esc_html( __( get_option('info_address') ) ), 'info_address', $settings);
					?>
				</td>
			</tr>
		</table>
		<input type="submit" name="Submit" class="button button-primary" value="Save">
</form>

<?php
}

// Change WP Login Logo Image
function fr_custom_login_logo()
{
	echo '<style  type="text/css"> h1 a { background-size: contain !important; background-position: center !important; width: 100% !important; height:100px !important; background-image:url(' . get_bloginfo('stylesheet_directory') . '/assets/images/logo.png)  !important; } </style>';
}
add_action('login_head',  'fr_custom_login_logo');

// Change WP Login Logo URL
function change_wp_login_url()
{
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'change_wp_login_url');

// Change WP Login Logo Title
function change_wp_login_title()
{
	return get_option('blogname');
}
add_filter('login_headertitle', 'change_wp_login_title');

// Admin footer modification
function change_footer_admin() 
{
	echo '<span id="footer-thankyou">Developed by <a href="http://fazlurrahman.com" target="_blank">Fazlur Rahman</a> &copy; '. date("Y") .'</span>';
}
add_filter('admin_footer_text', 'change_footer_admin');

// Change 'Howdy'
function change_wp_howdy( $wp_admin_bar )
{
	$my_account = $wp_admin_bar->get_node('my-account');
	$newtitle = str_replace( 'Howdy,', 'Hello, ', $my_account->title );
	$wp_admin_bar->add_node( array( 'id' => 'my-account', 'title' => $newtitle ) );
}
add_filter('admin_bar_menu', 'change_wp_howdy', 25);

// Completely remove wp version
function remove_wp_version()
{
  return '';
}
add_filter('the_generator', 'remove_wp_version');

// Remove WP Logo in dashboard
function remove_wp_logo( $wp_admin_bar )
{
	$wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

?>
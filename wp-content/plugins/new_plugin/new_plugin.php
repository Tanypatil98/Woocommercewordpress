<?php
/**
* Plugin Name: Very First Plugin
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Tanay
**/
/**
 * Register the "book" custom post type
 */

 
 
/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
    // Trigger our function that registers the custom post type plugin.
  
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );
/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'book' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );


function profile_shortcode(){
	
	return include 'profile.php';
}
add_action( 'init', 'create_page_type' );
function create_page_type() {
    register_post_type( 'plugin',
        array(
            'labels' => array(
            'name' => __( 'Plugns' ),
            'singular_name' => __( 'Plugin' )
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
        )
    );
}

function login_shortcode(){
	
	return '<form id="login1"  class="form" action="'.$_SERVER['REQUEST_URI'].'" method="post">  
		  
		        <input id="username" type="text" placeholder="Username" name="username" class="form-control"><br>  
		        <input id="password" type="password" placeholder="Password" name="password" class="form-control">  <br>
		        <input id="submit" type="submit" name="submit" value="Submit" >  
		</form>    ';
}

function register_shortcode(){
	
	return '<form id="wp_signup_form" class="form" action="'.$_SERVER['REQUEST_URI'].'" method="post">  
  		<div class="form-group">
        <label for="username">Username</label>  
        <input type="text" name="username" id="username" class="form-control">
        </div>  
        <div class="form-group">
        <label for="email">Email address</label>  
        <input type="text" name="email" id="email" class="form-control">  
    	</div>
    	<div class="form-group">
        <label for="password">Password</label>  
        <input type="password" name="password" id="password" class="form-control">  
    	</div>
    	<div class="form-group">
        <label for="password_confirmation">Confirm Password</label>  
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">  
  		</div>
  		<div class="form-group" style="display: inline;">
        <input name="terms" id="terms" type="checkbox" value="Yes">  
        <label for="terms">I agree to the Terms of Service</label>  
    	</div>
  
        <input type="submit" id="submitbtn" name="submit" value="Sign Up" />  
  
</form>  ';
}
add_action('woocommerce_before_main_content','footerwp');
function footerwp(){
    echo "<h1>New_plugin is started</h1>";
}
add_action('admin_menu','plugin_menu');
function plugin_menu() {
    add_menu_page('My Plugin Setting','Plugin Setting','administrator','my-plugin-setting','my_plugin_setting_page','dashicons-admin-generic',40);
}
function my_plugin_setting_page(){
    echo '<div class="wrapper">
        <h1>My Plugin Settings Page</h1>
        <form method="post" action="options.php" enctype="multipart/form-data">';
            settings_fields('plugin_options');
            do_settings_sections(__FILE__);
            submit_button();
    echo '</form>
    </div>';
    $options = get_option('plugin_options');
    
    
        
    if (isset($options['banner_heading'])) {
        add_shortcode('form_login', 'login_shortcode'); 
        echo "Login Shortcode Activate";

    }
    if (isset($options['banner'])) {
        add_shortcode('form_register', 'register_shortcode');
        echo "Register Shortcode Activate"; 

    }
    if (isset($options['logo'])) {
        add_shortcode('form_profile', 'profile_shortcode');
        echo "Profile Shortcode Activate"; 

    }
   
}
add_action('admin_init', 'build_fields');
function build_fields(){
    register_setting('plugin_options','plugin_options','validate_setting');
    $options=get_option('plugin_options');
    
    add_settings_section('main_section', 'Main Settings', 'section_cbd', __FILE__);
    add_settings_field('banner_heading','Login:','heading_setting',__FILE__,'main_section');
    add_settings_field('banner','Register:','rheading_setting',__FILE__,'main_section');
    add_settings_field('logo', 'Profile:', 'logo_settings',__FILE__,'main_section');
    
}


function section_cbd(){}
function heading_setting(){
    $options = get_option('plugin_options');
    echo "<input type='checkbox' name='banner_heading' data-toggle='toggle' data-on='Enable' data-off='disable'  />";
    
}
function rheading_setting(){
    $options = get_option('plugin_options');
    echo "<input type='checkbox' name='banner' data-toggle='toggle' data-on='Enable' data-off='disable'  />";
    
}
function logo_settings(){
    $options = get_option('plugin_options');
     echo "<input type='checkbox' name='logo' data-toggle='toggle' data-on='Enable' data-off='disable'  />";
}
?>
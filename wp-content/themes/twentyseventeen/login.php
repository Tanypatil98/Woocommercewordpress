<?php
/*
	Template Name: Custom Login Page
 */
get_header();
 $plugin_var= "new_plugin";
  if (in_array( $plugin_var.'/'.$plugin_var.'.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) 
  {

 echo $user_ID;
if($user_ID){
	echo "<script type='text/javascript'>window.location.href='".home_url()."/profile/'</script>";
}else{
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	global $wpdb;

	$username=$wpdb->escape($_REQUEST['username']);
	$password=$wpdb->escape($_REQUEST['password']);
	$remember=$wpdb->escape($_REQUEST['remember']);
	
	if ($remember) {
		$remember="true";
	}else{
		$remember="false";
	}

	$login_data=array();
	$login_data['user_login']=$username;
	$login_data['user_password']=$password;
	$login_data['remember']=$remember;
	echo $login_data['username'];
	$user_verify=wp_signon($login_data , false);

	if (is_wp_error($user_verify)) {
		echo "<p class='alert alert-danger' style='text-align:center;'>Invalid Login Details</p>";
		echo is_wp_error($user_verify);
		echo $user_verify->get_error_message();
	}else{
		wp_set_current_user ( $user_verify->ID );
            wp_set_auth_cookie  ( $user_verify->ID ); 
		echo "<script type='text/javascript'>window.location.href='".home_url()."/profile/'</script>";
		exit();
	}
} else {
	 echo "<h6 style='text-align:center;'>Please Enter the Login Details</h6>";
}
}
?>
<div class="container col-md-4">

<?php echo do_shortcode("[form_login]"); ?>
		

</div>
<?php } get_footer(); ?>  

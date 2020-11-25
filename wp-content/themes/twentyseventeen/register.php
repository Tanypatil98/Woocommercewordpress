<?php 
/*
	Template Name: Custom register Page
 */
get_header();
 $plugin_var= "new_plugin";
  if (in_array( $plugin_var.'/'.$plugin_var.'.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) 
  {

global $wpdb,$user_ID;

if($user_ID){
	echo "<script type='text/javascript'>window.location.href='".home_url()."/profile/'</script>";
}else{
	$errors=array();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$username = $wpdb->escape($_REQUEST['username']);
		if (strpos($username,' ') != false) {
			$errors['username']= "Sorry, no spaced allowed. ";
		}
		if(empty($username)){
			$errors['username'] = "Please enter the username.";
		}elseif(username_exists($username)) {
			$errors['username'] = "Username is aleready exists.";
		}

		$email = $wpdb->escape($_REQUEST['email']);
		if (!is_email($email)) {
			$errors['email'] = "Please enter the valid email.";
		}elseif(email_exists($email)) {
			$errors['email'] = "Email is aleready exists.";
		}

		if(0 === preg_match("/.{6,}/", $_POST['password']))
        {  
          $errors['password'] = "Password must be at least six characters";  
        }  
   
   
        if(0 !== strcmp($_POST['password'], $_POST['password_confirmation']))
         {  
          $errors['password_confirmation'] = "Passwords do not match";  
        }  
   
          
        if($_POST['terms'] != "Yes")
        {  
            $errors['terms'] = "You must agree to Terms of Service";  
        }  
   
        if(0 === count($errors)) 
         {  
   
            $password = $_POST['password'];  
   
            $new_user_id = wp_create_user( $username, $password, $email );  
   
   
            $success = 1;  
   
            //header( 'Location:' . get_bloginfo('url') . '/login-page/?success=1&u=' . $username ); 
            echo "<script type='text/javascript'>window.location.href='".home_url()."'</script>"; 
   
        }  
   
    }  
}  
  
?>  
  <div class="container col-md-4">
<?php echo do_shortcode("[form_register]"); ?>
  </div>
<?php } get_footer(); ?>

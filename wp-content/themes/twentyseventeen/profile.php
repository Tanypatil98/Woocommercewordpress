<?php 
/*
	Template Name: Custom profile Page
 */
get_header();
 
  global $wpdb,$user_ID;
 $user_login = esc_attr( get_the_author_meta( 'display_name', $user_ID ) );
   $user_email = esc_attr( get_the_author_meta( 'user_email', $user_ID ) ); 



 
?>  
  <div class="container col-md-4">
    <div class="header">
      <h3>Detail</h3>
    </div>
    <div id="header"></div>
<form id="profile_update" class="form" action="" method="post">  
  		<div class="form-group">
        <label for="username">Username</label>  
        <input type="text" name="username" id="username" class="form-control" value="<?php echo $user_login; ?>">
        </div>  
        <div class="form-group">
        <label for="email">Email address</label>  
        <input type="text" name="email" id="email" class="form-control" value="<?php echo $user_email; ?>">  
    	</div>
      <h6>If neccesary otherwise skip Password</h6>
      <div class="form-group">
        <label for="password">New Password</label>  
        <input type="password" name="password" id="password" class="form-control">  
      </div>
      <div class="form-group">
        <label for="password_confirmation">New Confirm Password</label>  
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">  
      </div>
  
        <input type="submit" id="submitbtn" name="submit" value="Update" />  
  
</form>  
  </div>

<?php get_footer(); ?>

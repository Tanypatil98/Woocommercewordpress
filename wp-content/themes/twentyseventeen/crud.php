<?php
/*
	Template Name: Custom Ajax
 */ 
 get_header();
 
    
?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
			
			<form id="crud" action="" class="col-md-4" method="post">
				<div id="header"></div>
				<div class="form-group">
					<label>Fname:</label>
					<input type="text" name="fname" id="fname" class="form-control">
				</div>
				<div class="form-group">
					<label>Lname:</label>
					<input type="text" name="lname" id="lname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>
				<input type="submit" name="submit" value="Submit">
			</form>
		
		<div class="col-md-8">
			<div id="fetch"></div>
		</div>
	</div>
</main>
</div>
</div>

<?php 
get_footer();
?>
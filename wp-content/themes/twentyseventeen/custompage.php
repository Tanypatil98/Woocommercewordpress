<?php
/*
	Template Name: Custom Tem
 */
get_header(); ?>

<div class="wrap row">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
`			<div class="container">
	<div class="row">
			<?php
   $votes = get_post_meta($post->ID, "votes", true);
   $votes = ($votes == "") ? 0 : $votes;
   $hotelspost = array( 'post_type' => 'multiple_product');
			$loop = new WP_Query( $hotelspost );
    
		while ( $loop->have_posts() ) {
				$loop->the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );
			}

?>
</div>
</div>

<div class="container row">
	<div class="col-md-6">
This post has votes <div id='vote_counter'><?php echo $votes ?></div> 
<br>
<?php
   $nonce = wp_create_nonce("my_user_vote_nonce");
    $link = admin_url('admin-ajax.php?action=my_user_vote&post_id='.$post->ID.'&nonce='.$nonce);
    echo '<a class="user_vote button button4" data-nonce="' . $nonce . '" data-post_id="' . $post->ID . '" href="' . $link . '">vote for this article</a>';
?>
<h6>In the above button we used the ajax function</h6>
</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div><!-- .wrap -->

<?php
get_footer();
?>
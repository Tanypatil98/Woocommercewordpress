<?php
/*
	Template Name: Custom category
 */
get_header(); ?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php global $post;
		$terms = get_terms(
    array(
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
        'orderby'    => 'name',
    )
);

if ( ! empty( $terms ) && is_array( $terms ) ) {
    
    foreach ( $terms as $term ) { 
    	$category_id=$term->term_id;
 
        $args2 = get_terms(array(
                'taxonomy'     => 'product_cat',
                'child_of'     => 0,
                'parent'       => $category_id
            ));
       
        if (!$args2) {?>
        	<h2>
        	 <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name." (".$term->count.") "; ?>
        </a></h2>
        <hr>
        <?php echo do_shortcode("[products category='".$category_id."' limit='3']");
        }
    }
} 


       ?>

</main>

</div>
<div class="rec_header">
        <h3>Recently Viewed Products</h3>
        </div>
        <hr>
<div class="container">
    <div class="row">
        
        <?php echo do_shortcode("[woocommerce_recently_viewed_products per_page='5']"); ?>
        
    </div>
</div>
</div>
<?php get_footer(); ?>
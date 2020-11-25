<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 3.4.0
 */

get_header();

?>
	<?php do_action( 'woocommerce_before_main_content' ); ?>
	<div id="primary " class="content-area">
		<main id="main" class="site-main" role="main">
			<h2>Custom child theme Product shop page</h2>
			<?php
			do_action( 'woocommerce_before_shop_loop' );
			woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();
			do_action( 'woocommerce_after_shop_loop' );
			?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

	<div style="display: none;"><?php get_sidebar(); ?></div>
</div>
<?php
get_footer();
?>
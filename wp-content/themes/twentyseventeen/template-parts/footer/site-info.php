<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>" class="imprint" style="text-align: center;">
		<?php
			/* translators: %s: WordPress */
		printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'Decodeup' );
		?>
	</a>
</div><!-- .site-info -->

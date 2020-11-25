<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'first-footer-widget-area' ) ) :
	?>

	<aside class="widget-area row" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
			<div class="widget-column footer-widget-1 col-md-4">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<?php
		}
		if ( is_active_sidebar( 'sidebar-3' ) ) {
			?>
			<div class="widget-column footer-widget-2 col-md-4">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php }
		if ( is_active_sidebar( 'first-footer-widget-area' ) ) {
			?>
			<div class="widget-column footer-widget-2 col-md-4">
				<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
		<?php } ?>
	</aside><!-- .widget-area -->

<?php endif; ?>

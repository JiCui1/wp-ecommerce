<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-commerce
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-logo">
				<?php 
			the_custom_logo(); ?>
			</div>
			<div class="quick-links">
				<h5>Quick Links</h5>
		
				<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</div>
			<div class="contact-info">

				<h5>Address:</h5>
				<h5>399 Lakewood St. Belmont, MA 02478</h5>
			</div>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cwd' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cwd' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cwd' ), 'cwd', '<a href="http://jiahuacui.com">Jiahua Cui</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
				<h5>Phone:</h5>
				<h5>645-526-5789</h5>
				<h5>Email:</h5>
				<h5>info@soleperformance.com</h5>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

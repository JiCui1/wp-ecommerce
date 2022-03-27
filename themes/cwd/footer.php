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

		<?php
			$event_args = array(
				'post_type' => array('event'),
				'post_status' => 'publish',
				'post_per_page' => 3,
				'orderby' => 'rand'
			);

			$event_query = new WP_Query($event_args);


			?>
			<div class="event-post-footer">
				<?php
					if($event_query -> have_posts()){
						echo "All Events";
						while($event_query->have_posts()){
							$event_query->the_post();
							echo the_post_thumbnail();
							// echo "<li>" . get_post_title()" . </li>";

							?>

							<h3><a href="<?php
							the_permalink(); ?>"> <?php the_title(); ?></a></h3>
							

							<?php 
							
							echo the_excerpt();
							// echo the_permalink();
						}
						wp_reset_postdata();
					}
				?>


			</div>

		
		

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

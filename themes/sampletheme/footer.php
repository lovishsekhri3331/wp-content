<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_Theme
 */

?>
<div class="WP-post">

		<?php 

		$surfer_args = array (

			'post_type' => 'lovishtheme_surfer',
			'posts_per_page' => 3,

		);

		$surfer_query = new WP_Query($surfer_args);

		if($surfer_query->have_posts()){

			while($surfer_query->have_posts()){
				

				$surfer_query->the_post()

				?>
				<div class="Footer_WPQuery">
				<h2 style="text-align:center;"><?php the_title();?></h2>
				<section class="entry-content">
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>
				<?php 
					// Get the current post type
				$postType = get_post_type();
				echo '<a href="' . get_post_type_archive_link($postType) . '">Visit Post</a>';
				?>

			</section>
			</div>
				<?php
				
				
				
			}
			
		}


		?>
</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info site-footer">
			<p style="width:100%; ">Copyright © 2020 Frost company. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>

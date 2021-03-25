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

<?php 

$recipe_args = array (

    'post_type' => 'lovishtheme_surfer',
	'posts_per_page' => 3,

);

$recipe_query = new WP_Query($recipe_args);

if($recipe_query->have_posts()){

	while($recipe_query->have_posts()){
		

		$recipe_query->the_post()

		?>
		<h2><?php the_title();?></h2>
		<section class="entry-content">
        <?php the_excerpt(); ?>
		<?php the_post_thumbnail(); ?>
	</section>
		<?php
		
		
		
	}
	
}


?>

	<footer id="colophon" class="site-footer">
		<div class="site-info site-footer">
			<p>Copyright © 2020 Frost company. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>

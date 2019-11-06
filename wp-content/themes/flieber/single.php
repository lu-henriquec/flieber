<?php 
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

	<div class="container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/content-single' ); ?>
			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
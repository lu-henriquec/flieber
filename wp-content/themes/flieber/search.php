<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>


	<?php if ( have_posts() ) : ?>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="title-call">
						<span class="title-call_span">Resultados de busca para </span>
						<?php printf( ('%s'), get_search_query() ); ?>
					</h1>
				</div>
			</div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">
					<div class="col-xs-12">
						<?php get_template_part( 'templates/content-search' ); ?>
					</div>
				</div>

			<?php endwhile; ?>

			<!-- Navigation -->
			<div class="row center-xs middle-xs pagination-row">
				<div class="col-xs-12">
					<?php the_posts_pagination( array( 
							'mid_size'  => 5,
							'screen_reader_text' =>  ' ',
							'prev_text' => '',
							'next_text' => ''
							) 
						); 
					?>
				</div>
			</div>
			<!-- Navigation -->

		</div>

	<?php else : ?>

		<?php get_template_part( 'templates/content-none' ); ?>

	<?php endif; ?>


<?php get_footer(); ?>
<?php
/**
 * The template for search content none
 */

get_header(); ?>

<div class="container not-found-page">
	<div class="row not-found-row">
		<div class="col-xs-12">
			<h1 class="title-call">
				<span class="title-call_span">Não encontramos um resultado para o termo </span>
				<?php printf( ('%s'), get_search_query() ); ?>
			</h1>
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<?php
						$formAction = esc_url(home_url( '/' ));
						$formValue = get_search_query();
					?>
					<form action="<?php echo $formAction ?>" role="search" method="get" class="form form-search">
						<fieldset>
							<div>
								<input type="text" class="input-search" name="s" value="<?php '.$formValue.' ?>" placeholder="Busque por outro termo:" />
								<button type="submit" class="btn btn-search" id="searchsubmit" value=""></button>
							</div>
						</fieldset>
					</form>	
				</div>
			</div>
		</div>
	</div>

	<!-- últimos Posts -->
	<div class="row no-gutter latest-posts">
		<div class="col-xs-12">
			<p class="title-call">Últimos <span class="title-call_span">posts</span></p>
		</div>
		<div class="col-xs-12">
			<!-- LOOP WP Query -->
			<?php
			$args = array(
				'orderby' => array( 'date' => 'DESC' ),
				'posts_per_page' => 7
			);
			$query = new WP_Query($args); // exclude category
			$count = 0;
			while($query->have_posts()) : $query->the_post();
				//var_dump($count);
				$count++;
				 if ($count >= 3 && $count <= 5) { ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('card card-small'); ?>>
						<?php 
							// Últimos Posts
							get_template_part( 'templates/latest-posts' );
							// Últimos Posts
						?>
					</article>
					<?php } else { ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('card card-medium'); ?>>
						<?php 
							// Últimos Posts
							get_template_part( 'templates/latest-posts' );
							// Últimos Posts
						?>
					</article>
					<?php }

			endwhile; ?>
			<!-- LOOP WP Query -->
		</div>
	</div>
	<!-- últimos Posts -->
</div>

<?php get_footer(); ?>
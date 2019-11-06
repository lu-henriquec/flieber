<?php
/**
 * The template for displaying Taxonomy Page
 */

get_header(); ?>

<div class="container countries">
	
	<!-- -->


	<!-- PAIS INFOS -->
	<div class="row no-gutter pais-content">
		<div class="col-xs-12">
			<?php
				$tax = get_queried_object();
				$taxonomy = $tax->taxonomy;
				$taxId = $tax->term_id;
				$taxName = $tax->name;
				$taxDesc = $tax->description;
				$taxKey = $taxonomy.'_'.$taxId;
				$image = get_field('foto', $taxKey);
				$size = 'list-item';
				$thumb = $image['sizes'][ $size ];
				$height = $image['sizes'][ $size . '-height' ];
			?>
			<article>
				<div class="content">
					<div class="img">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>" width="100%" height="<?php echo $height; ?>" />
					</div>
					<div class="content-infos">
						<h2 class="pais-name"><?php echo $taxName; ?></h2>
						<p class="pais-info"><strong>Capital: </strong><?php the_field('capital', $taxKey); ?></p>
						<p class="pais-info"><strong>Código do aeroporto: </strong><?php the_field('codigo_do_aeroporto', $taxKey); ?></p>
						<p class="pais-info"><strong>Idioma: </strong><?php the_field('idiomas', $taxKey); ?></p>
						<p class="pais-info"><strong>Moeda: </strong><?php the_field('moeda', $taxKey); ?></p>
						<p class="pais-info"><?php the_field('codigo_do_pais', $taxKey); ?></p>
						<p class="pais-description">
							<?php echo $taxDesc; ?>
						</p>
					</div>
				</div>
			</article>
		</div>
	</div>
	<!-- PAIS INFOS -->
	
	<!-- Posts Looping -->
	<div class="row posts-looping">
		<div class="col-xs-12">
		<?php
			if ( is_tax( 'pais' ) ) {
				
				// This sets out a variable called $term - we'll use it ALOT for what we're about to do.
				$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'pais' ) ); ?>
				
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'templates/content-default' ); ?>

				<?php endwhile;

			}
		?>
		</div>
	</div>
	<!-- Posts Looping -->

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

	<!-- MAPA -->
	<div class="row">
		<div class="col-xs-12 mapa">
			<p class="title-call">Filtre <span class="title-call_span">por país</span></p>
				<?php get_template_part( 'templates/mapa' ); ?>
		</div>
	</div>
	<!-- MAPA -->

</div>

<?php get_footer(); ?>
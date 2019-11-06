<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div class="container not-found-page">
	<div class="row not-found-row">
		<div class="col-xs-12">
			<h1 class="title-call">PÁGINA NÃO ENCONTRADA :(</h1>
			<p class="not-found-text">Não encontramos a página que você buscou! Vá para a página inicial ou veja os nossos últimos posts</p>
			<a href="<?php bloginfo('url'); ?>" title="Ir para a página inicial" class="btn btn-default">Ir para a página inicial</a>
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

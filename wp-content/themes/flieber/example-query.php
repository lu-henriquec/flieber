<!-- Chama header.php -->
<?php get_header(); ?>
<!-- Chama header.php -->

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Default Loop</h1>

				<!-- LOOP Default -->
				<!-- Traz todos os posts, limite é definido no admin, geralmente usado em pg de categorias, tags, datas -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div id="texto">
						<?php the_content(); ?>
						<small><?php the_time('F jS, Y') ?> por <?php the_author() ?> </small>
					</div>
				<?php endwhile; ?>
					<!-- Paginação -->
					<div class="navigation"></div>
					<!-- Paginação -->
				<?php else : ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>

				<?php endif; ?>
				<!-- LOOP -->

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h1>Query Posts</h1>

				<!-- LOOP Query_posts -->
				<!-- Uma forma diferente do default, edita os resultados, EX: escolhe categoria, ordem, Numero de posts -->
				<?php global $query_string; // required
				$posts = query_posts($query_string.'&posts_per_page=2&order=ASC'); ?>

				<!-- DEFAULT LOOP GOES HERE -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div id="texto">
						<?php the_content(); ?>
						<small><?php the_time('F jS, Y') ?> por <?php the_author() ?> </small>
					</div>
				<?php endwhile; ?>
					<!-- Paginação -->
					<div class="navigation"></div>
					<!-- Paginação -->
				<?php else : ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>

				<?php endif; ?>

				<?php wp_reset_query(); // reset the query ?>
				<!-- LOOP Query_posts -->

			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<h1>Wp Query</h1>

				<!-- LOOP WP Query -->
				<!-- Para um completo controle da customização do looping de posts e criar varios loopings -->
				<?php // Loop 1
				$first_query = new WP_Query('posts_per_page=1&order=ASC'); // exclude category
				while($first_query->have_posts()) : $first_query->the_post(); ?>
				
				<!-- DEFAULT LOOP GOES HERE -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div id="texto">
						<?php the_content(); ?>
						<small><?php the_time('F jS, Y') ?> por <?php the_author() ?> </small>
					</div>
				<?php endwhile; ?>
					<!-- Paginação -->
					<div class="navigation"></div>
					<!-- Paginação -->
				<?php else : ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>

				<?php endif; ?>

				<?php endwhile;
				wp_reset_postdata(); ?>
				<!-- LOOP WP Query -->
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<h1>Get posts</h1>

				<!-- Get Posts -->
				<!-- Mais usado, mais facil, array para parmetrizar a query -->
				<?php global $post; // required
				$args = array(
					'posts_per_page' => 1,
					'order'	=> 'ASC'
				);

				$custom_posts = get_posts($args);
				foreach($custom_posts as $post) : setup_postdata($post); ?>
				
				<!-- DEFAULT LOOP GOES HERE -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div id="texto">
						<?php the_content(); ?>
						<small><?php the_time('F jS, Y') ?> por <?php the_author() ?> </small>
					</div>
				<?php endwhile; ?>
					<!-- Paginação -->
					<div class="navigation"></div>
					<!-- Paginação -->
				<?php else : ?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1>Not Found</h1>
					</div>

				<?php endif; ?>

				<?php endforeach;
				?>
				<!-- Get Posts -->
			</div>
		</div>
	</div>

<!-- Chama footer.php -->
<?php get_footer(); ?>
<!-- Chama footer.php -->
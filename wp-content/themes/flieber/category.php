<!-- category.php -->

<?php get_header(); ?>

<div class="container">

	<!-- Title Page -->
	<div class="row">
		<div class="col-xs-12 top-page">
			<?php 
				$category 		= get_category(get_query_var('cat'));
				$nameCategory 	= $category->name;
				$slugCategory 	= $category->slug;
				$descCategory	= $category->description;
			?>
			<h1 class="page-title default-title <?php echo $slugCategory; ?>" >
				<?php echo $nameCategory; ?>
			</h1>
			<p class="category-description">
				<?php echo $descCategory; ?>
			</p>
		</div>
	</div>
	<!-- Title Page -->

	<!-- Posts Looping -->
	<div class="row no-gutter posts-container">
		<div class="col-xs-12">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content-default' ); ?>

			<?php endwhile; ?>
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
	<?php
		if($slugCategory == 'destinos') { ?>
			<div class="row">
				<div class="col-xs-12 mapa">
					<p class="title-call">Filtre <span class="title-call_span">por país</span></p>
						<?php get_template_part( 'templates/mapa' ); ?>
				</div>
			</div>
		<?php }
	?>
	<!-- MAPA -->
	
	<!-- Formulário -->
	<div class="row">
		<div class="col-xs-12">
			<?php get_template_part( 'templates/form' ); ?>
		</div>
	</div>
	<!-- Formulário -->

</div>

<?php get_footer(); ?>
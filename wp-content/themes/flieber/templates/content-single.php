<div class="row no-gutter">
	<div class="col-xs-12">
		<div class="top-post-image">
			<article id="post-<?php the_ID(); ?>" <?php post_class('top-post-info'); ?>>
				<div class="img">
					<?php
						//check if the post has a Post Thumbnail assigned to it.
						if ( has_post_thumbnail() ) { ?>
							<img src="<?php the_post_thumbnail_url('post-thumb'); ?>" alt="" class="img-responsive"/>
						<?php }
					?>
				</div>
				<?php 
					$category = get_the_category();
					$nameCategory = $category[0]->name;
					$slugCategory = $category[0]->slug;
				?>
				<div class="banner-infos">
					<div class="info-destaque">
						<h2 class="info-category <?php echo $slugCategory; ?>">
							<?php echo $nameCategory; ?>	
						</h2>
					</div>
					<div class="info-box">
						<h1 class="info-title">
							<?php 
								the_title();
							?>
						</h1>
						<p class="info-description">
							Por
							<span class="author"><?php the_author(); ?></span>
							<span class="date"><?php the_date( 'd/m/Y' ); ?></span>
						</p>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>

<div class="row no-gutter content-post-row">
	<div class="col-xs-12 col-md-8">
		<div class="row no-gutter">
			<div class="col-xs-12 conteudo-post">
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<div class="addthis_native_toolbox"></div>
				<div class="the-content">
					<?php //echo get_the_content(); ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<!-- banner ads -->
		<div class="row center-xs no-gutter ads">
			<div class="col-xs-12">
				<?php dynamic_sidebar('bannerads'); ?>
			</div>
		</div>
		<!-- banner ads -->
		
		<div class="row no-gutter">
			<div class="col-xs-12">
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<div class="addthis_native_toolbox"></div>
			</div>
		</div>

		<!-- AUTOR -->
		<div class="row bottom-xs">
			<div class="col-xs-12">
				<?php get_template_part( 'templates/author' ); ?>
			</div>
		</div>
		<!-- AUTOR -->
		
		<!-- COMENTARIOS DISQUS -->
		<div class="row comments">
			<div class="col-xs-12">
				<p class="title-call">COMENTÁRIOS</p>
				<?php
					//If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
		</div>
		<!-- COMENTARIOS DISQUS -->

	</div>
	<div class="col-xs-12 col-md-4 end-md center-xs">
		<div class="sidebar-post-col">
			<?php dynamic_sidebar('sidebarpost'); ?>
		</div>
	</div>
</div>

<!-- Formulário -->
<div class="row row-form">
	<div class="col-xs-12">
		<?php get_template_part( 'templates/form' ); ?>
	</div>
</div>
<!-- Formulário -->
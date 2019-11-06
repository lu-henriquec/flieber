<article id="post-<?php the_ID(); ?>" <?php post_class('content-post'); ?>>
	<div class="content">
		<div class="img">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php
					//check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) { ?>
						<img src="<?php the_post_thumbnail_url('list-item'); ?>" alt="" class="img-list" />
					<?php }
				?>
			</a>
		</div>

		<div class="content-infos">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php if ( is_search() ) { 
					$category = get_the_category();
					$nameCategory = $category[0]->name;
				?>
					<p class="date category">
						<?php 
							echo $nameCategory. ' | ';
							the_time( 'd/m/Y H:i' );
						?>
					</p>
				<?php } else { ?>
					<p class="date">
						<?php 
							//the_date( 'd/m/Y' );
							the_time( 'd/m/Y H:i' );
						?>
					</p>
				<?php } ?>

				<h2 class="info-title">
					<?php 
						the_title();
					?>
				</h2>
				<p class="content-text hide-sm">
					<?php 						
						$content = get_the_content();
						$shortContent = wp_trim_words( $content, 115, '...' );
						echo $shortContent;
					?>
				</p>
				<p class="content-text show-sm">
					<?php 						
						$content = get_the_content();
						$shortContent = wp_trim_words( $content, 50, '...' );
						echo $shortContent;
					?>
				</p>
			</a>
		</div>
	</div>
</article>
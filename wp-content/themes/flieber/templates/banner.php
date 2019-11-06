<div class="banner">
	<div class="img">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				//check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
					<img src="<?php the_post_thumbnail_url('banner-slide'); ?>" alt="" class="img-responsive"/>
				<?php }
			?>
		</a>
	</div>
	<div class="banner-infos">
		<div class="info-destaque">
			<?php
				$category = get_the_category();
				$nameCategory = $category[0]->name;
				$slugCategory = $category[0]->slug;
			?>
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<h2 class="info-category <?php echo $slugCategory; ?>">
					<?php echo $nameCategory; ?>
				</h2>
			</a>
		</div>
		<div class="info-box">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<h3 class="info-title">
					<?php
						the_title();
					?>
				</h3>
				<p class="info-description hide-xs hide-sm hide-md hide-lg">
					<?php the_excerpt(); ?>
				</p>
			</a>
		</div>
	</div>
</div>
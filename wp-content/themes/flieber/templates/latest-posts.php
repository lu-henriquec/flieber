<div class="content">
	<div class="img">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				//check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) { ?>
					<img src="<?php the_post_thumbnail_url('medium-item'); ?>" alt="" class="card-img"/>
				<?php }
			?>
		</a>
	</div>
	<?php 
		$category = get_the_category();
		$nameCategory = $category[0]->name;
		$slugCategory = $category[0]->slug;
	?>
	<div class="card-infos <?php echo $slugCategory; ?>">
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<h2 class="info-category">
				<?php echo $nameCategory; ?>	
			</h2>
			<h3 class="info-title">
				<?php 
					the_title();
				?>
			</h3>
		</a>
	</div>
</div>

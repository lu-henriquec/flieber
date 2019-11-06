<?php 
	$authorId = get_the_author_meta('ID');
	$authorImg = get_wp_user_avatar($authorId, 141 );
	$authorName = get_the_author_meta( 'display_name', $authorId );
	$authorDescription = get_the_author_meta( 'description', $authorId );
?>
<div class="author">
	<div class="thumb-author">
		<?php echo $authorImg ?>
	</div>
	<div class="info-author">
		<div class="name-author">
			<p><?php echo $authorName; ?></p>
		</div>
		<div class="description-author">
			<p>
				<?php echo $authorDescription;?>
			</p> 
		</div>				
	</div>
</div>
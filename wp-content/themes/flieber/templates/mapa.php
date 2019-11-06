<?php
/**
 * The template for mapa
 */
?>

<!-- Posts Looping -->
<div class="wrapper">
	<section class="container__map">
		<div class="row no-gutter">
			<div class="col-xs-12 col-md-4">

				<div class="world-list">
					<nav>
						<ul class="map__list">
							<?php
  
								$args = array(
									'taxonomy'		=> 'pais',
									'parent'		=> 0, // get top level categories
									'orderby'		=> 'name',
									'order'			=> 'ASC',
									'hierarchical'	=> 1,
									'pad_counts'	=> 0,
									'hide_empty'	=> 0
								);

								$categories = get_categories( $args );
								$home 		= esc_url(home_url( '/' ));
								foreach ( $categories as $category ) { ?>

								<!-- <div class="map__list-item"> -->

									<li class="front map__item map-<?php echo $category->slug; ?>" data-target="<?php echo $category->slug; ?>"> <?php echo $category->name; ?></li> 

									<?php
									$sub_args = array(
										'taxonomy'		=> 'pais',
										'parent'		=> $category->term_id, // get child categories
										'orderby'		=> 'name',
										'order'			=> 'ASC',
										'hierarchical'	=> 1,
										'pad_counts'	=> 0,
										'hide_empty'	=> 0
									);

									$sub_categories = get_categories( $sub_args );
									?>

									<div class="back map-dropdown">
										<p class="inner-item map__item" data-target="<?php echo $category->slug; ?>"> <?php echo $category->name; ?></p> 
										<ul class="map-dropdown--select">
											<?php
											foreach ( $sub_categories as $sub_category ) { ?>

												<li><a href="<?php $formAction ?>/pais/<?php echo $sub_category->slug; ?>" rel="bookmark"><?php echo $sub_category->name; ?></a></li>

										    <?php } ?>
									    </ul>
								    </div>

								<!-- </div> -->

								    <?php
								}
							?>
						</ul>
					</nav>
				</div>	

			</div>

			<div class="col-xs-12 col-md-8 first-xs last-md">

				<div class="world-map">
					<div id="parts" class="parts">
						<div class="mapa-area"></div>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>
<!-- Posts Looping -->
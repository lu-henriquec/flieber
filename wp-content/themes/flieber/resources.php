<?php
/*
	Template Name: Resources Page
*/
?>

<?php get_header(); ?>

  <div class="image__plx">
    <div class="blue"></div>
    <div class="dark"></div>
    <div class="white"></div>
  </div>
  <!-- TOP -->
  <section class="welcome">
    <div class="container">
      <div class="content">
        <h2>Welcome to Our Blog, It's Good to see You</h2>
        <p>Welcome to the Flieber way of doing things. Subscribe to our blog!</p>
        <!-- <form>
          <input type="text" placeholder="email" />
          <button type="submit">Subscribe</button>
        </form> -->
        <?php echo do_shortcode('[contact-form-7 id="21" title="Newsletter"]'); ?>
      </div>
    </div>
  </section>
  <!-- TOP -->

  <!-- BLOG & NEWS -->
  <section class="blog">
    <div class="container">
      <div class="blog__top">
        <h2>Blog & News</h2>
        <div class="blog__tabs">
          <a href="javascript:void(0)" data-content="logistics" class="active">logistics</a>
          <a href="javascript:void(0)" data-content="system">system</a>
          <a href="javascript:void(0)" data-content="flieber">flieber</a>
        </div>
      </div>
      <div class="blog__mask">
        <div class="blog__content active" data-anchor="logistics">
          <?php

            global $post;
            $args = array( 'posts_per_page' => 6, 'category' => 2, 'orderby' => 'date', 'order' => 'DESC', );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="blog__post">
                <?php
                  //check if the post has a Post Thumbnail assigned to it.
                  if ( has_post_thumbnail() ) { ?>
                    <img src="<?php the_post_thumbnail_url('list-item'); ?>" alt="<?php the_title(); ?>"/>
                  <?php }
                ?>
                <div class="data">
                  <?php
                    the_time( 'j F / Y' );
                  ?>
                </div>
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>">
                  Learn More
                </a>
              </div>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
        </div>
        <div class="blog__content" data-anchor="system">
          <?php

            global $post;
            $args = array( 'posts_per_page' => 6, 'category' => 3, 'orderby' => 'date', 'order' => 'DESC', );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="blog__post">
                <?php
                  //check if the post has a Post Thumbnail assigned to it.
                  if ( has_post_thumbnail() ) { ?>
                    <img src="<?php the_post_thumbnail_url('list-item'); ?>" alt="<?php the_title(); ?>"/>
                  <?php }
                ?>
                <div class="data">
                  <?php
                    the_time( 'j F / Y' );
                  ?>
                </div>
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>">
                  Learn More
                </a>
              </div>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
        </div>
        <div class="blog__content" data-anchor="flieber">
          <?php

            global $post;
            $args = array( 'posts_per_page' => 6, 'category' => 4, 'orderby' => 'date', 'order' => 'DESC', );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="blog__post">
                <?php
                  //check if the post has a Post Thumbnail assigned to it.
                  if ( has_post_thumbnail() ) { ?>
                    <img src="<?php the_post_thumbnail_url('list-item'); ?>" alt="<?php the_title(); ?>"/>
                  <?php }
                ?>
                <div class="data">
                  <?php
                    the_time( 'j F / Y' );
                  ?>
                </div>
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>">
                  Learn More
                </a>
              </div>
            <?php
              endforeach;
              wp_reset_postdata();
            ?>
        </div>
      </div>
    </div>
  </section>
  <!-- BLOG & NEWS -->

  <?php get_template_part( 'templates/contact-form' ); ?>

<?php get_footer(); ?>

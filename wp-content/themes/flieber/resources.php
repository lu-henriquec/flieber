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

            <div class="blog__pagination pagination">
              <span class="pagination__arrow prev">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                    xml:space="preserve">
                    <g>
                      <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                    </g>
                  </svg>
              </span>
              <span class="pagination__item">1</span>
              <span class="pagination__item">2</span>
              <span class="pagination__item">3</span>
              <span class="pagination__item">...</span>
              <span class="pagination__item">18</span>
              <span class="pagination__arrow next">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                    xml:space="preserve">
                    <g>
                      <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                    </g>
                  </svg>
              </span>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BLOG & NEWS -->

  <?php get_template_part( 'templates/contact-form' ); ?>

<?php get_footer(); ?>

<?php
/*
	Template Name: Home Page
*/
?>

<?php get_header(); ?>

  <!-- Feature -->
  <section class="feature">
    <div class="container">
      <div class="content" data-aos="fade-up" data-aos-offset="200" data-aos-delay="300">
        <div>
          <div class="slider-nav">
            <div>
              <h2><?php the_field('titulo_slider_1'); ?></h2>
              <p>
                <?php the_field('texto_slider_1'); ?>
              </p>
              <button>Get started</button>
            </div>
            <div>
              <h2><?php the_field('titulo_slider_2'); ?></h2>
              <p>
                <?php the_field('texto_slider_2'); ?>
              </p>
              <button>Get started</button>
            </div>
            <div>
              <h2><?php the_field('titulo_slider_3'); ?></h2>
              <p>
                <?php the_field('texto_slider_3'); ?>
              </p>
              <button>Get started</button>
            </div>
            <div>
              <h2><?php the_field('titulo_slider_4'); ?></h2>
              <p>
                <?php the_field('texto_slider_4'); ?>
              </p>
              <button>Get started</button>
            </div>
            <div>
              <h2><?php the_field('titulo_slider_5'); ?></h2>
              <p>
                <?php the_field('texto_slider_5'); ?>
              </p>
              <button>Get started</button>
            </div>
          </div>
        </div>
        <div class='slider-mask'>
          <div class="slider-for">
            <div>
              <img src="<?php bloginfo('template_url'); ?>/images/features/tela_01.png" alt="The New Way to Operate Your E-commerce" />
            </div>
            <div>
              <img src="<?php bloginfo('template_url'); ?>/images/features/tela_02.png" alt="The New Way to Operate Your E-commerce" />
            </div>
            <div>
              <img src="<?php bloginfo('template_url'); ?>/images/features/tela_03.png" alt="The New Way to Operate Your E-commerce" />
            </div>
            <div>
              <img src="<?php bloginfo('template_url'); ?>/images/features/tela_04.png" alt="The New Way to Operate Your E-commerce" />
            </div>
            <div>
              <img src="<?php bloginfo('template_url'); ?>/images/features/tela_05.png" alt="The New Way to Operate Your E-commerce" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature -->

  <!-- Videos -->
  <section class="videos">
    <div class="container">
      <div class="videos__text" data-aos="fade-up-left" data-aos-delay="100">
        <span>Right Place.</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta cursus libero ac tincidunt.
      </div>
      <div class="content">
        <div class="slider-nav">
          <div>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/326585537?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
          </div>
          <div>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/337802171?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/video.png" alt="" />
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/video.png" alt="" />
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/video.png" alt="" />
          </div>
        </div>
        <div class="slider-for">
          <div>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/326585537?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
          </div>
          <div>
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/337802171?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/video.png" alt="" />
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/video.png" alt="" />
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/video.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Videos -->

  <!-- Advantages -->
  <section class="advantages">
    <div class="bg"></div>
    <div class="container">
      <h2 data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"><?php the_field('area_box_title'); ?></h2>
      <p data-aos="fade-up" class='text'><?php the_field('area_box_text'); ?></p>
      <div class="content">
        <div class="box" data-aos="flip-left">
          <div class="box__image">
            <img src="<?php bloginfo('template_url'); ?>/images/advantages/Icon_Increase_Your_Sales.svg" width="111" height="94" />
          </div>
          <h3>Increase Your Sales</h3>
          <p>
            Make sure you always have your products available for sale. No more stock-outs.
          <p>
        </div>
        <div class="box" data-aos="flip-left" data-aos-delay="200">
          <div class="box__image">
            <img src="<?php bloginfo('template_url'); ?>/images/advantages/icon_Free-up_Trapped_Capital.svg" width="128" height="80" />
          </div>
          <h3>Free-up Trapped Capital</h3>
          <p>
            Allocate capital efficiently
            by only carrying the just-right inventory levels.
            No more ovestocks.
          <p>
        </div>
        <div class="box" data-aos="flip-left" data-aos-delay="400">
          <div class="box__image">
            <img src="<?php bloginfo('template_url'); ?>/images/advantages/icon_Increase_Your_Margin.svg" width="118" height="108" />
          </div>
          <h3>Increase Your Margin</h3>
          <p>
            Prioritize the right products and sell the ideal quantities to optimize for margin.
          <p>
        </div>
        <div class="box"data-aos="flip-left">
          <div class="box__image">
            <img src="<?php bloginfo('template_url'); ?>/images/advantages/icon_Maximize_Your_Working_Capital.svg" width="111" height="111" />
          </div>
          <h3>Maximize Your Working Capital</h3>
          <p>
            Reduce the capital cycle of your business by streamlining your purchase-to-sales process.
          <p>
        </div>
        <div class="box" data-aos="flip-left" data-aos-delay="200">
          <div class="box__image">
            <img src="<?php bloginfo('template_url'); ?>/images/advantages/icon_Reduce_Bad_Reviews.svg" width="146" height="78" />
          </div>
          <h3>Reduce Bad Reviews</h3>
          <p>
            Assure the quality level of your products so that bad reviews don't hurt your sales anymore.
          <p>
        </div>
        <div class="box" data-aos="flip-left" data-aos-delay="400">
          <div class="box__image">
            <img src="<?php bloginfo('template_url'); ?>/images/advantages/icon_Eliminate_Your_Headaches.svg" width="100" height="101" />
          </div>
          <h3>Eliminate Your Headaches</h3>
          <p>
            Leverage on our system and our team to reduce the complexities of your supply-chain.
          <p>
        </div>
      </div>
      <button class="button">Learn more</button>
    </div>
  </section>
  <!-- Advantages -->

  <!-- How We Do It -->
  <section class="howwedoit">
    <div class="intro" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50">
      <img src="<?php bloginfo('template_url'); ?>/images/how-we-do-it/logo-v2.svg" class="logo" width='100'/>
      <h3 class="title"><?php the_field('titulo_how_we_do'); ?></h3>
      <p class="description">
        <?php the_field('texto_how_we_do'); ?>
      </p>
    </div>

    <div class="howwedoit__slider">
      <?php
        $hero = get_field('slider_how_we_do');
        if( $hero ): ?>
          <div>
            <div class="item">
              <div class="item__text">
                <?php echo $hero['titulo_item_1']; ?>
              </div>
              <div>
                <img src="<?php echo $hero['image_item_1']; ?>" />
              </div>
            </div>
          </div>
          <div>
            <div class="item">
              <div class="item__text">
                <?php echo $hero['titulo_item_2']; ?>
              </div>
              <div>
                <img src="<?php echo $hero['image_item_2']; ?>" />
              </div>
            </div>
          </div>
          <div>
            <div class="item">
              <div class="item__text">
                <?php echo $hero['titulo_item_3']; ?>
              </div>
              <div>
                <img src="<?php echo $hero['image_item_3']; ?>" />
              </div>
            </div>
          </div>
          <div>
            <div class="item">
              <div class="item__text">
                <?php echo $hero['titulo_item_4']; ?>
              </div>
              <div>
                <img src="<?php echo $hero['image_item_4']; ?>" />
              </div>
            </div>
          </div>
          <div>
            <div class="item">
              <div class="item__text">
                <?php echo $hero['titulo_item_5']; ?>
              </div>
              <div>
                <img src="<?php echo $hero['image_item_5']; ?>" />
              </div>
            </div>
          </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- How We Do It -->

  <!-- LOGOS -->
  <section class='marcas'>
    <div class='container'>
      <div class='content' data-aos="zoom-in">
        <div><img src="<?php bloginfo('template_url'); ?>/images/marcas/logo_NYT.png" alt="New York Times" width="200" height="29" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/marcas/logo_WSJ.png" alt="WSJ" width="61" height="34" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/marcas/business_insider.png" alt="Business Insider" width="98" height="35" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/marcas/bloomberg.png" alt="Bloomberg" width="146" height="44" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/marcas/digiday.png" alt="Digiday" width="131" height="25" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/marcas/Retail_dive.png" alt="Retail Dive" width="182" height="37" /></div>
      </div>
    </div>
  </section>
  <!-- LOGOS -->

  <!-- DEPOIMENTOS -->
  <section class="depoiments">
    <div class="container">
      <div class="content">
        <div class="slider-nav">
        <?php
          $hero = get_field('slider_depoimentos');
          if( $hero ): ?>
            <div class="depoiments__slide">
              <img src="<?php echo $hero['imagem_1']; ?>" alt="" />
              <div class="depoiments__item">
                <div data-aos="fade-up-right" data-aos-delay="100">
                  <?php echo $hero['conteudo_1']; ?>
                </div>
              </div>
            </div>
            <div class="depoiments__slide">
              <img src="<?php echo $hero['imagem_2']; ?>" alt="" />
              <div class="depoiments__item">
                <div data-aos="fade-up-right" data-aos-delay="100">
                  <?php echo $hero['conteudo_2']; ?>
                </div>
              </div>
            </div>
            <div class="depoiments__slide">
              <img src="<?php echo $hero['imagem_3']; ?>" alt="" />
              <div class="depoiments__item">
                <div data-aos="fade-up-right" data-aos-delay="100">
                  <?php echo $hero['conteudo_3']; ?>
                </div>
              </div>
            </div>
            <div class="depoiments__slide">
              <img src="<?php echo $hero['imagem_4']; ?>" alt="" />
              <div class="depoiments__item">
                <div data-aos="fade-up-right" data-aos-delay="100">
                  <?php echo $hero['conteudo_4']; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- DEPOIMENTOS -->

  <!-- TRANSPORTS -->
  <section class="transports">
    <div class="container">
      <div class="content" data-aos="slide-up" data-aos-delay="100">
        <div class="slider-nav">
          <div class="transports__item">
            <h3>Ocean Shipping</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur dmop adipiscing Integer aliquam urna. Lorem ipsum dolor sit amet, consectetur dmop adipiscing Integer aliquam urna. g Integer aliquam urna. Lorem ipsum dolor sit amet, consectetur dmop a Integer.
            </p>
            <button>Learn more</button>
          </div>
          <div class="transports__item">
            <h3>Air Freight</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur dmop adipiscing Integer aliquam urna. Lorem ipsum dolor sit amet, consectetur dmop adipiscing Integer aliquam urna. g Integer aliquam urna. Lorem ipsum dolor sit amet, consectetur dmop a Integer.
            </p>
            <button>Learn more</button>
          </div>
          <div class="transports__item">
            <h3>Ground Transportation</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur dmop adipiscing Integer aliquam urna. Lorem ipsum dolor sit amet, consectetur dmop adipiscing Integer aliquam urna. g Integer aliquam urna. Lorem ipsum dolor sit amet, consectetur dmop a Integer.
            </p>
            <button>Learn more</button>
          </div>
        </div>
        <div class="slider-for">
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/transports/ocean.jpg" alt="" />
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/transports/air.jpg" alt="" />
          </div>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/images/transports/Ground.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- TRANSPORTS -->

  <!-- BLOG & NEWS -->
  <section class="blog">
    <div class="container">
      <div class="blog__top" data-aos="fade-up" data-aos-delay="100">
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
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
              <p>
                <?php the_excerpt(); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="link">
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
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="link">
                  Learn More
                </a>
              </div>
            <?php endforeach;
            wp_reset_postdata();?>
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
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="link">
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
<!-- footer.php -->

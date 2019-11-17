<?php
/*
	Template Name: Resources Page
*/
?>

<?php get_header(); ?>

  <!-- TOP -->
  <section class="welcome">
    <div class="container">
      <div class="content">
        <h2>Welcome to Our Blog, It's Good to see You</h2>
        <p>Welcome to the Flieber way of doing things. Subscribe to our blog!</p>
        <form>
          <input type="text" placeholder="email" />
          <button type="submit">Subscribe</button>
        </form>
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
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
          <div class="blog__post">
            <img src="<?php bloginfo('template_url'); ?>/images/img-bloco.png" alt="" />
            <div class="data">21 december / 2019</div>
            <h3>Optimize Product Profitability</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere. Maecenas accumsan vel sapien non euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed nisi laoreet, gravida purus in, accumsan nisl. Curabitur dignissim scelerisque quam eu posuere.</p>
            <a>Learn More</a>
          </div>
        </div>
        <div class="blog__content" data-anchor="system">system</div>
        <div class="blog__content" data-anchor="flieber">flieber</div>
      </div>
    </div>
  </section>
  <!-- BLOG & NEWS -->

  <?php get_template_part( 'templates/contact-form' ); ?>

<?php get_footer(); ?>

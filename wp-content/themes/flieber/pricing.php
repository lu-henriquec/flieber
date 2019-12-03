<?php
/*
	Template Name: Pricing Page
*/
?>

<?php get_header(); ?>


  <div class="image__plx">
    <div class="blue"></div>
    <div class="dark"></div>
    <div class="white"></div>
  </div>
  <!-- Feature -->
  <section class="feature">
    <div class="container">
      <div class="content">
        <div>
          <div class="slider-nav">
            <div>
              <h2>Request a Quote</h2>
              <p>
              Flieber is a Silicon Valley-based startup that is revolutionizing the way online retailers operate.
              <br/><br/>
              Join the first Sales Synchronization™ platform for online retailers starting at $199 per month.
              </p>
            </div>
          </div>
        </div>
        <div class='slider-mask'>
          <div class="slider-for">
            <div>
              <img src="<?php bloginfo('template_url'); ?>/images/features/tela_04.png" alt="The New Way to Operate Your E-commerce" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature -->

  <!-- Form -->
  <section class="contact-form">
    <div class="container">
      <?php echo do_shortcode('[contact-form-7 id="20" title="Pricing Form"]'); ?>
    </div>
  </section>
  <!-- Form -->

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/app-pricing.min.js"></script>

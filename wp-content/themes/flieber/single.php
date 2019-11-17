<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

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

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/content-single' ); ?>


		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

  <?php get_template_part( 'templates/contact-form' ); ?>

<?php get_footer(); ?>

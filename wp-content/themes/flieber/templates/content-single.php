
<div class="post">
	<article class="conteudo">
    <div class="conteudo__top">
      <div class="intro">
        <h2>Blog & News</h2>
      </div>
      <?php
        //check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) { ?>
          <img src="<?php the_post_thumbnail_url('post-thumb'); ?>" alt="" class="img-responsive"/>
        <?php }
      ?>
      <span class="date"><?php the_date( 'j F / Y' ); ?></span>
      <h1 class="info-title">
        <?php
          the_title();
        ?>
      </h1>
    </div>
    <?php the_content(); ?>
  </article>

  <div class="sidebar">
    <?php dynamic_sidebar('sidebarpost'); ?>
  </div>
</div>

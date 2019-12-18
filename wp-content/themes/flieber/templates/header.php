<header>
  <div class='container'>
    <div class='content'>
      <div class='logo'>
        <a href="<?php bloginfo('url'); ?>/">
          <img class="logo__black" src='<?php bloginfo('template_url'); ?>/images/logo_Flieber.svg' alt='Flieber' />
          <img class="logo__fixed" src='<?php bloginfo('template_url'); ?>/images/logo_Flieber_fixed.svg' alt='Flieber' />
          <img class="logo__white" src='<?php bloginfo('template_url'); ?>/images/logo_Flieber_White.svg' alt='Flieber' />
        </a>
      </div>
      <?php wp_nav_menu( array( 'menu' => 'menu principal', 'container' => 'nav', 'menu_class' => 'navigation') ); ?>
      <!-- <nav>
        <ul>
          <li><a href='<?php bloginfo('url'); ?>/our-vision'>Our Vision</a></li>
          <li><a href='<?php bloginfo('url'); ?>/our-solution'>Our Solution</a></li>
          <li><a href='<?php bloginfo('url'); ?>/pricing'>Pricing</a></li>
          <li><a href='<?php bloginfo('url'); ?>/resources'>Resources</a></li>
          <li><a href='#'>Log in</a></li>
          <li><a href='#' class='feature'>Get Started</a></li>
        </ul>
      </nav> -->
      <a href="javascript:void(0)" class="menu"><span></span></a>
    </div>
  </div>
</header>

<?php
/**
 * Mondial functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 */


/**************************/
/*
/* Configuração do Template
/*
/**************************/


// Adiciona script
function template_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, NULL, true);
		wp_enqueue_script('jquery');

		wp_enqueue_media();
		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array('jquery'), NULL, true );
	}
}
add_action('wp_enqueue_scripts', 'template_script');


// funcao para colocar async ou defer no script
// function add_defer_attribute($tag) {
// 	// array of scripts to defer
// 	$scripts_to_defer = array(
// 		// 'jquery.min.js',
// 		'app.min.js',

// 		'bwg_frontend.js',
// 		'jquery.sumoselect.min.js',
// 		'jquery.mobile.js',
// 		'jquery.mCustomScrollbar.concat.min.js',
// 		'jquery.fullscreen-0.4.1.js',
// 		'utils.min.js',
// 		'plupload.full.min.js',
// 		'anti-spam-4.3.js',
// 		'jquery.form.min.js',
// 		'scripts.js',
// 		'underscore.min.js',
// 		'shortcode.min.js',
// 		'backbone.min.js',
// 		'wp-util.min.js',
// 		'wp-backbone.min.js',
// 		'media-models.min.js',
// 		'wp-plupload.min.js',
// 		'core.min.js',
// 		'widget.min.js',
// 		'mouse.min.js',
// 		'sortable.min.js',
// 		'mediaelement-and-player.min.js',
// 		'wp-mediaelement.min.js',
// 		'media-views.min.js',
// 		'media-editor.min.js',
// 		'media-audiovideo.min.js',
// 		'wp-embed.min.js',
// 		'count.js'
// 	);
// 	foreach($scripts_to_defer as $defer_script){
// 	   if(true == strpos($tag, $defer_script ))
// 		   return str_replace(' src', ' defer="defer" src', $tag);
// 	}
// 	// array of scripts to async
// 	$scripts_to_async = array(
// 		// 'jquery.min.js',
// 		'app.min.js',

// 		'bwg_frontend.js',
// 		'jquery.sumoselect.min.js',
// 		'jquery.mobile.js',
// 		'jquery.mCustomScrollbar.concat.min.js',
// 		'jquery.fullscreen-0.4.1.js',
// 		'utils.min.js',
// 		'plupload.full.min.js',
// 		'anti-spam-4.3.js',
// 		'jquery.form.min.js',
// 		'scripts.js',
// 		'underscore.min.js',
// 		'shortcode.min.js',
// 		'backbone.min.js',
// 		'wp-util.min.js',
// 		'wp-backbone.min.js',
// 		'media-models.min.js',
// 		'wp-plupload.min.js',
// 		'core.min.js',
// 		'widget.min.js',
// 		'mouse.min.js',
// 		'sortable.min.js',
// 		'mediaelement-and-player.min.js',
// 		'wp-mediaelement.min.js',
// 		'media-views.min.js',
// 		'media-editor.min.js',
// 		'media-audiovideo.min.js',
// 		'wp-embed.min.js',
// 		'count.js'
// 	);
// 	foreach($scripts_to_async as $async_script){
// 	 if(true == strpos($tag, $async_script ))
// 		   return str_replace(' src', ' async="async" src', $tag);
// 	}
// 	return $tag;
// }
// add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);


// HABILITA IMAGENS DESTACADAS NOS POSTS NO ADMIN
add_theme_support( 'post-thumbnails' );

//FUNÇÃO DE CORTE DAS IMAGENS
add_image_size('banner-slide', 1180, 585, true);
add_image_size('post-thumb', 1180, 400, true);
add_image_size('large-item', 780, 300, true);
add_image_size('medium-item', 580, 300, true);
add_image_size('list-item', 600, 345, true);
add_image_size('small-item', 380, 300, true);
add_image_size('xsmall-item', 300, 300, true);

// Adiciona classe cf7
// add_filter( 'wpcf7_form_class_attr', 'custom_class_form' );

// function custom_class_form( $class ) {
// 	$class .= ' form-box';
// 	return $class;
// }

//LIMITA TITLE
// function the_title_limit($length, $replacer = '...') {
// 	$string = the_title('','',FALSE);
// 	if(strlen($string) > $length)
// 		$string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
// 		echo $string;
// }

// HABILITA RESUMO NAS PÁGINAS
// add_post_type_support( 'page', 'excerpt' );

// HABILITAR ITEM MENU NO ADMIN
// register_nav_menus();

// HABILITA A WIDGET AREA NO ADMIN
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Header',
		'id'   => 'header',
		'description'   => 'Header Sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Sidebar Post',
		'id'   => 'sidebarpost',
		'description'   => 'Sidebar Post.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Banner ads',
		'id'   => 'bannerads',
		'description'   => 'Banner ads Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Social',
		'id'   => 'social',
		'description'   => 'Social Icons Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Footer 1',
		'id'   => 'footer1',
		'description'   => 'Footer sidebar Left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Footer 2',
		'id'   => 'footer2',
		'description'   => 'Footer sidebar Center',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Footer 3',
		'id'   => 'footer3',
		'description'   => 'Footer sidebar Center',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Footer 4',
		'id'   => 'footer4',
		'description'   => 'Footer sidebar Right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}

// WIDGET ULTIMOS POSTS
class WP_Related extends WP_Widget {

	// CONSTRUCT
	function __construct() {
		$widget_ops = array(
			'classname' => 'widget_relacionados',
			'description' => 'Posts Relacionados'
		);
		$this->WP_Widget('relacionados', 'Posts Relacionados', $widget_ops);
	}

	// WIDGET
	function widget( $args, $instance ) {
		extract( $args );

		// Display the widget
		echo '<div class="related-widget">'; ?>

		<div class="related-widget__header">
      <p>
        <?php
					$category = get_the_category($post->ID);
					$nameCategory = $category[0]->name;
				?>
        <?php echo $nameCategory; ?>
        <span>- related news</span>
      </p>
		</div>

    <div class="related-widget__list">

      <?php
      $categories = get_the_category($post->ID);
      $first_category = $categories[0]->term_id;
      $newQuery = array(
        'category__in' => array($first_category),
        'post__not_in' => array($post->ID),
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page'=> 4,
        'caller_get_posts'=> 1
      );
      $query = new WP_Query($newQuery);
      // Check if checkbox is checked
      if( $instance['checkimg'] && $instance['checkimg'] === '1' ) {

        while($query->have_posts()) : $query->the_post(); ?>

          <div class="related-widget__item">
            <a href="<?php the_permalink(); ?>" rel="bookmark">
              <?php if ( has_post_thumbnail() ) { ?>
                <img src="<?php the_post_thumbnail_url('banner-slide'); ?>" alt=""/>
              <?php } ?>
              <div class="date">
                <?php
                  the_time( 'j F / Y' );
                ?>
              </div>
              <h2>
                <?php
                  $title = get_the_title();
                  $shortTitle = wp_trim_words( $title, 5, '...' );
                  echo $title;
                ?>
              </h2>
            </a>
          </div>

        <?php endwhile;

      } else {

        while($query->have_posts()) : $query->the_post(); ?>

          <div class="widget-list-item no-image">
            <div class="content-infos">
              <a href="<?php the_permalink(); ?>" rel="bookmark">
                <p class="date">
                  <?php
                    $category = get_the_category();
                    echo $nameCategory = $category[0]->name . '&nbsp;';
                    the_time( 'd/m/Y H:i' );
                  ?>
                </p>
                <h2 class="info-title">
                  <?php
                    $title = get_the_title();
                    $shortTitle = wp_trim_words( $title, 5, '...' );
                    echo $shortTitle;
                  ?>
                </h2>
                <p class="content-text">
                  <?php
                    $content = get_the_content();
                    $shortContent = wp_trim_words( $content, 12, '...' );
                    echo $shortContent;
                  ?>
                </p>
              </a>
            </div>
          </div>

        <?php endwhile;

      } ?>
    </div>
		<?php echo '</div>';
	}

	// UPDATE
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		// Fields
		$instance['checkimg'] = strip_tags($new_instance['checkimg']);
		return $instance;
	}

	// FORM
	function form( $instance ) {
		// Check values
		if( $instance) {
			$checkimg = esc_attr( $instance['checkimg'] ); // Added this
		} else {
			$checkimg = '';
		}
	?>
		<p>
			<input id="<?php echo esc_attr( $this->get_field_id( 'checkimg' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'checkimg' ) ); ?>" type="checkbox" value="1" <?php checked( '1', $checkimg ); ?> />
			<label for="<?php echo esc_attr( $this->get_field_id( 'checkimg' ) ); ?>"><?php _e( 'Exibir Imagem', 'wp_widget_plugin' ); ?></label>
		</p>
	<?php
	}
}


function config_widget_register() {
	register_widget( 'WP_Related' );
}
add_action('widgets_init','config_widget_register');


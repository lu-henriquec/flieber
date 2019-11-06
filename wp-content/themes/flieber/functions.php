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
 * @package WordPress
 * @subpackage Mondial
 * @since Mondial 1.0
 */


/**************************/
/*
/* Configuração do Template
/*
/**************************/

// Adiciona scripts jQuery
// function init_script() {
// 	if (!is_admin()) {
// 		wp_deregister_script('jquery');
// 		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1', true);
// 	}
// }
// add_action('init', 'init_script');

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
function add_defer_attribute($tag) {
	// array of scripts to defer
	$scripts_to_defer = array(
		// 'jquery.min.js',
		'app.min.js',

		'bwg_frontend.js',
		'jquery.sumoselect.min.js',
		'jquery.mobile.js',
		'jquery.mCustomScrollbar.concat.min.js',
		'jquery.fullscreen-0.4.1.js',
		'utils.min.js',
		'plupload.full.min.js',
		'anti-spam-4.3.js',
		'jquery.form.min.js',
		'scripts.js',
		'underscore.min.js',
		'shortcode.min.js',
		'backbone.min.js',
		'wp-util.min.js',
		'wp-backbone.min.js',
		'media-models.min.js',
		'wp-plupload.min.js',
		'core.min.js',
		'widget.min.js',
		'mouse.min.js',
		'sortable.min.js',
		'mediaelement-and-player.min.js',
		'wp-mediaelement.min.js',
		'media-views.min.js',
		'media-editor.min.js',
		'media-audiovideo.min.js',
		'wp-embed.min.js',
		'count.js'
	);
	foreach($scripts_to_defer as $defer_script){
	   if(true == strpos($tag, $defer_script ))
		   return str_replace(' src', ' defer="defer" src', $tag);
	}
	// array of scripts to async
	$scripts_to_async = array(
		// 'jquery.min.js',
		'app.min.js',

		'bwg_frontend.js',
		'jquery.sumoselect.min.js',
		'jquery.mobile.js',
		'jquery.mCustomScrollbar.concat.min.js',
		'jquery.fullscreen-0.4.1.js',
		'utils.min.js',
		'plupload.full.min.js',
		'anti-spam-4.3.js',
		'jquery.form.min.js',
		'scripts.js',
		'underscore.min.js',
		'shortcode.min.js',
		'backbone.min.js',
		'wp-util.min.js',
		'wp-backbone.min.js',
		'media-models.min.js',
		'wp-plupload.min.js',
		'core.min.js',
		'widget.min.js',
		'mouse.min.js',
		'sortable.min.js',
		'mediaelement-and-player.min.js',
		'wp-mediaelement.min.js',
		'media-views.min.js',
		'media-editor.min.js',
		'media-audiovideo.min.js',
		'wp-embed.min.js',
		'count.js'
	);
	foreach($scripts_to_async as $async_script){
	 if(true == strpos($tag, $async_script ))
		   return str_replace(' src', ' async="async" src', $tag);
	}
	return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);


















// add admin scripts
function wdscript() {
	wp_enqueue_media();
	wp_enqueue_script('app', get_template_directory_uri() . '/admin/script/widget.js', false, '1.0', true);
}
add_action('admin_enqueue_scripts', 'wdscript');

// Custom WordPress Login Logo
function my_login_logo() {
	echo "
		<style tyle=\"text/css\">
			body.login div#login h1 a {
				background-image: url(".get_bloginfo('template_directory')."/images/admin-logo.png);
				-webkit-background-size: auto;
				background-size: auto;
				margin: 0 0 25px;
				width: 320px;
			}
		</style>";
 }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
	 
// HABILITA IMAGENS DESTACADAS NOS POSTS NO ADMIN
add_theme_support( 'post-thumbnails' );

//FUNÇÃO DE CORTE DAS IMAGENS
add_image_size('banner-slide', 1180, 585, true);
add_image_size('post-thumb', 1180, 400, true);
add_image_size('large-item', 780, 300, true);
add_image_size('medium-item', 580, 300, true);
add_image_size('list-item', 460, 225, true);
add_image_size('small-item', 380, 300, true);
add_image_size('xsmall-item', 300, 300, true);

// Adiciona classe cf7
add_filter( 'wpcf7_form_class_attr', 'custom_class_form' );
	 
function custom_class_form( $class ) {
	$class .= ' form-box';
	return $class;
}

//LIMITA TITLE
function the_title_limit($length, $replacer = '...') {
	$string = the_title('','',FALSE);
	if(strlen($string) > $length)
		$string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;
		echo $string;
}

// HABILITA RESUMO NAS PÁGINAS
add_post_type_support( 'page', 'excerpt' );

// HABILITAR ITEM MENU NO ADMIN
register_nav_menus();

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

//WIDGET MOTOR VENDAS
class WP_motor extends WP_widget {

	// CONSTRUCT
	function __construct() {
		$widget_ops = array(
			'classname' => 'motor_widget',
			'description' => 'Motor de vendas'
		);
		$this->WP_Widget('motor', 'Motor de vendas', $widget_ops);
	}

	//WIDGET
	function widget( $args, $instance ) {
		extract( $args );

		$titleOne = esc_attr( $instance['titleOne'] );
		$motorOne = $instance['motorOne'];

		$titleTwo = esc_attr( $instance['titleTwo'] );
		$motorTwo = $instance['motorTwo'];

		// Display the widget
		echo '<div class="motor-widget">'; ?>

			<div class="row no-gutter start-xs menu-widget-motor">
				<div class="col-xs-12">
					<?php 
						if ( is_single() ) {
							$motor = get_field('motor_principal');
							
							if ( $motor == 'Allianz' ) {
								$tmp = $motorOne;
								$motorOne = $motorTwo;
								$motorTwo = $tmp;
								
								$tmp = $titleOne;
								$titleOne = $titleTwo;
								$motorTwo = $tmp;
								
							}
					?>
					
						<div class="tabs">
							<ul class="tab-links">
								<li class="tab-item <?php echo $titleOne; ?>"><a href="#" data-tab="tab1" class="tab-item_link active"><?php echo $titleOne; ?></a></li>
								<li class="tab-item <?php echo $titleTwo; ?>"><a href="#" data-tab="tab2" class="tab-item_link"><?php echo $titleTwo; ?></a></li>
							</ul>
						</div>

						<div class="tab-content">
							<div id="tab1" class="tab active">
								<?php echo $motorOne; ?>
							</div>

							<div id="tab2" class="tab">
								<?php echo $motorTwo; ?>
							</div>
						</div>

					<?php }	?>
				</div>
			</div>

		<?php echo '</div>';
	}

	// UPDATE
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		// Fields
		$instance['titleOne'] = strip_tags($new_instance['titleOne']);
		$instance['motorOne'] = $new_instance['motorOne'];

		$instance['titleTwo'] = strip_tags($new_instance['titleTwo']);
		$instance['motorTwo'] = $new_instance['motorTwo'];
		return $instance;
	}

	// FORM
	function form( $instance ) {
		// Check values
		if( $instance) {

			$titleOne = esc_attr( $instance['titleOne'] ); 
			$motorOne = $instance['motorOne']; // Added this

			$titleTwo = esc_attr( $instance['titleTwo'] ); 
			$motorTwo = $instance['motorTwo']; // Added this
		} else {
			$titleOne = '';
			$motorOne = '';
			$titleTwo = '';
			$motorTwo = '';
		}
	?>

		<!-- TITLE 1 -->
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'titleOne' ) ); ?>"><?php _e( 'Inserir titulo do motor Mondial', 'wp_widget_plugin' ); ?></label></p>
		<p><input type="text" id="<?php echo esc_attr( $this->get_field_id( 'titleOne' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'titleOne' ) ); ?>" value="<?php echo $titleOne; ?>" /></p>

		<!-- TEXTAREA 1 -->
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'motorOne' ) ); ?>"><?php _e( 'Inserir iframe do motor Mondial', 'wp_widget_plugin' ); ?></label></p>
		<p><textarea id="<?php echo $this->get_field_id( 'motorOne' ); ?>" name="<?php echo $this->get_field_name( 'motorOne' ); ?>" rows="10" cols="60"  ><?php echo $motorOne; ?></textarea></p>

		<!-- ////////////////////////////////// -->
		<!-- ////////////////////////////////// -->

		<!-- TITLE 2 -->
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'titleTwo' ) ); ?>"><?php _e( 'Inserir titulo do motor Allianz', 'wp_widget_plugin' ); ?></label></p>
		<p><input type="text" id="<?php echo esc_attr( $this->get_field_id( 'titleTwo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'titleTwo' ) ); ?>" value="<?php echo $titleTwo; ?>" /></p>

		<!-- TEXTAREA 2 -->
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'motorTwo' ) ); ?>"><?php _e( 'Inserir iframe do motor Allianz', 'wp_widget_plugin' ); ?></label></p>
		<p><textarea id="<?php echo esc_attr( $this->get_field_id( 'motorTwo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'motorTwo' ) ); ?>" rows="10" cols="60"><?php echo $motorTwo; ?></textarea></p>
	<?php
	}
}

// WIDGET ULTIMOS POSTS
class WP_Latest extends WP_Widget {

	// CONSTRUCT
	function __construct() {
		$widget_ops = array(
			'classname' => 'widget_ultimos',
			'description' => 'Últimos Posts'
		);
		$this->WP_Widget('ultimos', 'Últimos Posts', $widget_ops);
	}

	// WIDGET
	function widget( $args, $instance ) {
		extract( $args );

		// Display the widget
		echo '<div class="latest-widget">'; ?>

		<div class="row start-xs">
			<div class="col-xs-12">
				<p class="title-call">Últimos <span class="title-call_span">posts</span></p>
			</div>
		</div>

		<div class="row start-xs">
			<div class="col-xs-12">
				
				<?php
				// Loop 1
				$newQuery = array(
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 4
				);
				$query = new WP_Query($newQuery);
				// Check if checkbox is checked
				if( $instance['checkimg'] && $instance['checkimg'] === '1' ) { 

					while($query->have_posts()) : $query->the_post(); ?>

						<div class="widget-list-item">
							<div class="img">
								<?php if ( has_post_thumbnail() ) { ?>
									<img src="<?php the_post_thumbnail_url('xsmall-item'); ?>" width="72" height="72" alt=""/>
								<?php } ?>
							</div>
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
											$shortContent = wp_trim_words( $content, 8, '...' );
											echo $shortContent;
										?>
									</p>
								</a>
							</div>
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

		<div class="row start-xs">
			<div class="col-xs-12">
				<p class="title-call">Posts <span class="title-call_span">relacionados</span></p>
			</div>
		</div>

		<div class="row start-xs">
			<div class="col-xs-12">
				
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

						<div class="widget-list-item">
							<div class="img">
								<?php if ( has_post_thumbnail() ) { ?>
									<img src="<?php the_post_thumbnail_url('xsmall-item'); ?>" width="72" height="72" alt=""/>
								<?php } ?>
							</div>
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
											$shortContent = wp_trim_words( $content, 8, '...' );
											echo $shortContent;
										?>
									</p>
								</a>
							</div>
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

// WIDGET IMAGES LIBRARY TO BANNER ADS
class WP_GetImages extends WP_Widget {

	// CONSTRUCT
	function __construct() {
		$widget_ops = array(
			'classname' => 'widget_images',
			'description' => 'Banner Ads'
		);
		$this->WP_Widget('imagens', 'Banner Ads', $widget_ops);
	}

	function widget($args, $instance) {
		extract($args);

		// widget content
		echo $before_widget;
	?>
		<div class="row no-gutter center-xs hide-xs">
			<div class="col-xs-12">
				<a href="<?php echo $instance['text']; ?>" target="_blank" title="<?php echo $instance['description']; ?>">
					<img src="<?php echo esc_url($instance['image_uri']); ?>" width="<?php echo $instance['largura']; ?>" height="<?php echo $instance['altura']; ?>"  alt="<?php echo $instance['description']; ?>" />
				</a>
			</div>
		</div>

	<?php
		echo $after_widget;

	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['text'] = strip_tags( $new_instance['text'] );
		$instance['description'] = strip_tags( $new_instance['description'] );
		$instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
		$instance['largura'] = strip_tags( $new_instance['largura'] );
		$instance['altura'] = strip_tags( $new_instance['altura'] );
		return $instance;
	}

	function form($instance) { ?>

		<p>
			<label for="<?php echo $this->get_field_id('text'); ?>">URL</label><br />
			<input type="text" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>" value="<?php echo $instance['text']; ?>" class="widefat" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('description'); ?>">Alt e Title</label><br />
			<input type="text" name="<?php echo $this->get_field_name('description'); ?>" id="<?php echo $this->get_field_id('description'); ?>" value="<?php echo $instance['description']; ?>" />
		</p>

		<div class="image-desk-widget">
			<p>
				<label for="<?php echo $this->get_field_id('image_uri'); ?>">Imagem</label><br />

			<?php
				if ( $instance['image_uri'] != '' ) :
					echo '<img class="custom_media_image" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
				endif;
			?>

				<input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>" style="margin-top:5px;">

				<input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="Upload Image" style="margin-top:5px;" />
			</p>

			<p>
				<small>Se os itens abaixo não forem preenchidos, a imagem será exibida com seu tamanho original</small>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('largura'); ?>">Largura <small>(apenas números)</small></label><br />
				<input type="text" name="<?php echo $this->get_field_name('largura'); ?>" id="<?php echo $this->get_field_id('largura'); ?>" value="<?php echo $instance['largura']; ?>" placeholder="Ex: 728" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('altura'); ?>">Altura <small>(apenas números)</small></label><br />
				<input type="text" name="<?php echo $this->get_field_name('altura'); ?>" id="<?php echo $this->get_field_id('altura'); ?>" value="<?php echo $instance['altura']; ?>" placeholder="Ex: 90" />
			</p>
		</div>

	<?php }

}

// WIDGET IMAGES Mobile LIBRARY TO BANNER ADS
class WP_MobGetImages extends WP_Widget {

	// CONSTRUCT
	function __construct() {
		$widget_ops = array(
			'classname' => 'widget_banner_mob',
			'description' => 'Banner Mobile'
		);
		$this->WP_Widget('banner_Mobile', 'Banner Mobile Ads', $widget_ops);
	}

	function widget($args, $instance) {
		extract($args);

		// widget content
		echo $before_widget;
	?>
		<div class="row no-gutter center-xs show-xs">
			<div class="col-xs-12">
				<a href="<?php echo $instance['text_mob']; ?>" target="_blank" title="<?php echo $instance['description_mob']; ?>">
					<img src="<?php echo esc_url($instance['image_mob_uri']); ?>" width="<?php echo $instance['largura_mob']; ?>" height="<?php echo $instance['altura_mob']; ?>"  alt="<?php echo $instance['description_mob']; ?>" />
				</a>
			</div>
		</div>

	<?php
		echo $after_widget;

	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['text_mob'] = strip_tags( $new_instance['text_mob'] );
		$instance['description_mob'] = strip_tags( $new_instance['description_mob'] );
		$instance['image_mob_uri'] = strip_tags( $new_instance['image_mob_uri'] );
		$instance['largura_mob'] = strip_tags( $new_instance['largura_mob'] );
		$instance['altura_mob'] = strip_tags( $new_instance['altura_mob'] );
		return $instance;
	}

	function form($instance) { ?>

		<p>
			<label for="<?php echo $this->get_field_id('text_mob'); ?>">URL</label><br />
			<input type="text" name="<?php echo $this->get_field_name('text_mob'); ?>" id="<?php echo $this->get_field_id('text_mob'); ?>" value="<?php echo $instance['text_mob']; ?>" class="widefat" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('description_mob'); ?>">Alt e Title</label><br />
			<input type="text" name="<?php echo $this->get_field_name('description_mob'); ?>" id="<?php echo $this->get_field_id('description_mob'); ?>" value="<?php echo $instance['description_mob']; ?>" />
		</p>

		<div class="image-mobile-widget">
			<p>
				<label for="<?php echo $this->get_field_id('image_mob_uri'); ?>">Imagem Mobile</label><br />

			<?php
				if ( $instance['image_mob_uri'] != '' ) :
					echo '<img class="custom_media_image" src="' . $instance['image_mob_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
				endif;
			?>

				<input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_mob_uri'); ?>" id="<?php echo $this->get_field_id('image_mob_uri'); ?>" value="<?php echo $instance['image_mob_uri']; ?>" style="margin-top:5px;">

				<input type="button" class="button button-primary custom_media_button" id="custom_media_button_mob" name="<?php echo $this->get_field_name('image_mob_uri'); ?>" value="Upload Image" style="margin-top:5px;" />
			</p>

			<p>
				<small>Se os itens abaixo não forem preenchidos, a imagem será exibida com seu tamanho original</small>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('largura_mob'); ?>">Largura <small>(apenas números)</small></label><br />
				<input type="text" name="<?php echo $this->get_field_name('largura_mob'); ?>" id="<?php echo $this->get_field_id('largura_mob'); ?>" value="<?php echo $instance['largura_mob']; ?>" placeholder="Ex: 728" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('altura_mob'); ?>">Altura <small>(apenas números)</small></label><br />
				<input type="text" name="<?php echo $this->get_field_name('altura_mob'); ?>" id="<?php echo $this->get_field_id('altura_mob'); ?>" value="<?php echo $instance['altura_mob']; ?>" placeholder="Ex: 90" />
			</p>
		</div>

	<?php }
}


function config_widget_register() {
	register_widget( 'WP_Latest' );
	register_widget( 'WP_Related' );
	register_widget( 'WP_motor' );
	register_widget( 'WP_GetImages' );
	register_widget( 'WP_MobGetImages' );
}
add_action('widgets_init','config_widget_register');

////////////////////
// CUSTOM TAXONOMY
////////////////////
add_action( 'init', 'create_county_taxonomy' );

function create_county_taxonomy() {
	$labels = array(
		'name'                           => 'Países',
		'singular_name'                  => 'País',
		'search_items'                   => 'Buscar País',
		'all_items'                      => 'Todos Países',
		'edit_item'                      => 'Editar País',
		'update_item'                    => 'Atualizar País',
		'add_new_item'                   => 'Add Novo País',
		'new_item_name'                  => 'Nome novo País',
		'menu_name'                      => 'País',
		'view_item'                      => 'Ver País',
		'popular_items'                  => 'Popular País',
		'separate_items_with_commas'     => 'Separate athletes with commas',
		'add_or_remove_items'            => 'Add ou remover País',
		'choose_from_most_used'          => 'Choose from the most used athletes',
		'not_found'                      => 'Nenhum País encontrado'
	);

	register_taxonomy('pais', 'post', array(
			'label' 			=> __( 'País' ),
			'hierarchical' 		=> true,
			'labels' 			=> $labels,
			// 'rewrite' 			=> array( 'slug' => 'pais' ),
			'public'			=> true,
			'show_in_nav_menus'	=> true
		)
	);
}

// Breadcrumbs
function custom_breadcrumbs() {
	   
	// Settings
	$separator          = '&gt;';
	$breadcrums_id      = 'breadcrumbs';
	$breadcrums_class   = 'breadcrumbs';
	$home_title         = 'Home';
	$formAction 		= esc_url(home_url( '/' ));
	  
	// If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
	$custom_taxonomy    = 'pais';


	   
	// Get the query & post information
	global $post,$wp_query;
	   
	// Do not display on the homepage
	if ( !is_front_page() ) {
	   
		// Build the breadcrums
		echo '<ol itemscope itemtype="http://schema.org/BreadcrumbList" id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
		   
		// Home page
		echo '<li  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-home"><a itemprop="item" href="' .$formAction. '" class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '"><span itemprop="name">' . $home_title . '</span></a><meta itemprop="position" content="1"/>
		</li>';
		echo '<li  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="separator separator-home"> ' . $separator . ' </li>';
		   
		if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
			  
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-archive"><span class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</span></li>';
			  
		} else if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
			  
			// If post is a custom post type
			$post_type = get_post_type();
			  
			// If it is a custom post type display name and link
			if($post_type != 'post') {
				  
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);
			  
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-cat item-custom-post-type-' . $post_type . '"><a itemprop="item" " class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '"><span itemprop="name">' . $post_type_object->labels->name . '</span></a><meta itemprop="position" content="2"/></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
			  
			}
			  
			$custom_tax_name = get_queried_object()->name;
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-archive"><span class="bread-current bread-archive">' . $custom_tax_name . '</span></li>';
			  
		} else if ( is_single() ) {
			  
			// If post is a custom post type
			$post_type = get_post_type();
			  
			// If it is a custom post type display name and link
			if($post_type != 'post') {
				  
				$post_type_object = get_post_type_object($post_type);
				$post_type_archive = get_post_type_archive_link($post_type);
			  
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-cat item-custom-post-type-' . $post_type . '"><a itemprop="item" class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '"><span itemprop="name">' . $post_type_object->labels->name . '</span></a><meta itemprop="position" content="2"/></li>';
				echo '<li class="separator"> ' . $separator . ' </li>';
			  
			}
			  
			// Get post category info
			$category = get_the_category();
			 
			if(!empty($category)) {
			  
				// Get last category post is in
				$last_category = end(array_values($category));
				  
				// Get parent any categories and create array
				$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
				
				$cat_parents = explode(',',$get_cat_parents);

				// Loop through parent categories and store in variable $cat_display
				$cat_display = '';
				foreach($cat_parents as $parents) {
					
					$parents = preg_replace('/\>(.*)\</', ' itemprop="item"> <span itemprop="name">$1</span><', $parents);
					
					$cat_display .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-cat item-custom-post-type-' . $post_type . '">'.$parents.'<meta itemprop="position" content="2"/></li>';
					$cat_display .= '<li class="separator"> ' . $separator . ' </li>';
				}
			 
			}
			  
			// If it's a custom post type within a custom taxonomy
			$taxonomy_exists = taxonomy_exists($custom_taxonomy);
			if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
				   
				$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
				$cat_id         = $taxonomy_terms[0]->term_id;
				$cat_nicename   = $taxonomy_terms[0]->slug;
				$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
				$cat_name       = $taxonomy_terms[0]->name;
			   
			}
			  
			// Check if the post is in a category
			if(!empty($last_category)) {
				echo $cat_display;
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span><meta itemprop="position" content="3"/></li>';
				  
			// Else if post is in a custom taxonomy
			} else if(!empty($cat_id)) {
				  
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a itemprop="item" class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '"><span itemprop="name">' . $cat_name . '</span></a><meta itemprop="position" content="2"/></li>';
				echo '<li class="separator">' . $separator . '</li>';
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span><meta itemprop="position" content="3"/></li>';
			  
			} else {
				  
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
				  
			}
			  
		} else if ( is_category() ) {
			   
			// Category page
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-cat"><span class="bread-current bread-cat">' . single_cat_title('', false) . '</span></li>';
			   
		} else if ( is_tax() ) {

			// tax page
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-cat"><a itemprop="item" class="bread-cat" href="' .$formAction. 'category/destinos/" title="Países"><span class="bread-current bread-cat">Países</span></a><meta itemprop="position" content="2"/></li></li>';
			echo '<li class="separator"> ' . $separator . ' </li>';
			$custom_tax_name = get_queried_object()->name;
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-archive"><span class="bread-current bread-archive">' . $custom_tax_name . '</span></li>';

		} else if ( is_page() ) {
			   
			// Standard page
			if( $post->post_parent ){
				   
				// If child page, get parents 
				$anc = get_post_ancestors( $post->ID );
				   
				// Get parents in the right order
				$anc = array_reverse($anc);
				   
				// Parent page loop
				foreach ( $anc as $ancestor ) {
					$parents .= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-parent item-parent-' . $ancestor . '"><a itemprop="item" class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '"><span itemprop="name">' . get_the_title($ancestor) . '</span></a><meta itemprop="position" content="2"/></li>';
					$parents .= '<li  class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
				}
				   
				// Display parent pages
				echo $parents;
				   
				// Current page
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-' . $post->ID . '"><span title="' . get_the_title() . '"> ' . get_the_title() . '</span></li>';
				   
			} else {
				   
				// Just display current page if not parents
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</span></li>';
				   
			}
			   
		} else if ( is_tag() ) {
			   
			// Tag page
			   
			// Get tag information
			$term_id        = get_query_var('tag_id');
			$taxonomy       = 'post_tag';
			$args           = 'include=' . $term_id;
			$terms          = get_terms( $taxonomy, $args );
			$get_term_id    = $terms[0]->term_id;
			$get_term_slug  = $terms[0]->slug;
			$get_term_name  = $terms[0]->name;
			   
			// Display the tag name
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><span class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</span></li>';
		   
		} elseif ( is_day() ) {
			   
			// Day archive
			   
			// Year link
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-year item-year-' . get_the_time('Y') . '"><a itemprop="item" class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '"><span itemprop="name">' . get_the_time('Y') . ' Archives</span></a></li>';
			echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
			   
			// Month link
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-month item-month-' . get_the_time('m') . '"><a itemprop="item" class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '"><span itemprop="name">' . get_the_time('M') . ' Archives</span></a></li>';
			echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
			   
			// Day display
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-' . get_the_time('j') . '"><span class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</span></li>';
			   
		} else if ( is_month() ) {
			   
			// Month Archive
			   
			// Year link
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-year item-year-' . get_the_time('Y') . '"><a itemprop="item" class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '"><span itemprop="name">' . get_the_time('Y') . ' Archives</span></a></li>';
			echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
			   
			// Month display
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-month item-month-' . get_the_time('m') . '"><span class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</span></li>';
			   
		} else if ( is_year() ) {
			   
			// Display year archive
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-current-' . get_the_time('Y') . '"><span class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</span></li>';
			   
		} else if ( is_author() ) {
			   
			// Auhor archive
			   
			// Get the author information
			global $author;
			$userdata = get_userdata( $author );
			   
			// Display author name
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-current-' . $userdata->user_nicename . '"><span class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</span></li>';
		   
		} else if ( get_query_var('paged') ) {
			   
			// Paginated archives
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-current-' . get_query_var('paged') . '"><span class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</span></li>';
			   
		} else if ( is_search() ) {
		   
			// Search results page
			echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="item-current item-current-' . get_search_query() . '"><span class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</span></li>';
		   
		} elseif ( is_404() ) {
			   
			// 404 page
			echo '<li>' . 'Error 404' . '</li>';
		}
	   
		echo '</ol>';
		   
	}
	   
}

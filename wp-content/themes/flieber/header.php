<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<!-- <title><?php wp_title(); ?></title> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" >
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <!-- .site-header -->
    <?php get_template_part( 'templates/header' ); ?>
    <!-- .site-header -->
  </header>
  <!-- .site Content -->
	<main>

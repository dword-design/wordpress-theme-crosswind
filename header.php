<!DOCTYPE html>
<html lang="de">
  <head>
    <title><?php wp_title('|', 1, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php get_header(); ?>
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="icon" type="image/x-gif" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.gif">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" media="all" />
    <link rel="pingback" href="<?php bloginfo('wpurl'); ?>/xmlrpc.php" />
    <link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="<?php bloginfo('wpurl') ?>/feed/" />

    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>

    <script>
        // fix resizing issues with Image Rotator Widget
        jQuery(window).resize(function($){
            jQuery(".irw-widget").each(function(){
                irw_init(jQuery(this));
            });
        });
    </script>
  </head>
  <body>
    <div class="menu-bar">
      <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_theme_mod('logo')); ?>" />
      </a>

      <a class="menu-toggle" href="#"><span class="visually-hidden">Mobiles Menü</span></a>

      <?php wp_nav_menu( array('theme_location' => 'menu')); ?>
    </div>
    <div class="banner">
      <?php echo do_shortcode("[metaslider id=165]"); ?>
    </div>

    <div class="social-media-buttons">
      <a class="social-media-button social-media-button--facebook" href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" target="blank">
        <?php echo file_get_contents(get_template_directory().'/images/social/facebook.svg'); ?>
      </a>
      <a class="social-media-button social-media-button--youtube" href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>" target="blank">
        <?php echo file_get_contents(get_template_directory().'/images/social/youtube.svg'); ?>
      </a>
      <a class="social-media-button social-media-button--soundcloud" href="<?php echo esc_url(get_theme_mod('soundcloud_url')); ?>" target="blank">
        <?php echo file_get_contents(get_template_directory().'/images/social/soundcloud.svg'); ?>
      </a>
      <a class="social-media-button social-media-button--email" href="mailto:<?php echo esc_attr(get_theme_mod('email')); ?>">
        <?php echo file_get_contents(get_template_directory().'/images/social/email.svg'); ?>
      </a>
    </div>

    <!-- <a class="english" href="<?php //echo esc_url(home_url('/englisch')); ?>"></a> -->

    <div class="main">
      <div class="content">

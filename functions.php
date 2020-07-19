<?php

use Dzango\Twig\Extension\Truncate;
use Urodoz\Truncate\Bridge\Twig\TruncateExtension;
use Urodoz\Truncate\TruncateService;

Timber::$dirname = array('templates', 'views');

function register_menu() {
    register_nav_menu('menu',__('Menu'));
}
add_action('init', 'register_menu');
add_theme_support('post-thumbnails');

function theme_scripts() {
    wp_enqueue_script('scripts.js', get_template_directory_uri() . '/dist/index.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');

function crosswind_customizer($wp_customize) {

    $wp_customize->add_section('images', array(
      'title' => __('Bilder', 'crosswind')
    ));

    $wp_customize->add_setting('logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
      'label' => 'Logo',
      'section' => 'images',
      'settings' => 'logo',
    )));

    $wp_customize->add_section('social-media', array(
      'title' => __('Social Media', 'crosswind')
    ));

    $wp_customize->add_setting('facebook_url');
    $wp_customize->add_control('facebook_url', array(
      'label' => 'Facebook URL',
      'section' => 'social-media',
      'setting' => 'facebook_url'));

    $wp_customize->add_setting('youtube_url');
    $wp_customize->add_control('youtube_url', array(
      'label' => 'YouTube URL',
      'section' => 'social-media',
      'setting' => 'youtube_url'));

    $wp_customize->add_setting('soundcloud_url');
    $wp_customize->add_control('soundcloud_url', array(
      'label' => 'SoundCloud URL',
      'section' => 'social-media',
      'setting' => 'soundcloud_url'));

    $wp_customize->add_setting('email');
    $wp_customize->add_control('email', array(
      'label' => 'Email-Adresse',
      'section' => 'social-media',
      'setting' => 'email'));
  }

  add_action('customize_register', 'crosswind_customizer');

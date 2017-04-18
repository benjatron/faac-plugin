<?php
/*
Plugin Name: FAAC Extended
Plugin URI: http://designfwd.com/
Description: This plugin adds functionality required to fully take advantage of the FAAC Incorporated theme.
Version: 0.4
Author: FWD Creative, LLC
Author URI: http://designfwd.com/

License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl.html
*/



/*
 * #SETTINGS
 */

// Adds theme settings pages via ACF
if( function_exists('acf_add_options_page') ) :

  if( get_current_blog_id() == 1 ) :
  // Only displays the settings to the main site on a multisite

    // Adds the main Theme Settings options page and subpages
    acf_add_options_page(array(
      'page_title'  => 'Theme Settings',
      'menu_title'  => 'Theme Settings',
      'menu_slug'   => 'theme-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => 'dashicons-forms',
      'position'    => 40,
      'redirect'    => true
    ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Theme Defaults',
        'menu_title'  => 'Theme Defaults',
        'parent_slug' => 'theme-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Calls to Action',
        'menu_title'  => 'Calls to Action',
        'parent_slug' => 'theme-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Photo Promotions',
        'menu_title'  => 'Photo Promotions',
        'parent_slug' => 'theme-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Video Promotions',
        'menu_title'  => 'Video Promotions',
        'parent_slug' => 'theme-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Footer Promotions',
        'menu_title'  => 'Footer Promotions',
        'parent_slug' => 'theme-settings',
      ));

    // Adds the Divisions settings pages and subpages
    acf_add_options_page(array(
      'page_title'  => 'Division Settings',
      'menu_title'  => 'Division Settings',
      'menu_slug'   => 'division-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => 'dashicons-shield',
      'position'    => 41,
      'redirect'    => true
    ));
      acf_add_options_sub_page(array(
        'page_title'  => 'FAAC Commercial',
        'menu_title'  => 'FAAC Commercial',
        'parent_slug' => 'division-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'FAAC Military',
        'menu_title'  => 'FAAC Military',
        'parent_slug' => 'division-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'MILO Range',
        'menu_title'  => 'MILO Range',
        'parent_slug' => 'division-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'RTI',
        'menu_title'  => 'RTI',
        'parent_slug' => 'division-settings',
      ));

    // Adds the Categories settings pages and subpages
    acf_add_options_page(array(
      'page_title'  => 'Category Settings',
      'menu_title'  => 'Category Settings',
      'menu_slug'   => 'category-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => 'dashicons-shield-alt',
      'position'    => 42,
      'redirect'    => true
    ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Global Settings',
        'menu_title'  => 'Global Settings',
        'parent_slug' => 'category-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Military',
        'menu_title'  => 'Military',
        'parent_slug' => 'category-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Use of Force',
        'menu_title'  => 'Use of Force',
        'parent_slug' => 'category-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Public Safety',
        'menu_title'  => 'Public Safety',
        'parent_slug' => 'category-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Transportation',
        'menu_title'  => 'Transportation',
        'parent_slug' => 'category-settings',
      ));
      acf_add_options_sub_page(array(
        'page_title'  => 'Research',
        'menu_title'  => 'Research',
        'parent_slug' => 'category-settings',
      ));

  endif;
endif;



/*
 * #TAXONOMIES
 */

// Registers the custom taxonomies
if ( ! function_exists( 'client_taxonomy' ) ) :
  include_once('taxonomies/client.php');
endif;

if ( ! function_exists( 'page_category' ) ) :
  include_once('taxonomies/categories.php');
endif;



/*
 * #CUSTOM POST TYPES
 */

// Registers the custom post types
if ( ! function_exists('testimonial_post_type') ) :
  include_once('post-types/testimonial.php');
endif;
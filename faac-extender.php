<?php
/*
Plugin Name: FAAC Extended
Plugin URI: http://designfwd.com/
Description: This plugin adds functionality required to fully take advantage of the FAAC Incorporated theme.
Version: 0.1
Author: FWD Creative, LLC
Author URI: http://designfwd.com/

License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl.html
*/


// Hides ACF menu in admin area
// add_filter('acf/settings/show_admin', '__return_false');




// Adds the Testimonials option page via ACF
if ( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Testimonials',
    'menu_title'  => 'Testimonials',
    'menu_slug'   => 'faac-testimonials',
    'capability'  => 'edit_posts',
    'icon_url'    => 'dashicons-thumbs-up',
    'position'    => '25'
  ));
  
}




// Adds theme settings pages via ACF

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'FAAC Theme Default Settings',
    'menu_title'  => 'FAAC Theme Default Settings',
    'menu_slug'   => 'faac-theme-settings',
    'capability'  => 'edit_posts',
    'icon_url'    => 'dashicons-desktop',
    'position'    => 40,
    'redirect'    => true
  ));

    acf_add_options_sub_page(array(
    'page_title'  => 'Features',
    'menu_title'  => 'Features',
    'parent_slug' => 'faac-theme-settings',
  ));

    acf_add_options_sub_page(array(
    'page_title'  => 'Divisions',
    'menu_title'  => 'Divisions',
    'parent_slug' => 'faac-theme-settings',
  ));

    acf_add_options_sub_page(array(
    'page_title'  => 'Simulators',
    'menu_title'  => 'Simulators',
    'parent_slug' => 'faac-theme-settings',
  ));

    acf_add_options_sub_page(array(
    'page_title'  => 'Solutions',
    'menu_title'  => 'Solutions',
    'parent_slug' => 'faac-theme-settings',
  ));

  //   acf_add_options_sub_page(array(
  //   'page_title'  => 'Vehicles',
  //   'menu_title'  => 'Vehicles',
  //   'parent_slug' => 'faac-theme-settings',
  // ));
  
}




if( function_exists('acf_add_local_field_group') ):

// Adds field groups for testimonials
  include_once('field-groups/testimonials.php');

// Adds field groups for theme settings
  include_once('field-groups/features.php');
  include_once('field-groups/divisions.php');
  include_once('field-groups/simulators.php');
  include_once('field-groups/solutions.php');
  include_once('field-groups/vehicles.php');


// Adds field groups for design modules

  // Sliders
  include_once('field-groups/modules/10-sliders/100-basic-slider.php');
  include_once('field-groups/modules/10-sliders/110-dynamic-slider.php');

  // General content
  include_once('field-groups/modules/20-general/200-centered-content.php');
  include_once('field-groups/modules/20-general/210-columned-content.php');
  include_once('field-groups/modules/20-general/220-linked-photo-grid.php');
  include_once('field-groups/modules/20-general/230-feature-block.php');
  include_once('field-groups/modules/20-general/240-article.php');
  include_once('field-groups/modules/20-general/250-media-block.php');
  include_once('field-groups/modules/20-general/260-link-block_2-column.php');

  // Simulators and solutions
  include_once('field-groups/modules/30-options/300-category-heading.php');
  include_once('field-groups/modules/30-options/310-category-heading_2-up.php');
  include_once('field-groups/modules/30-options/320-category-media-block.php');
  include_once('field-groups/modules/30-options/330-simulator-solution-categories_2-column.php');
  include_once('field-groups/modules/30-options/340-simulator-solution-categories_4-column.php');
  include_once('field-groups/modules/30-options/350-simulator-solution-categories_5-column.php');
  include_once('field-groups/modules/30-options/360-featured-simulator-solution.php');
  include_once('field-groups/modules/30-options/370-category-simulators-solutions_3-column.php');
  include_once('field-groups/modules/30-options/380-related-links_2-up.php');
  include_once('field-groups/modules/30-options/390-related-links_3-up.php');

  // Divisions
  include_once('field-groups/modules/40-divisions/400-division-summaries_2-column.php');
  include_once('field-groups/modules/40-divisions/410-featured-division-simulator-and-solution.php');
  include_once('field-groups/modules/40-divisions/420-division-support-block.php');

  // Promotions
  include_once('field-groups/modules/50-promotions/500-simulator-solution-plus-division-promotion.php');
  include_once('field-groups/modules/50-promotions/510-division-promotion.php');
  include_once('field-groups/modules/50-promotions/520-call-to-action.php');
  include_once('field-groups/modules/50-promotions/530-testimonial.php');
  include_once('field-groups/modules/50-promotions/540-video-playlist.php');
  include_once('field-groups/modules/50-promotions/550-simulator-promotion.php');
  include_once('field-groups/modules/50-promotions/560-video-promotion.php');
  include_once('field-groups/modules/50-promotions/570-photo-promotion.php');
  include_once('field-groups/modules/50-promotions/580-video-plus-photo-promotion.php');
  include_once('field-groups/modules/50-promotions/590-promotion-links.php');


// Adds page templates to use with the FAAC theme
  
  // Homepage
  include_once('page-templates/homepage.php');

  // Simulator pages
  include_once('page-templates/simulators-parent.php');
  include_once('page-templates/simulators-child.php');

  // Solutions pages
  include_once('page-templates/solutions-parent.php');
  include_once('page-templates/solutions-child.php');

  // Category pages
  include_once('page-templates/category-parent.php');
  include_once('page-templates/category-child.php');

  // Content pages
  include_once('page-templates/content-general.php');
  include_once('page-templates/content-landing-page.php');
  include_once('page-templates/content-news.php');

  // Divisions pages
  include_once('page-templates/divisions-index.php');
  include_once('page-templates/divisions-parent.php');
  include_once('page-templates/divisions-general.php');
  include_once('page-templates/divisions-news.php');
  include_once('page-templates/divisions-category.php');

endif;


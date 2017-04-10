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


// Adds field groups for options pages
if( function_exists('acf_add_local_field_group') ) :
  include_once('options-pages/theme-settings.php');
  include_once('options-pages/divisions.php');
  include_once('options-pages/categories.php');
endif;



/*
 * #TAXONOMIES
 */

// Registers the custom taxonomies
if ( ! function_exists( 'client_taxonomy' ) ) :
  include_once('taxonomies/client.php');
endif;




/*
 * #CUSTOM POST TYPES
 */

// Registers the custom post types
if ( ! function_exists('testimonial_post_type') ) :
  include_once('post-types/testimonial.php');
endif;

// Adds the custom fields for custom post types
if( function_exists('acf_add_local_field_group') ) :
  include_once('post-types/testimonial-fields.php');
endif;




/*
 * #CUSTOM FIELDS
 */

// Adds field groups for design modules
if( function_exists('acf_add_local_field_group') ) :

  // Sliders
  include_once('modules/10-sliders/100-basic-slider.php');
  include_once('modules/10-sliders/110-dynamic-slider.php');

  // General content
  include_once('modules/20-general/200-centered-content.php');
  include_once('modules/20-general/210-columned-content.php');
  include_once('modules/20-general/220-linked-photo-grid.php');
  include_once('modules/20-general/230-feature-block.php');
  include_once('modules/20-general/240-article.php');
  include_once('modules/20-general/250-media-block.php');
  include_once('modules/20-general/260-link-block_2-column.php');

  // Simulators and solutions
  include_once('modules/30-options/300-category-heading.php');
  include_once('modules/30-options/310-category-heading_2-up.php');
  include_once('modules/30-options/320-category-media-block.php');
  include_once('modules/30-options/330-simulator-solution-categories_2-column.php');
  include_once('modules/30-options/340-simulator-solution-categories_4-column.php');
  include_once('modules/30-options/350-simulator-solution-categories_5-column.php');
  include_once('modules/30-options/360-featured-simulator-solution.php');
  include_once('modules/30-options/370-category-simulators-solutions_3-column.php');
  include_once('modules/30-options/380-related-links_2-up.php');
  include_once('modules/30-options/390-related-links_3-up.php');

  // Divisions
  include_once('modules/40-divisions/400-division-summaries_2-column.php');
  include_once('modules/40-divisions/410-featured-division-simulator-and-solution.php');
  include_once('modules/40-divisions/420-division-support-block.php');

  // Promotions
  include_once('modules/50-promotions/500-simulator-solution-plus-division-promotion.php');
  include_once('modules/50-promotions/510-division-promotion.php');
  include_once('modules/50-promotions/520-call-to-action.php');
  include_once('modules/50-promotions/530-testimonial.php');
  include_once('modules/50-promotions/540-video-playlist.php');
  include_once('modules/50-promotions/550-simulator-promotion.php');
  include_once('modules/50-promotions/560-video-promotion.php');
  include_once('modules/50-promotions/570-photo-promotion.php');
  include_once('modules/50-promotions/580-video-plus-photo-promotion.php');
  include_once('modules/50-promotions/590-promotion-links.php');
endif;


/*
 * #PAGE TEMPLATES
 */

// Adds page templates to use with the FAAC theme
if( function_exists('acf_add_local_field_group') ) :
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


/*
 * #CUSTOM WIDGETS
  */
class Newsletter_Signup extends WP_Widget {

  // Register widget with WordPress.
  function __construct() {
    parent::__construct(
      'newsletter_signup', // Base ID
      esc_html__( 'Newsletter Signup', 'faac' ), // Name
      array( 'description' => esc_html__( 'Displays a newsletter signup form', 'faac' ), ) // Args
    );
  }
  //
  include_once('widgets/newsletter-signup.php');

}
// Add widget to WordPress
function register_newsletter_widget() {
    register_widget( 'Newsletter_Signup' );
}
add_action( 'widgets_init', 'register_newsletter_widget' );
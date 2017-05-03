<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7f8abf607',
  'title' => '410 - Division Feature Block',
  'fields' => array (
    array (
      'key' => 'field_58e26426f1702',
      'label' => 'Headline',
      'name' => 'divisionFeature_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => 'division-feature division-feature__headline',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => 'Realistic Scenarios + Advanced Products',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e264eff1704',
      'label' => 'Featured Division Solution Page',
      'name' => 'divisionFeature_solution',
      'type' => 'relationship_multisite',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => '',
        'id' => '',
      ),
      'site' => 1,
      'filters' => array (
        0 => 'search',
        1 => 'post_type',
        2 => 'taxonomy',
      ),
      'elements' => array (
        0 => 'featured_image',
      ),
      'max' => 1,
      'return_format' => 'object',
      'post_type' => array (
      ),
      'taxonomy' => array (
      ),
    ),
    array (
      'key' => 'field_58ecf87b77f43',
      'label' => 'Featured Division Simulator Page',
      'name' => 'divisionFeature_simulator',
      'type' => 'relationship_multisite',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => '',
        'id' => '',
      ),
      'site' => 1,
      'filters' => array (
        0 => 'search',
        1 => 'post_type',
        2 => 'taxonomy',
      ),
      'elements' => array (
        0 => 'featured_image',
      ),
      'max' => 1,
      'return_format' => 'object',
      'post_type' => array (
      ),
      'taxonomy' => array (
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'page',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 0,
  'description' => '',
));

?>
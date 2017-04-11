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
      'type' => 'page_link',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'post',
        1 => 'page',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'allow_archives' => 1,
      'multiple' => 0,
    ),
    array (
      'key' => 'field_58ecf87b77f43',
      'label' => 'Featured Division Simulator Page',
      'name' => 'divisionFeature_simulator',
      'type' => 'page_link',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'post',
        1 => 'page',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'allow_archives' => 1,
      'multiple' => 0,
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
  'hide_on_screen' => '',
  'active' => 0,
  'description' => '',
));

?>
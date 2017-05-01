<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eb43a340',
  'title' => '340 - Featured Simulator / Solution',
  'fields' => array (
    array (
      'key' => 'field_58ecf16295eb1',
      'label' => 'Simulator / Solution',
      'name' => 'featured_simulatorSolution',
      'type' => 'post_object',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'page',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => 'field_58ecf1e395eb2',
      'label' => 'Headline',
      'name' => 'featured_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
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
<?php

acf_add_local_field_group(array (
  'key' => 'group_58f10d1f17578',
  'title' => '341 - Main Simulator',
  'fields' => array (
    array (
      'key' => 'field_58f10d1f1c5c0',
      'label' => 'Simulator',
      'name' => 'mainSimulator_page',
      'type' => 'page_link',
      'instructions' => 'The simulator to feature and link to',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'page',
      ),
      'taxonomy' => array (
        0 => 'category:simulator',
      ),
      'allow_null' => 0,
      'allow_archives' => 0,
      'multiple' => 0,
    ),
    array (
      'key' => 'field_58f10e51a554e',
      'label' => 'Button Text',
      'name' => 'mainSimulator_buttonText',
      'type' => 'text',
      'instructions' => 'The text to appear on the button below the featured simulator',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Get Started',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58f10ec0a554f',
      'label' => 'Phone Number',
      'name' => 'mainSimulator_phone',
      'type' => 'text',
      'instructions' => 'The number to have featured below the simulator button',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '800-555-5555',
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
  'hide_on_screen' => '',
  'active' => 0,
  'description' => '',
));

?>
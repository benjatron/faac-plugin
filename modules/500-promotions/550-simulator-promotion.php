<?php

acf_add_local_field_group(array (
  'key' => 'group_58da814fbf9f9',
  'title' => '550 - Simulator Promotion',
  'fields' => array (
    array (
      'key' => 'field_58e27bc5f946d',
      'label' => 'Linked Simulator',
      'name' => 'simulatorPromo_link',
      'type' => 'page_link',
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
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 0,
  'description' => '',
));

?>
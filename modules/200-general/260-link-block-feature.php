<?php

acf_add_local_field_group(array (
  'key' => 'group_58d98e7235c13',
  'title' => '260 - Link Block Feature',
  'fields' => array (
    array (
      'key' => 'field_58dab880a9175',
      'label' => 'Icon',
      'name' => 'linkBlock_icon',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_58dab970a9176',
      'label' => 'Title',
      'name' => 'linkBlock_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '60',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58dab9d732298',
      'label' => 'Links',
      'name' => 'linkBlock_list',
      'type' => 'relationship',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
      ),
      'taxonomy' => array (
      ),
      'filters' => array (
        0 => 'search',
        1 => 'post_type',
        2 => 'taxonomy',
      ),
      'elements' => array (
        0 => 'featured_image',
      ),
      'min' => '',
      'max' => '',
      'return_format' => 'object',
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
<?php

acf_add_local_field_group(array (
  'key' => 'group_58d98e5159b2c',
  'title' => '220 - Linked Photo Grid',
  'fields' => array (
    array (
      'key' => 'field_58dfb7806fa01',
      'label' => 'Linked Photos',
      'name' => 'linked_photos',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => 'linked-photos',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 0,
      'max' => 0,
      'layout' => 'block',
      'button_label' => 'Add Item',
      'sub_fields' => array (
        array (
          'key' => 'field_58dfb7b26fa02',
          'label' => 'Image',
          'name' => 'linked-photos_image',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '30',
            'class' => 'linked-photos linked-photos__image',
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
          'key' => 'field_58dfb8016fa03',
          'label' => 'URL',
          'name' => 'linked-photos_url',
          'type' => 'url',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '70',
            'class' => 'linked-photos linked-photos__url',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
        ),
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
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

?>
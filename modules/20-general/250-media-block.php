<?php

acf_add_local_field_group(array (
  'key' => 'group_58d98e6dc7b37',
  'title' => '250 - Media Block',
  'fields' => array (
    array (
      'key' => 'field_58ece26a200f5',
      'label' => 'Content Direction',
      'name' => 'mediaBlock_direction',
      'type' => 'select',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '40',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'ltr' => 'Image on Left',
        'rtl' => 'Image on Right',
      ),
      'default_value' => array (
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'ui' => 0,
      'ajax' => 0,
      'return_format' => 'value',
      'placeholder' => '',
    ),
    array (
      'key' => 'field_58ece31a200f6',
      'label' => 'Featured Image',
      'name' => 'mediaBlock_image',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '60',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'w240',
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
      'key' => 'field_58ece1f1200f3',
      'label' => 'Headline',
      'name' => 'mediaBlock_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
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
      'key' => 'field_58ece221200f4',
      'label' => 'Body Content',
      'name' => 'mediaBlock_content',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
      'delay' => 0,
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
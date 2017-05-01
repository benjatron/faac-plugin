<?php

acf_add_local_field_group(array (
  'key' => 'group_58ed23e26fa96',
  'title' => 'Simulator/Solution Special Options',
  'fields' => array (
    array (
      'key' => 'field_58ed246118ffa',
      'label' => 'Short Description',
      'name' => 'simulator_description',
      'type' => 'wysiwyg',
      'instructions' => 'A short description of the simulator for display throughout the site',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
      'delay' => 0,
    ),
    array (
      'key' => 'field_58f8cff64fc98',
      'label' => 'Thumbnail for Features',
      'name' => 'simulator_thumbnail',
      'type' => 'image',
      'instructions' => 'Image to appear in smaller image feature callouts throughout the site.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
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
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_category',
        'operator' => '==',
        'value' => 'category:simulator',
      ),
    ),
    array (
      array (
        'param' => 'post_category',
        'operator' => '==',
        'value' => 'category:solution',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'side',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

?>
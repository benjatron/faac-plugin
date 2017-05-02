<?php

acf_add_local_field_group(array (
  'key' => 'group_58eadd23737f7',
  'title' => 'Theme Settings - Photo Promotion',
  'fields' => array (
    array (
      'key' => 'field_58eb8cae7a84d',
      'label' => 'Headline',
      'name' => 'photoPromo_headline',
      'type' => 'text',
      'instructions' => 'The text displayed at the top of photo promotions',
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
    array (
      'key' => 'field_58eb8d067a84e',
      'label' => 'Excerpt',
      'name' => 'photoPromo_excerpt',
      'type' => 'wysiwyg',
      'instructions' => 'The body text for the promotion',
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
      'key' => 'field_58eb8d387a84f',
      'label' => 'Background Image',
      'name' => 'photoPromo_background',
      'type' => 'image',
      'instructions' => 'Background image used for the photo promotion',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
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
      'key' => 'field_58eb8d5c7a850',
      'label' => 'Linked Page',
      'name' => 'photoPromo_page',
      'type' => 'page_link',
      'instructions' => 'The page for the photo promo to link to',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
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
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-photo-promotions',
      ),
    ),
  ),
  'menu_order' => 12,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'left',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

?>
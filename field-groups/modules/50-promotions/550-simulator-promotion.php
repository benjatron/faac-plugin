<?php

acf_add_local_field_group(array (
  'key' => 'group_58da814fbf9f9',
  'title' => '550 - Simulator Promotion',
  'fields' => array (
    array (
      'key' => 'field_58e27a0cf946a',
      'label' => 'Headline',
      'name' => 'simulator-promo_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '40',
        'class' => 'simulator-promo simulator-promo__headline',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e27ac2f946b',
      'label' => 'Description',
      'name' => 'simulator-promo_description',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '60',
        'class' => 'simulator-promo simulator-promo__description',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
      'delay' => 0,
    ),
    array (
      'key' => 'field_58e27b19f946c',
      'label' => 'Button Text',
      'name' => 'simulator-promo_button-text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '33',
        'class' => 'simulator-promo simulator-promo__button',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => 'Get Started',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e27bc5f946d',
      'label' => 'Linked Simulator',
      'name' => 'simulator-promo_button-link',
      'type' => 'page_link',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '33',
        'class' => 'simulator-promo simulator-promo__link',
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
    array (
      'key' => 'field_58e27be5f946e',
      'label' => 'Phone Number',
      'name' => 'simulator-promo_phone',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '33',
        'class' => 'simulator-promo simulator-promo__phone',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '800-555-5555',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e27c52f9471',
      'label' => 'Image Override',
      'name' => 'simulator-promo_override',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '33',
        'class' => 'simulator-promo simulator-promo__override',
        'id' => '',
      ),
      'message' => 'Use custom image?',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
    array (
      'key' => 'field_58e27c9df9472',
      'label' => 'Custom Image',
      'name' => 'simulator-promo_image',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '67',
        'class' => 'simulator-promo simulator-promo__image',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'medium',
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
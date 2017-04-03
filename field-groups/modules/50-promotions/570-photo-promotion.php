<?php

acf_add_local_field_group(array (
  'key' => 'group_58da81605673c',
  'title' => '570 - Photo Promotion',
  'fields' => array (
    array (
      'key' => 'field_58e28478d5627',
      'label' => 'Promo Override',
      'name' => 'photo-promo_override',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '25',
        'class' => 'photo-promo photo-promo__override',
        'id' => '',
      ),
      'message' => 'Use custom photo promo?',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
    array (
      'key' => 'field_58e284cbd5628',
      'label' => 'Headline',
      'name' => 'photo-promo_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_58e28478d5627',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '75',
        'class' => 'photo-promo photo-promo__headline',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e284fbd5629',
      'label' => 'Excerpt',
      'name' => 'photo-promo_excerpt',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_58e28478d5627',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '60',
        'class' => 'photo-promo photo-promo__excerpt',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
      'delay' => 0,
    ),
    array (
      'key' => 'field_58e286c7d562a',
      'label' => 'Image',
      'name' => 'photo-promo_image',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_58e28478d5627',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '40',
        'class' => 'photo-promo photo-promo__image',
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
<?php

acf_add_local_field_group(array (
  'key' => 'group_58da814fc3c5f',
  'title' => '560 - Video Promotion',
  'fields' => array (
    array (
      'key' => 'field_58e27f9ef8fbf',
      'label' => 'Promo Override',
      'name' => 'video-promo_override',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '25',
        'class' => 'video-promo video-promo__override',
        'id' => '',
      ),
      'message' => 'Use custom video promo?',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
    array (
      'key' => 'field_58e280a3f8fc0',
      'label' => 'Headline',
      'name' => 'video-promo_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_58e27f9ef8fbf',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '75',
        'class' => 'video-promo video-promo__headline',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e2821df8fc1',
      'label' => 'Excerpt',
      'name' => 'video-promo_excerpt',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_58e27f9ef8fbf',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '60',
        'class' => 'video-promo video-promo__excerpt',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
      'delay' => 0,
    ),
    array (
      'key' => 'field_58e283a6f8fc2',
      'label' => 'Video URL',
      'name' => 'video-promo_url',
      'type' => 'url',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_58e27f9ef8fbf',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '40',
        'class' => 'video-promo video-promo__url',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
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
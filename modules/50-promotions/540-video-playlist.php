<?php

acf_add_local_field_group(array (
  'key' => 'group_58da814fbc383',
  'title' => '540 - Video Playlist',
  'fields' => array (
    array (
      'key' => 'field_58daa6074e511',
      'label' => 'Video Playlist',
      'name' => 'video-playlist',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => 'video-playlist',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 0,
      'max' => 0,
      'layout' => 'table',
      'button_label' => 'Add Video',
      'sub_fields' => array (
        array (
          'key' => 'field_58daa6a04e512',
          'label' => 'Video URL',
          'name' => 'video-playlist_url',
          'type' => 'url',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => 'video-playlist video-playlist__url',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
        ),
        array (
          'key' => 'field_58daa7fc4e513',
          'label' => 'Video Excerpt',
          'name' => 'video-playlist_excerpt',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => 'video-playlist video-playlist__excerpt',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
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
  'active' => 0,
  'description' => '',
));

?>
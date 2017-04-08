<?php

acf_add_local_field_group(array (
  'key' => 'group_58da81605c4c2',
  'title' => '580 - Video + Photo Promotion',
  'fields' => array (
    array (
      'key' => 'field_58e28af36d0c7',
      'label' => 'Video Promo',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array (
      'key' => 'field_58e28b0f6d0c9',
      'label' => 'Video Promotion',
      'name' => 'combo',
      'type' => 'clone',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'clone' => array (
        0 => 'group_58da814fc3c5f',
      ),
      'display' => 'seamless',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58e28b036d0c8',
      'label' => 'Photo Promo',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array (
      'key' => 'field_58e28b806d0ca',
      'label' => 'Photo Promotion',
      'name' => 'combo',
      'type' => 'clone',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'clone' => array (
        0 => 'group_58da81605673c',
      ),
      'display' => 'seamless',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
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
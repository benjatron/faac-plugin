<?php

acf_add_local_field_group(array (
  'key' => 'group_58ed01431ec85',
  'title' => '221 - Division Logo Grid',
  'fields' => array (
    array (
      'key' => 'field_58ed01432d84b',
      'label' => 'Divisions',
      'name' => 'divisionGrid',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 0,
      'max' => 0,
      'layout' => 'block',
      'button_label' => 'Add Division',
      'sub_fields' => array (
        array (
          'key' => 'field_58ed014335d23',
          'label' => 'Division',
          'name' => 'divisionGrid_division',
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
            'faacCommercial' => 'FAAC Commercial',
            'faacMilitary' => 'FAAC Military',
            'miloRange' => 'MILO Range',
            'rti' => 'Realtime Technologies (RTI)',
          ),
          'default_value' => array (
          ),
          'allow_null' => 0,
          'multiple' => 0,
          'ui' => 0,
          'ajax' => 0,
          'return_format' => 'array',
          'placeholder' => '',
        ),
        array (
          'key' => 'field_58ed0a39a0a81',
          'label' => 'Logo',
          'name' => 'divisionGrid_logo',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '60',
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
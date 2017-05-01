<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7f9e03227',
  'title' => '400 - Division Summaries',
  'fields' => array (
    array (
      'key' => 'field_58e147b989eac',
      'label' => 'Division Summary',
      'name' => 'divisionSummary',
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
      'layout' => 'row',
      'button_label' => 'Add Division',
      'sub_fields' => array (
        array (
          'key' => 'field_58ecf77ce1d0f',
          'label' => 'Division',
          'name' => 'divisionSummary_division',
          'type' => 'select',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
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
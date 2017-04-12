<?php

acf_add_local_field_group(array (
  'key' => 'group_58da813521b64',
  'title' => '510 - Division Promotion',
  'fields' => array (
    array (
      'key' => 'field_58e2739a51695',
      'label' => 'Division Select',
      'name' => 'divisionPromo_select',
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
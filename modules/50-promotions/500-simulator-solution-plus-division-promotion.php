<?php

acf_add_local_field_group(array (
  'key' => 'group_58da812c3fa92',
  'title' => '500 - Simulator/Solution + Division Promotion',
  'fields' => array (
    array (
      'key' => 'field_58ed0d763b112',
      'label' => 'Simulator / Solution Promotion',
      'name' => 'doublePromo_page',
      'type' => 'page_link',
      'instructions' => 'The simulator or solution to link to',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'page',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'allow_archives' => 0,
      'multiple' => 0,
    ),
    array (
      'key' => 'field_58f108c42afe1',
      'label' => 'Simulators/Solution Category',
      'name' => 'doublePromo_category',
      'type' => 'select',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'military' => 'Military',
        'useOfForce' => 'Use of Force',
        'publicSafety' => 'Public Safety',
        'transportation' => 'Transportation',
        'research' => 'Research',
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
      'key' => 'field_58f109232afe2',
      'label' => 'Simulators/Solution Type',
      'name' => 'doublePromo_categoryType',
      'type' => 'select',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'simulators' => 'Simulators',
        'solutions' => 'Solutions',
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
      'key' => 'field_58ed0ebf3b113',
      'label' => 'Division Promotion',
      'name' => 'doublePromo_division',
      'type' => 'select',
      'instructions' => 'The division linked in the promotion',
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
      'return_format' => 'value',
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
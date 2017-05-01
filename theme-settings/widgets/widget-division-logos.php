<?php

acf_add_local_field_group(array (
  'key' => 'group_58f38cb55099e',
  'title' => 'Widget - Division Logos',
  'fields' => array (
    array (
      'key' => 'field_58f38cc340eaf',
      'label' => 'Logos',
      'name' => 'divisionLogo_grid',
      'type' => 'repeater',
      'instructions' => 'The logos that appear in the division logo area',
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
          'key' => 'field_58f38d1540eb0',
          'label' => 'Division',
          'name' => 'divisionLogo_division',
          'type' => 'select',
          'instructions' => 'Choose the division\'s logo to include',
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
            'rti' => 'Realtime Technologies',
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
        'param' => 'widget',
        'operator' => '==',
        'value' => 'acf_widget_1752',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

?>
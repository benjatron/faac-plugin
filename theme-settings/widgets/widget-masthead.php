<?php

acf_add_local_field_group(array (
  'key' => 'group_58f38c0a5f08e',
  'title' => 'Widget - Masthead & Buttons',
  'fields' => array (
    array (
      'key' => 'field_58f629ad6568f',
      'label' => 'Logo',
      'name' => 'masthead_logo',
      'type' => 'select',
      'instructions' => 'Choose which logo to display',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'faac' => 'FAAC',
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
    array (
      'key' => 'field_58f38c4008fb2',
      'label' => 'Buttons',
      'name' => 'masthead_buttons',
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
      'button_label' => 'Add Button',
      'sub_fields' => array (
        array (
          'key' => 'field_58f38c6308fb3',
          'label' => 'Button Label',
          'name' => 'masthead_buttonLabel',
          'type' => 'text',
          'instructions' => 'The text to appear on the button',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_58f38c8108fb4',
          'label' => 'Linked Page',
          'name' => 'masthead_buttonLink',
          'type' => 'page_link',
          'instructions' => 'The page for the button to link to',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
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
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'widget',
        'operator' => '==',
        'value' => 'acf_widget_masthead_buttons',
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
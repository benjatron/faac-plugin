<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eb6784b3',
  'title' => '350 - Feature Row',
  'fields' => array (
    array (
      'key' => 'field_58ecf24e2a961',
      'label' => 'Headline',
      'name' => 'featureRow_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
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
      'key' => 'field_58ecf2632a962',
      'label' => 'Simulators / Solutions',
      'name' => 'featureRow_featureList',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '100',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 0,
      'max' => 0,
      'layout' => 'row',
      'button_label' => '',
      'sub_fields' => array (
        array (
          'key' => 'field_58ecf29e2a963',
          'label' => 'Simulator / Solution',
          'name' => 'featureRow_featureItem',
          'type' => 'page_link',
          'instructions' => '',
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
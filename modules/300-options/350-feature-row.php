<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eb6784b3',
  'title' => '350 - Feature Row',
  'fields' => array (
    array (
      'key' => 'field_58f75d1cf0145',
      'label' => 'Simulators/Solutions Row',
      'name' => 'featureRow',
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
      'button_label' => 'Add Row',
      'sub_fields' => array (
        array (
          'key' => 'field_58f75d53f0146',
          'label' => 'Headline',
          'name' => 'featureRow_headline',
          'type' => 'text',
          'instructions' => '',
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
          'key' => 'field_58f75d76f0147',
          'label' => 'Simulators / Solutions',
          'name' => 'featureRow_featureList',
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
          'button_label' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_58f75e25f0148',
              'label' => 'Simulator / Solution',
              'name' => 'featureRow_featureItem',
              'type' => 'post_object',
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
              'multiple' => 0,
              'return_format' => 'object',
              'ui' => 1,
            ),
          ),
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
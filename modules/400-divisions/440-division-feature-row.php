<?php

acf_add_local_field_group(array (
  'key' => 'group_590a2055b2359',
  'title' => '440 - Division Feature Row',
  'fields' => array (
    array (
      'key' => 'field_590a2055bc4fa',
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
          'key' => 'field_590a2055cd32f',
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
          'key' => 'field_590a2055cd3b7',
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
              'key' => 'field_590a2055da22d',
              'label' => 'Simulator / Solution',
              'name' => 'featureRow_featureItem',
              'type' => 'relationship_multisite',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'site' => 1,
              'filters' => array (
                0 => 'search',
                1 => 'post_type',
                2 => 'taxonomy',
              ),
              'elements' => array (
                0 => 'featured_image',
              ),
              'max' => '',
              'return_format' => 'object',
              'post_type' => array (
              ),
              'taxonomy' => array (
              ),
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
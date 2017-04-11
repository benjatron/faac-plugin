<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eba98e33',
  'title' => '370 - Category Links Block',
  'fields' => array (
    array (
      'key' => 'field_58ecf4b23c640',
      'label' => 'Category',
      'name' => 'categoryLinks_categories',
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
      'layout' => 'block',
      'button_label' => 'Add Category',
      'sub_fields' => array (
        array (
          'key' => 'field_58ecf4f33c641',
          'label' => 'Category Name',
          'name' => 'category_name',
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
          'key' => 'field_58ecf5443c642',
          'label' => 'Category Type',
          'name' => 'category_type',
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
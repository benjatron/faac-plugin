<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7ead4190d',
  'title' => '310 - Category Row',
  'fields' => array (
    array (
      'key' => 'field_58dfc6cad05f4',
      'label' => 'Category Row',
      'name' => 'categoryRow',
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
      'button_label' => 'Add Category',
      'sub_fields' => array (
        array (
          'key' => 'field_58eced911b23e',
          'label' => 'Category',
          'name' => 'categoryRow_category',
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
          'key' => 'field_58ecee041b23f',
          'label' => 'Category Type',
          'name' => 'categoryRow_categoryType',
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
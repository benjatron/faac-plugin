<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eb222f43',
  'title' => '330 - Category Feature Block',
  'fields' => array (
    array (
      'key' => 'field_58ecefd1d5e59',
      'label' => 'Category',
      'name' => 'categoryFeature',
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
      'button_label' => 'Add Category',
      'sub_fields' => array (
        array (
          'key' => 'field_58ecf081d5e5a',
          'label' => 'Content Direction',
          'name' => 'categoryFeature_direction',
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
            'ltr' => 'Left to Right',
            'rtl' => 'Right to Left',
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
        array (
          'key' => 'field_58ecf0e8d5e5b',
          'label' => 'Category',
          'name' => 'categoryFeature_category',
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
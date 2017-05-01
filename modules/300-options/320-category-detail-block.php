<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eafc06b6',
  'title' => '320 - Category Detail Block',
  'fields' => array (
    array (
      'key' => 'field_58ecee51e53a6',
      'label' => 'Categories',
      'name' => 'categoryDetail',
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
          'key' => 'field_58eceef7e53a7',
          'label' => 'Category',
          'name' => 'categoryDetail_category',
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
          'key' => 'field_58ecef6be53a8',
          'label' => 'Category Type',
          'name' => 'categoryDetail_type',
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
            'simulator' => 'Simulator',
            'solution' => 'Solution',
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
          'key' => 'field_58ecef88e53a9',
          'label' => 'Category Description',
          'name' => 'categoryDetail_description',
          'type' => 'wysiwyg',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '100',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'full',
          'media_upload' => 0,
          'delay' => 0,
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
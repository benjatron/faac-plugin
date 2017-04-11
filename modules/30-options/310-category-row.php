<?php

acf_add_local_field_group(array (
  'key' => 'group_58da7eaa88e52',
  'title' => '310 - Category Headings (2-up)',
  'fields' => array (
    array (
      'key' => 'field_58dfc3fc0be4e',
      'label' => 'Category Headings',
      'name' => 'category-headings',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => 'category-heading_2-up',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => 2,
      'max' => 2,
      'layout' => 'row',
      'button_label' => 'Add Categories',
      'sub_fields' => array (
        array (
          'key' => 'field_58dfc49f0be4f',
          'label' => 'Category',
          'name' => 'category',
          'type' => 'clone',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => 'category-heading',
            'id' => '',
          ),
          'clone' => array (
            0 => 'group_58da7ea1e866f',
          ),
          'display' => 'seamless',
          'layout' => 'block',
          'prefix_label' => 0,
          'prefix_name' => 1,
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
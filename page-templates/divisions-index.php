<?php

acf_add_local_field_group(array (
  'key' => 'group_58e3a1d2c23cb',
  'title' => 'Division Page, Index (D1)',
  'fields' => array (
    array (
      'key' => 'field_58e3a1d2c6839',
      'label' => 'Basic Slider',
      'name' => 'divisionIndex_slider',
      'type' => 'clone',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'clone' => array (
        0 => 'group_58d31322a60eb',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58e3a1d2c688e',
      'label' => 'Intro Content',
      'name' => 'divisionIndex_intro',
      'type' => 'clone',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'clone' => array (
        0 => 'group_58d32e8d672b3',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58e3a2971656d',
      'label' => 'Division Grid',
      'name' => 'divisionIndex_divisions',
      'type' => 'clone',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'clone' => array (
        0 => 'group_58da7f9e03227',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'template-division-index.php',
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
  'active' => 1,
  'description' => '',
));

?>
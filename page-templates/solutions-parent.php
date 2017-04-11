<?php

acf_add_local_field_group(array (
  'key' => 'group_58dbc87ab2641',
  'title' => 'Solutions Page, Parent (2)',
  'fields' => array (
    array (
      'key' => 'field_58dbc87ab78e1',
      'label' => 'Basic Slider',
      'name' => 'solutionsParent_slider',
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
      'key' => 'field_58dbc87ab794b',
      'label' => 'Intro Content',
      'name' => 'solutionsParent_intro',
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
      'key' => 'field_58e2b1e8c7cd2',
      'label' => 'Training Simulators / Solutions',
      'name' => 'solutionsParent_training',
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
        0 => 'group_58da7eafc06b6',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58e2b262c7cd3',
      'label' => 'Featured Simulator / Solution',
      'name' => 'solutionsParent_feature',
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
        0 => 'group_58da7eb6784b3',
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
        'value' => 'template-solution-parent.php',
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
<?php

acf_add_local_field_group(array (
  'key' => 'group_58ed23e26fa96',
  'title' => 'Simulator/Solution Description',
  'fields' => array (
    array (
      'key' => 'field_58ed246118ffa',
      'label' => 'Short Description',
      'name' => 'simulator_description',
      'type' => 'wysiwyg',
      'instructions' => 'A short description of the simulator for display throughout the site',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
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
  'location' => array (
    array (
      array (
        'param' => 'post_category',
        'operator' => '==',
        'value' => 'category:simulator',
      ),
    ),
    array (
      array (
        'param' => 'post_category',
        'operator' => '==',
        'value' => 'category:solution',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'side',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

?>
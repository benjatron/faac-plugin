<?php

acf_add_local_field_group(array (
  'key' => 'group_58e300d2064cb',
  'title' => 'Content Page, News (6)',
  'fields' => array (
    array (
      'key' => 'field_58e300d20a4da',
      'label' => 'Slider',
      'name' => 'newsContent_slider',
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
      'key' => 'field_58e300d20a5e5',
      'label' => 'Category Headings',
      'name' => 'newsContent_headings',
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
        0 => 'group_58da7ea1e866f',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58ed1a9249803',
      'label' => 'Categories',
      'name' => 'newsContent_categories',
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
        0 => 'group_58da7ead4190d',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58f117931b560',
      'label' => 'Testimonial',
      'name' => 'newsContent_testimonial',
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
        0 => 'group_58da816050824',
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
        'value' => 'template-content-news.php',
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
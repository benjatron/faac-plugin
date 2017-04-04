<?php

acf_add_local_field_group(array (
  'key' => 'group_58e399fbcc80f',
  'title' => 'Division Page, News (D4)',
  'fields' => array (
    array (
      'key' => 'field_58e399fbd2cd3',
      'label' => 'Basic Slider',
      'name' => 'division-news_slider',
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
      'key' => 'field_58e399fbd2e1d',
      'label' => 'Featured Division Links',
      'name' => 'division-news_features',
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
        0 => 'group_58da7f8abf607',
      ),
      'display' => 'group',
      'layout' => 'block',
      'prefix_label' => 0,
      'prefix_name' => 1,
    ),
    array (
      'key' => 'field_58e399fbd2e6c',
      'label' => 'Footer',
      'name' => 'division-news_footer',
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
        1 => 'group_58da81605c4c2',
        2 => 'group_58da813eaaaad',
        3 => 'group_58da8160620c4',
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
        'value' => 'template-divisions-news.php',
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
<?php

acf_add_local_field_group(array (
  'key' => 'group_58eaee2d324b4',
  'title' => 'Categories - Global Settings',
  'fields' => array (
    array (
      'key' => 'field_58eb983db4a8f',
      'label' => 'Simulators',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array (
      'key' => 'field_58eb985fb4a91',
      'label' => 'Featured Simulator',
      'name' => 'simulators_featuredPage',
      'type' => 'page_link',
      'instructions' => 'The simulator featured by default throughout the site.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'allow_archives' => 1,
      'multiple' => 0,
    ),
    array (
      'key' => 'field_58eb98b8b4a92',
      'label' => 'Link List Background Image',
      'name' => 'simulators_linkBackground',
      'type' => 'image',
      'instructions' => 'The background image to use for link lists (e.g. "Related Links")',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'w360',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_58eb98fcb4a93',
      'label' => 'Category Heading Background Image',
      'name' => 'simulators_headingBackground',
      'type' => 'image',
      'instructions' => 'The background image to use for category heading blocks',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'w360',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_58eb984cb4a90',
      'label' => 'Solutions',
      'name' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
    ),
    array (
      'key' => 'field_58eb99356141e',
      'label' => 'Featured Solution',
      'name' => 'solutions_featuredPage',
      'type' => 'page_link',
      'instructions' => 'The solution featured by default throughout the site.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'allow_archives' => 1,
      'multiple' => 0,
    ),
    array (
      'key' => 'field_58eb99346141d',
      'label' => 'Link List Background Image',
      'name' => 'solutions_linkBackground',
      'type' => 'image',
      'instructions' => 'The background image to use for link lists (e.g. "Related Links")',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'w360',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_58eb99336141c',
      'label' => 'Category Heading Background Image',
      'name' => 'solutions_headingBackground',
      'type' => 'image',
      'instructions' => 'The background image to use for category heading blocks',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'w360',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-global-settings',
      ),
    ),
  ),
  'menu_order' => 30,
  'position' => 'normal',
  'style' => 'seamless',
  'label_placement' => 'left',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

?>
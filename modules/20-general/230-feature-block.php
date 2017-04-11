<?php

acf_add_local_field_group(array (
  'key' => 'group_58d98e5b9e0f1',
  'title' => '230 - Inner Feature',
  'fields' => array (
    array (
      'key' => 'field_58daae63ca03e',
      'label' => 'Feature Blocks',
      'name' => 'featureBlock',
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
      'layout' => 'block',
      'button_label' => 'Add Block',
      'sub_fields' => array (
        array (
          'key' => 'field_58ecdf6804aaf',
          'label' => 'Content Direction',
          'name' => 'featureBlock_direction',
          'type' => 'select',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '40',
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
          'key' => 'field_58ece13b04ab2',
          'label' => 'Category',
          'name' => 'featureBlock_category',
          'type' => 'select',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '60',
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
          'key' => 'field_58ece03c04ab0',
          'label' => 'Headline',
          'name' => 'featureBlock_headline',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '100',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
        array (
          'key' => 'field_58ece05c04ab1',
          'label' => 'Body Content',
          'name' => 'featureBlock_content',
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
  'hide_on_screen' => '',
  'active' => 0,
  'description' => '',
));

?>
<?php

acf_add_local_field_group(array (
  'key' => 'group_58ffb736d5d20',
  'title' => '361 - Division Related Links',
  'fields' => array (
    array (
      'key' => 'field_58ffb736de60a',
      'label' => 'Link Column',
      'name' => 'linkColumn',
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
      'button_label' => 'Add Column',
      'sub_fields' => array (
        array (
          'key' => 'field_58ffb736ea029',
          'label' => 'Division',
          'name' => 'linkColumn_division',
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
            'faacCommercial' => 'FAAC Commercial',
            'faacMilitary' => 'FAAC Military',
            'miloRange' => 'MILO Range',
            'rti' => 'Realtime Technologies',
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
          'key' => 'field_58ffb736ea0af',
          'label' => 'Type',
          'name' => 'linkColumn_type',
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
          'key' => 'field_58ffb736ea12b',
          'label' => 'Link List',
          'name' => 'linkColumn_links',
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
          'button_label' => '',
          'sub_fields' => array (
            array (
              'key' => 'field_58ffb7370a0c7',
              'label' => 'Link Label',
              'name' => 'linkColumn_linksLabel',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
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
              'key' => 'field_58ffb7370a168',
              'label' => 'Linked Page',
              'name' => 'linkColumn_linksPage',
              'type' => 'page_link',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'post_type' => array (
                0 => 'post',
                1 => 'page',
              ),
              'taxonomy' => array (
              ),
              'allow_null' => 0,
              'allow_archives' => 1,
              'multiple' => 0,
            ),
          ),
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
<?php

acf_add_local_field_group(array (
  'key' => 'group_58f38a4a5e8d1',
  'title' => 'Widget - Newsletter Signup',
  'fields' => array (
    array (
      'key' => 'field_58f38a8517e89',
      'label' => 'Signup Label',
      'name' => 'newsletterSignup_label',
      'type' => 'text',
      'instructions' => 'Text to appear outside of the signup box',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Don\'t Miss Out:',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58f38af617e8a',
      'label' => 'Form Helper Text',
      'name' => 'newsletterSignup_placeholder',
      'type' => 'text',
      'instructions' => 'Text appearing inside the signup field',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Register Your Email for Updates',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58f38b2417e8b',
      'label' => 'Submission Email Address',
      'name' => 'newsletterSignup_email',
      'type' => 'email',
      'instructions' => 'The email address to send the form to',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'ben@designfwd.com',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'widget',
        'operator' => '==',
        'value' => 'acf_widget_newsletter_signup',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

?>
<?php
/*
Title: Units - Image, Title, Content, Button
Template: page-work
Order: 1
*/

piklist('field', array(
    'type' => 'group'
    ,'field' => 'unit_x'
    ,'label' => 'Units'
    // ,'add_more' => true
    ,'fields' => array(
       array(
        'type' => 'file'
        ,'field' => 'header_image'
        ,'label' => 'Header Background Image'
        ,'options' => array(
          'button' => 'Add Image'
        )
      )
      ,array(
        'type' => 'text'
        ,'field' => 'title'
        ,'label' => 'Title'
        ,'attributes' => array(
          'class' => 'large-text'
        )
      )
      ,array(
        'type' => 'textarea'
        ,'field' => 'content'
        ,'label' => 'Content'
        ,'attributes' => array(
          'class' => 'large-text'
        )
      )
      ,array(
        'type' => 'text'
        ,'field' => 'button_text'
        ,'label' => 'Button Text'
        ,'attributes' => array(
          'class' => 'large-text'
        )
      )
      ,array(
        'type' => 'text'
        ,'field' => 'button_url'
        ,'label' => 'Button Url'
        ,'attributes' => array(
          'class' => 'large-text'
        )
      )
    )
));





<?php

if(class_exists('CSF')) {

    $prefix = 'novena_options';

    CSF::createOptions($prefix, array(
        'menu_title' => __('Novena Options', 'novena'),
        'menu_slug' => 'novena-options',
        'framework_title' => __('Novena Options')
    ));

    CSF::createSection($prefix, array(
        'id' => 'header_section',
        'title' => __('Header Section', 'novena'),
        'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_section',
        'title' => __('Header Info', 'novena'),
        'icon'   => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'header_email',
                'title' => __('Header Email', 'novena'),
                'type' => 'text',
                'placeholder' => __('Please write email address', 'novena')
            ),
            array(
                'id' => 'header_address',
                'title' => __('Header Address', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'header_right_text',
                'title' => __('Header Right Text', 'novena'),
                'type' => 'text'
            ),
            array(
                'id' => 'header_right_number',
                'title' => __('Header Right Number', 'novena'),
                'type' => 'number'
            )
        )        
    ));

    CSF::createSection($prefix, array(
      'parent' => 'header_section',
      'title' => __('Header Style', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'header_background',
          'title' => __('Header Background', 'novena'),
          'type' => 'background',
          'output' => '.header-top-bar',
          'default' => array(
            'background-color' => '#223a66'
          )
        ),
        array(
            'id' => 'header_color',
            'title' => __('Header Color', 'novena'),
            'type' => 'color',
            'output' => '.top-bar-info li a, .list-inline-item, .top-right-bar a span',
            'default' => '#fff'
        )
      )
    ));

    CSF::createSection($prefix, array(
      'id' => 'bannar_section',
      'title' => __('Bannar Section', 'novena'),
      'icon'   => 'fas fa-rocket'
    ));

    CSF::createSection($prefix, array(
      'parent' => 'bannar_section',
      'title' => __('Bannar Info','novena'),
      'icon'   => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'bannar_subtitle',
          'title' => __('Bannar Subtitle', 'novena'),
          'type' => 'text'
        ),
        array(
          'id' => 'bannar_title',
          'title' => __('Bannar Title', 'novena'),
          'type' => 'text'
        ),
        array(
          'id' => 'bannar_desc',
          'title' => __('Bannar Description', 'novena'),
          'type' => 'textarea'
        ),
        array(
          'id' => 'bannar_btn',
          'title' => __('Bannar Button', 'novena'),
          'type' => 'link',
          'add_title' => __('Add Button', 'novena')
        ),
        array(
          'id' => 'bannar_back',
          'title' => __('Bannar Background', 'novena'),
          'type' => 'background',
          'background_color' => false,
          'output' => '.banner'
        )
      )
    ));

    CSF::createSection($prefix, array(
      'parent' => 'bannar_section',
      'title' => __('Bannar Style', 'novena'),
      'icon'   => 'fas fa-rocket',
      'fields' => array(
        array(
          'id' => 'bannar_separator',
          'title' => __('Bannar Separator', 'novena'),
          'type' => 'background',
          'default' => array(
            'background-color' => '#e12454'
          ),
          'output' => '.divider',
          'background_image' => false,
          'background_position' => false,
          'background_repeat' => false,
          'background_size' => false,
          'background_attachment' => false,
        ),
        array(
          'id' => 'bannar_substitle_color',
          'title' => __('Bannar Subtitle', 'novena'),
          'type' => 'color',
          'output' => '.letter-spacing',
          'default' => '#6F8BA4'
        ),
        array(
          'id' => 'bannar_title_color',
          'title' => __('Bannar Title', 'novena'),
          'type' => 'color',
          'output' => '.banner .block h1',
          'default' => '#223a66'
        ),
        array(
          'id' => 'bannar_desc_color',
          'title' => __('Bannar Description', 'novena'),
          'type' => 'color',
          'output' => '.banner .block p',
          'default' => '#6F8BA4'
        ),
        array(
          'id' => 'button_background',
          'title' => __('Button Background', 'novena'),
          'type' => 'background',
          'default' => array(
            'background-color' => '#e12454'
          ),
          'output' => '.btn-main-2',
          'background_image' => false,
          'background_position' => false,
          'background_repeat' => false,
          'background_size' => false,
          'background_attachment' => false,
        ),
        array(
          'id' => 'button_background_hover',
          'title' => __('Button Background Hover', 'novena'),
          'type' => 'background',
          'default' => array(
            'background-color' => '#223a66'
          ),
          'output' => '.btn-main-2:hover',
          'background_image' => false,
          'background_position' => false,
          'background_repeat' => false,
          'background_size' => false,
          'background_attachment' => false,
        ),
      )
    ));
    

}
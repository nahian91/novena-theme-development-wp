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
        'title' => __('Header Section', 'novena')
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_section',
        'title' => __('Header Info', 'novena'),
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

}
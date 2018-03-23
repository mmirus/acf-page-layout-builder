<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'APLB',
        'capability' => 'activate_plugins',
    ]);
}

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_5ab442273d356',
        'title' => 'APLB Options',
        'fields' => array(
            array(
                'key' => 'field_5ab4423e85c80',
                'label' => 'Enable APLB Post Type',
                'name' => 'enable_aplb_post_type',
                'type' => 'true_false',
                'instructions' => 'Enable the APLB custom post type.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-aplb',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => 'Options for the ACF Page Layout Builder plugin',
    ));
}

<?php

global $aplb;

acf_add_local_field_group(array(
    'key' => 'group_58a223eed5e52',
    'title' => 'ACF Page Layout Builder',
    'fields' => array(
        array(
            'key' => 'field_58a2255056fe3',
            'label' => 'Page Sections',
            'name' => 'page_section',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => 'aplb-sections',
            ),
            'collapsed' => 'field_58a225e356fe7',
            'min' => 1,
            'max' => 0,
            'layout' => 'block',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'field_58a225e356fe7',
                    'label' => 'Section Title',
                    'name' => 'title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_58a263c7e5aa0',
                    'label' => 'Main',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_58a2261956fe8',
                    'label' => 'Display Title?',
                    'name' => 'display_title',
                    'type' => 'true_false',
                    'instructions' => 'Uncheck to prevent the section title from being displayed to visitors.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 1,
                    'message' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_58a228a2d26d2',
                    'label' => 'Subtitle',
                    'name' => 'subtitle',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_58a2261956fe8',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_58a23c15acf41',
                    'label' => 'Minimum Height',
                    'name' => 'minimum_height',
                    'type' => 'text',
                    'instructions' => 'Good for large header sections. Don\'t forget vh units (e.g., 65vh = 65% of the height of the browser window).',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_58a4b1a58afa9',
                    'label' => 'Content at bottom?',
                    'name' => 'content_at_bottom',
                    'type' => 'true_false',
                    'instructions' => 'If true, the section\'s content will be placed at the bottom of the section (except on mobile). Useful for large headers, for example. Does not apply on mobile. Must set a minimum height for this to work right.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 0,
                    'message' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_58a2531ea296a',
                    'label' => 'Light Text?',
                    'name' => 'light_text',
                    'type' => 'true_false',
                    'instructions' => 'If true, use light text color. For when you have a dark background color.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 0,
                    'message' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_58a5f2ca3e17c',
                    'label' => 'Enable shadow?',
                    'name' => 'enable_shadow',
                    'type' => 'true_false',
                    'instructions' => 'Show a shadow below this section, over the top of the next section.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 0,
                    'message' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_58a263f9e5aa1',
                    'label' => 'Background',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'left',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_58a2255d56fe4',
                    'label' => 'Background Image',
                    'name' => 'background_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium_large',
                    'library' => 'all',
                    'min_width' => 1920,
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => 'jpg,jpeg',
                ),
                array(
                    'key' => 'field_58a2259a56fe5',
                    'label' => 'Background Color',
                    'name' => 'background_color',
                    'type' => 'color_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                ),
                array(
                    'key' => 'field_58a225b356fe6',
                    'label' => 'Background Color Opacity',
                    'name' => 'background_color_opacity',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 1,
                    'min' => 0,
                    'max' => 1,
                    'step' => '.05',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                ),
                array(
                    'key' => 'field_58a2547f96057',
                    'label' => 'Background Color Bottom Gradient?',
                    'name' => 'background_color_bottom_gradient',
                    'type' => 'true_false',
                    'instructions' => 'If true, the background color is not applied to the whole section, but rather as a gradient that strengthens in opacity as it reaches the bottom of the section, Background color opacity controls how opaque the gradient is at the bottom of the section.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 0,
                    'message' => '',
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_58a497b09f0f8',
                    'label' => 'Note about background gradient and opacity on mobile',
                    'name' => '',
                    'type' => 'message',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => 'If the background bottom gradient option is enabled, on small devices that and the opacity option will be ignored. Instead, the tint will cover the whole section evenly at 0.6 opacity. This is because the gradient will generally be used so that it is below the content towards the bottom of the section, giving it good contrast. On mobile, the content generally covers the whole section, and so contrast is needed over the whole section.',
                    'esc_html' => 0,
                    'new_lines' => 'wpautop',
                ),
                array(
                    'key' => 'field_58a26425e5aa2',
                    'label' => 'Content',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'left',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_58a22722cd514',
                    'label' => 'Content',
                    'name' => 'content',
                    'type' => 'flexible_content',
                    'instructions' => 'Specify the content of the page section here.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layouts' => array(
                        '58a2277b64541' => array(
                            'key' => '58a2277b64541',
                            'name' => 'wysiwyg',
                            'label' => 'WYSIWYG',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_58a227c1cd515',
                                    'label' => 'Content',
                                    'name' => 'content_wysiwyg',
                                    'type' => 'wysiwyg',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'tabs' => 'all',
                                    'toolbar' => 'full',
                                    'media_upload' => 1,
                                    'delay' => 1,
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        '58a49cdba3863' => array(
                            'key' => '58a49cdba3863',
                            'name' => 'quote',
                            'label' => 'Quote',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_58a4b0dd89580',
                                    'label' => 'Position at bottom?',
                                    'name' => 'position_at_bottom',
                                    'type' => 'true_false',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => 0,
                                    'message' => '',
                                    'ui' => 1,
                                    'ui_on_text' => '',
                                    'ui_off_text' => '',
                                ),
                                array(
                                    'key' => 'field_58a49ce3a3864',
                                    'label' => 'Quote',
                                    'name' => 'quote',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 1,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'maxlength' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                ),
                                array(
                                    'key' => 'field_58a49cfba3865',
                                    'label' => 'Citation',
                                    'name' => 'citation',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'default_value' => '',
                                    'maxlength' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        '58a5f1fc01977' => array(
                            'key' => '58a5f1fc01977',
                            'name' => 'links',
                            'label' => 'Links',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'field_58a5f20101978',
                                    'label' => 'Links',
                                    'name' => 'links',
                                    'type' => 'repeater',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'min' => 0,
                                    'max' => 0,
                                    'layout' => 'table',
                                    'button_label' => '',
                                    'collapsed' => 'field_58a5f2350197a',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'field_58a5f2350197a',
                                            'label' => 'Name',
                                            'name' => 'name',
                                            'type' => 'text',
                                            'instructions' => '',
                                            'required' => 1,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => '',
                                            'maxlength' => '',
                                            'placeholder' => '',
                                            'prepend' => '',
                                            'append' => '',
                                        ),
                                        array(
                                            'key' => 'field_58a5f20601979',
                                            'label' => 'URL',
                                            'name' => 'url',
                                            'type' => 'url',
                                            'instructions' => '',
                                            'required' => 1,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => '',
                                            'placeholder' => '',
                                        ),
                                        array(
                                            'key' => 'field_58a5f24f0197b',
                                            'label' => 'Open in new tab?',
                                            'name' => 'open_in_new_tab',
                                            'type' => 'true_false',
                                            'instructions' => '',
                                            'required' => 0,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'default_value' => 0,
                                            'message' => '',
                                            'ui' => 1,
                                            'ui_on_text' => '',
                                            'ui_off_text' => '',
                                        ),
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                    ),
                    'button_label' => 'Add Row',
                    'min' => '',
                    'max' => 1,
                ),
            ),
        ),
        array(
            'key' => 'field_58a490f9cf825',
            'label' => 'Custom CSS',
            'name' => 'custom_css',
            'type' => 'textarea',
            'instructions' => 'Use sparingly! Prefer the default styling when possible. If you commonly find you need to use this field, consider requesting either a feature enhancement or a change to default styles.

Do not include opening/closing style tags.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'new_lines' => '',
            'maxlength' => '',
            'placeholder' => '',
            'rows' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => $aplb->page_template,
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
        0 => 'the_content',
    ),
    'active' => 1,
    'description' => '',
));
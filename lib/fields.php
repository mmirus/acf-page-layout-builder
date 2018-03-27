<?php

global $aplb;

$field_group_options = array(
    'key' => 'aplb_acf',
    'title' => 'ACF Page Layout Builder',
    'fields' => array(
        array(
            'key' => 'aplb_page_sections',
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
            'collapsed' => 'aplb_section_title',
            'min' => 1,
            'max' => 0,
            'layout' => 'block',
            'button_label' => '',
            'sub_fields' => array(
                array(
                    'key' => 'aplb_section_title',
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
                    'key' => 'aplb_main_tab',
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
                    'key' => 'aplb_display_title',
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
                    'key' => 'aplb_subtitle',
                    'label' => 'Subtitle',
                    'name' => 'subtitle',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'aplb_display_title',
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
                    'key' => 'aplb_min_height',
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
                    'key' => 'aplb_custom_max_width',
                    'label' => 'Custom Max Width',
                    'name' => 'custom_max_width',
                    'type' => 'text',
                    'instructions' => 'Applies to the title and contents; use prudently. Reserve it for special content, rather than normal WYSIWYG content. If used on more than one section, try to be consistent (e.g., have one width for wide rows and use the default width for the other rows).',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
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
                array(
                    'key' => 'aplb_content_at_bottom',
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
                    'key' => 'aplb_light_text',
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
                    'key' => 'aplb_enable_shadow',
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
                    'key' => 'aplb_background',
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
                    'key' => 'aplb_background_image',
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
                    'key' => 'aplb_background_color',
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
                    'key' => 'aplb_background_color_opacity',
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
                    'key' => 'aplb_background_color_bottom_gradient',
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
                    'key' => 'aplb_mobile_background_note',
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
                    'key' => 'aplb_content_tab',
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
                    'key' => 'aplb_flex_content',
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
                        'aplb_flex_layout_wysiwyg' => array(
                            'key' => 'aplb_flex_layout_wysiwyg',
                            'name' => 'wysiwyg',
                            'label' => 'WYSIWYG',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'aplb_content_wysiwyg',
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
                        'aplb_content_quote' => array(
                            'key' => 'aplb_content_quote',
                            'name' => 'quote',
                            'label' => 'Quote',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'aplb_quote',
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
                                    'key' => 'aplb_citation',
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
                        'aplb_content_links' => array(
                            'key' => 'aplb_content_links',
                            'name' => 'links',
                            'label' => 'Links',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'aplb_links',
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
                                    'collapsed' => 'aplb_link_name',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'aplb_link_name',
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
                                            'key' => 'aplb_link_url',
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
                                            'key' => 'aplb_link_open_in_new_tab',
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
                        'aplb_content_submenu' => array(
							'key' => 'aplb_content_submenu',
							'name' => 'submenu',
							'label' => 'Submenu',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'aplb_submenu_subsection_menu',
									'label' => 'Subsection menu?',
									'name' => 'subsection_menu',
									'type' => 'true_false',
									'instructions' => 'Are these links to subsections of the current page?',
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
                                // array(
								// 	'key' => 'aplb_stick_to_top',
								// 	'label' => 'Stick to top?',
								// 	'name' => 'stick_to_top',
								// 	'type' => 'true_false',
								// 	'instructions' => 'Customize the top position of this for your theme if you have other elements sticking to the top (e.g., your menu).',
								// 	'required' => 0,
								// 	'conditional_logic' => 0,
								// 	'wrapper' => array(
								// 		'width' => '',
								// 		'class' => '',
								// 		'id' => '',
								// 	),
								// 	'message' => '',
								// 	'default_value' => 0,
								// 	'ui' => 1,
								// 	'ui_on_text' => '',
								// 	'ui_off_text' => '',
								// ),
								array(
									'key' => 'aplb_submenu_links',
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
									'collapsed' => '',
									'min' => 0,
									'max' => 0,
									'layout' => 'table',
									'button_label' => '',
									'sub_fields' => array(
										array(
											'key' => 'aplb_submenu_link_name',
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
											'placeholder' => '',
											'prepend' => '',
											'append' => '',
											'maxlength' => '',
										),
										array(
											'key' => 'aplb_submenu_link_url',
											'label' => 'URL',
											'name' => 'url',
											'type' => 'url',
											'instructions' => '',
											'required' => 1,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'aplb_submenu_subsection_menu',
														'operator' => '!=',
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
											'placeholder' => '',
										),
										array(
											'key' => 'aplb_submenu_link_new_tab',
											'label' => 'Open in new tab?',
											'name' => 'open_in_new_tab',
											'type' => 'true_false',
											'instructions' => '',
											'required' => 0,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'aplb_submenu_subsection_menu',
														'operator' => '!=',
														'value' => '1',
													),
												),
											),
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
										array(
											'key' => 'aplb_submenu_link_subsection_id',
											'label' => 'Subsection ID',
											'name' => 'subsection_id',
											'type' => 'text',
											'instructions' => 'Enter the ID of the element to which to scroll.',
											'required' => 1,
											'conditional_logic' => array(
												array(
													array(
														'field' => 'aplb_submenu_subsection_menu',
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
											'placeholder' => '',
											'prepend' => '#',
											'append' => '',
											'maxlength' => '',
										),
									),
								),
							),
							'min' => '',
							'max' => '',
						),
                        array(
                            'key' => 'aplb_accordion',
                            'name' => 'accordion',
                            'label' => 'Accordion (discouraged)',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'aplb_accordion_item_title_alignment',
                                    'label' => 'Item Title Alignment',
                                    'name' => 'item_title_alignment',
                                    'type' => 'select',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'choices' => array(
                                        'Left' => 'Left',
                                        'Center' => 'Center',
                                    ),
                                    'default_value' => array(
                                        0 => 'Left',
                                    ),
                                    'allow_null' => 0,
                                    'multiple' => 0,
                                    'ui' => 0,
                                    'ajax' => 0,
                                    'return_format' => 'value',
                                    'placeholder' => '',
                                ),
                                array(
                                    'key' => 'aplb_accordion_items',
                                    'label' => 'Accordion Items',
                                    'name' => 'accordion_items',
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
                                    'layout' => 'row',
                                    'button_label' => '',
                                    'collapsed' => 'aplb_accordion_item_title',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'aplb_accordion_item_title',
                                            'label' => 'Title',
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
                                            'key' => 'aplb_accordion_item_icon',
                                            'label' => 'Title Icon',
                                            'name' => 'title_icon',
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
                                            'preview_size' => 'thumbnail',
                                            'library' => 'all',
                                            'min_width' => '',
                                            'min_height' => '',
                                            'min_size' => '',
                                            'max_width' => '',
                                            'max_height' => '',
                                            'max_size' => '',
                                            'mime_types' => '',
                                        ),
                                        array(
                                            'key' => 'aplb_accordion_item_content',
                                            'label' => 'Content',
                                            'name' => 'content',
                                            'type' => 'wysiwyg',
                                            'instructions' => '',
                                            'required' => 1,
                                            'conditional_logic' => 0,
                                            'wrapper' => array(
                                                'width' => '',
                                                'class' => '',
                                                'id' => '',
                                            ),
                                            'tabs' => 'all',
                                            'toolbar' => 'full',
                                            'media_upload' => 1,
                                            'default_value' => '',
                                            'delay' => 0,
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
            'key' => 'aplb_custom_css',
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
);

foreach ($aplb->post_types as $post_type) {
    $field_group_options['location'][] = array(
        array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => $post_type,
        ),
    );
}

acf_add_local_field_group($field_group_options);

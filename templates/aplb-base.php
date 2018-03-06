<?php

if (post_password_required()):
    echo get_the_password_form();
else:
    echo '<style>';
    the_field('custom_css');

    if (have_rows('page_section')):
        $row_id_base = 'alp_rep_';
        $z_index = count(get_field('page_section'));
        while (have_rows('page_section')) : the_row();
            $row_id = $row_id_base . get_row_index();
            $minimum_height = get_sub_field('minimum_height');
            $background_image = get_sub_field('background_image');
            $background_color = get_sub_field('background_color');
            $background_color_opacity = get_sub_field('background_color_opacity');
            $background_color_bottom_gradient = get_sub_field('background_color_bottom_gradient');

            $background_gradient = '';
            if (!empty($background_color_bottom_gradient)) {
                if (!empty($background_color) && !empty($background_color_opacity)) {
                    $background_gradient = "linear-gradient(to bottom, rgba(0,0,0,0) 40%, " . "rgba(" . afp::hex2rgb($background_color) . ", " . $background_color_opacity . ") 100%)";
                }
            }
            ?>
            #<?= $row_id; ?> {
                <?php if (!empty($background_image)): ?>background-image: url(<?= $background_image; ?>);<?php endif; ?>
                <?php if (!empty($minimum_height)): ?>min-height: <?= $minimum_height; ?>;<?php endif; ?>
                z-index: <?= $z_index; ?>
            }
            #<?= $row_id; ?> .section-tint {
                <?php if (!empty($background_color)): ?>background: <?= $background_color; ?>;<?php endif; ?>
                <?php if (!empty($background_color_opacity)): ?>opacity: <?= ($background_color_bottom_gradient) ? '0.6' : $background_color_opacity; ?>;<?php endif; ?>

            }
            <?php if ($background_color_bottom_gradient): ?>@media (min-width: 768px) {
                #<?= $row_id; ?> .section-tint {
                    background: <?= $background_gradient; ?>;
                    opacity: 1;
                }
            }<?php endif; ?>
            <?php
            $z_index--;
        endwhile;
    endif;
    echo '</style>';

    if (have_rows('page_section')):
        $row_id_base = 'alp_rep_';
        while (have_rows('page_section')) : the_row();
            $row_id = $row_id_base . get_row_index();
            $subtitle = get_sub_field('subtitle');
            // concatenate needed page section classes
            $light_text = get_sub_field('light_text');
            $enable_shadow = get_sub_field('enable_shadow');
            $classes = ($light_text) ? 'light-text' : '';
            $classes .= ($enable_shadow) ? ' enable-shadow' : '';
            if (have_rows('content')) {
                while (have_rows('content')) {
                    the_row();
                    if (get_row_layout() == 'wysiwyg') {
                        $center_paragraphs = get_sub_field('center_paragraphs');
                        $classes .= ($center_paragraphs) ? ' center-paragraphs' : '';
                    }
                }
            }
            ?>
            <div class="aplb-page-section <?= $classes; ?>" id="<?= $row_id; ?>">
                <div class="section-tint"></div>

                <?php if (get_sub_field('content_at_bottom')): ?>
                <div class="content-bottom-wrapper">
                <?php endif; ?>
                    <div class="wrapper">
                        <div class="row">
                            <div class="span1 placeholder"></div>

                            <div class="span10 content">
                                <?php if (get_sub_field('display_title')) :
                                    $title_classes = '';
                                    $title_classes .= ($subtitle) ? 'has-subtitle' : '';
                                    ?>
                                    <h2 class="title <?php echo $title_classes; ?>"><?php the_sub_field('title'); ?></h2>
                                    <?php if (!empty($subtitle)): ?>
                                    <h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
                                    <?php endif; ?>
                                <?php endif; ?>

                                <?php
                                if (have_rows('content')):
                                    while (have_rows('content')) : the_row();
                                        switch (get_row_layout()):
                                            case 'wysiwyg':
                                                echo apply_filters('the_content', get_sub_field('content_wysiwyg', false));
                                                break;

                                            case 'quote':
                                                $citation = get_sub_field('citation');
                                                ?>
                                                <blockquote>
                                                    <?php the_sub_field('quote'); ?>
                                                    <?php if (!empty($citation)): ?>
                                                        <cite>&ndash; <?= $citation; ?></cite>
                                                    <?php endif; ?>
                                                </blockquote>
                                                <?php
                                                break;

                                            // accordion content type removed; this is here for backwards compatibility:
                                            case 'accordion':
                                                $title_alignment = (get_sub_field('item_title_alignment') === 'Center') ? 'title-center' : '';
                                                if (have_rows('accordion_items')):
                                                    ?>
                                                    <div class="accordion-wrapper <?= $title_alignment; ?>">
                                                        <?php while (have_rows('accordion_items')): the_row();
                                                            $title_icon = get_sub_field('title_icon');
                                                            ?>
                                                            <div class="accordion-item">
                                                                <div class="accordion-header">
                                                                    <h3 class="accordion-item-title">
                                                                        <?php if (!empty($title_icon)): ?>
                                                                            <img src="<?= $title_icon; ?>" />
                                                                        <?php endif; ?>
                                                                        <?php the_sub_field('title'); ?>
                                                                    </h3>
                                                                </div>
                                                                <div class="accordion-content"><?php the_sub_field('content'); ?></div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    </div>
                                                    <?php
                                                endif;
                                                break;

                                            case 'links':
                                                if (have_rows('links')):
                                                    ?>
                                                    <div class="links">
                                                        <?php	while (have_rows('links')): the_row();
                                                            $target = (get_sub_field('open_in_new_tab')) ? 'target="_blank"' : '';
                                                            ?>
                                                            <a href="<?php the_sub_field('url'); ?>" <?= $target; ?>><?php the_sub_field('name'); ?></a>
                                                        <?php endwhile; ?>
                                                    </div>
                                                    <?php
                                                endif;
                                                break;
                                        endswitch;
                                    endwhile;
                                endif;
                                ?>
                            </div>

                            <div class="span1 placeholder"></div>
                        </div>
                    </div>
                <?php if (get_sub_field('content_at_bottom')): ?>
                </div>
                <?php endif; ?>
            </div>
        <?php endwhile;
    endif;
endif;

<?php

get_header();

if (post_password_required()):
    echo get_the_password_form();
else:
   include('partials/styles.php');

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

                    <div class="content">
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
                                include('partials/' . get_row_layout() . '.php');
                            endwhile;
                        endif;
                        ?>
                    </div>

                <?php if (get_sub_field('content_at_bottom')): ?>
                </div>
                <?php endif; ?>

            </div>
        <?php endwhile;
    endif;
endif;

get_footer();

<?php
// accordion content type removed; this is here for backwards compatibility:
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

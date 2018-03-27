<?php

$subsection_menu = get_sub_field('subsection_menu');

if (have_rows('links')):
    ?>
    <div class="aplb-submenu-items <?= ($subsection_menu) ? 'aplb-submenu-subsections': ''; ?>">
        <?php while (have_rows('links')): the_row();
            $target = (get_sub_field('open_in_new_tab')) ? 'target="_blank"' : '';
            $href = ($subsection_menu) ? '#' . get_sub_field('subsection_id') : get_sub_field('url');
            ?>
            <a href="<?= $href; ?>" <?= $target; ?>><?php the_sub_field('name'); ?></a>
        <?php endwhile; ?>
    </div>
    <?php
endif;

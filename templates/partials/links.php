<?php

if (have_rows('links')):
    ?>
    <div class="aplb-links">
        <?php	while (have_rows('links')): the_row();
            $target = (get_sub_field('open_in_new_tab')) ? 'target="_blank"' : '';
            ?>
            <a href="<?php the_sub_field('url'); ?>" <?= $target; ?>><?php the_sub_field('name'); ?></a>
        <?php endwhile; ?>
    </div>
    <?php
endif;

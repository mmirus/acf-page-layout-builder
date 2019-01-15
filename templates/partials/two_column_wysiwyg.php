<?php
$col1_light_text = get_sub_field('light_text_col1');
$col2_light_text = get_sub_field('light_text_col2');
$col1_classes = ($col1_light_text) ? 'light-text' : '';
$col2_classes = ($col2_light_text) ? 'light-text' : '';
?>
<div class="aplb-col <?= $col1_classes ?>">
    <?php the_sub_field('content_wysiwyg_col1'); ?>
</div>
<div class="aplb-col <?= $col2_classes ?>">
    <?php the_sub_field('content_wysiwyg_col2'); ?>
</div>

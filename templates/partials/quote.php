<?php
$citation = get_sub_field('citation');
?>
<blockquote class="aplb-blockquote">
    <?php the_sub_field('quote'); ?>
    <?php if (!empty($citation)): ?>
        <cite>&ndash; <?= $citation; ?></cite>
    <?php endif; ?>
</blockquote>
<?php

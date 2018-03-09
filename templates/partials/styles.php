<?php
namespace APLB;

if (have_rows('page_section')):
    $aplb_styles = '';
    $aplb_mq_styles = '';
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
                $background_gradient = "linear-gradient(to bottom, rgba(0,0,0,0) 40%, " . "rgba(" . APLB::hex2rgb($background_color) . ", " . $background_color_opacity . ") 100%)";
            }
        }

        $background_image = (!empty($background_image)) ? "background-image: url($background_image);" : '';
        $minimum_height = (!empty($minimum_height)) ? "min-height: $minimum_height;" : '';
        $background_color = (!empty($background_color)) ? "background: $background_color;": '';
        $opacity = ($background_color_bottom_gradient) ? '0.6' : $background_color_opacity;
        $background_color_opacity = (!empty($background_color_opacity)) ? "opacity: $opacity;": '';

        $aplb_styles .= "
            #$row_id { $background_image $minimum_height z-index: $z_index; }
            #$row_id .section-tint { $background_color $background_color_opacity }
        ";

        if ($background_color_bottom_gradient) {
            $aplb_mq_styles .= "#$row_id .section-tint { background: $background_gradient; opacity: 1; }";
        }

        $z_index--;
    endwhile;
    ?>

    <style>
        <?= $aplb_styles; ?>

        @media (min-width: 768px) {
            <?= $aplb_mq_styles; ?>
        }

        <?php the_field('custom_css'); ?>
    </style>
    <?php
endif;

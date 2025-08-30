<?php
/* Template Name: Custom Store */
get_header(); ?>

<div class="woocommerce">
    <?php
    echo do_shortcode('[products]');
    ?>
</div>

<?php get_footer(); ?>

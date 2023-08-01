<?php
/*
 * Template Name: Home 01 Dark
 * Description: A Page Template with a Page Builder design.
 */
$foodex_redux_demo = get_option('redux_demo');
    get_header('dark'); ?>
    <?php if (have_posts()){ ?>
    <?php while (have_posts()) : the_post()?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'foodex' );
    }?></div>
<?php
    get_footer('home-dark');
?>
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bshvil
 */

?>

<section class="main__section white">
            <div class="main__section-inner">
                <div class="description">
                    <?php the_content(); ?>
                </div>
                <div class="form__wrapper">
                    <?php echo bshvil_contact_form( 'cdk_contact_settings1' ); ?>
                </div>
            </div>

</section><!-- section -->

<section class="main__section grey">

    <div class="main__section-inner">

        <?php get_template_part( 'template-parts/module', 'carousel' ); ?>

        <?php get_template_part( 'template-parts/module', 'video' ); ?>

    </div>

</section><!-- section -->

<section class="main__section white">
    <div class="main__section-inner">
        <div class="post">
            <?php
                if(get_theme_mod( 'cdk_contact_settings3', true )) :
                    $bottom_page = get_post( get_theme_mod( 'cdk_contact_settings3', true ) );
                    $content = $bottom_page->post_content;
                    $content = apply_filters( 'the_content', $content );
                    $content = str_replace( ']]>', ']]&gt;', $content );
            ?>
            <h3 class="post__title"><?php echo $bottom_page->post_title; ?></h3>
            <?php echo $content; ?>
            <a href="<?php echo get_permalink( $bottom_page->ID ); ?>" class="post__link"><?php _e( 'Read more...' ); ?></a>
            <?php endif; ?>
        </div>

        <div class="form__wrapper form__wrapper-alternate">

            <?php echo bshvil_contact_form( 'cdk_contact_settings2' ); ?>

        </div>
    </div>

</section><!-- section -->


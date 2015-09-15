<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bshvil
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class( 'main__section' ); ?>>
    <div class="main__section-inner">
        <div class="description">
            <h1 class="description__title"><?php the_title(); ?></h1>
            <?php the_post_thumbnail( 'full' ); ?>
            <?php the_content(); ?>
        </div>

        <div class="form__wrapper">
          <?php echo bshvil_contact_form( 'cdk_contact_settings1' ); ?>
        </div>

        <div class="form__wrapper">
            <?php echo bshvil_contact_form( 'cdk_contact_settings2' ); ?>
        </div>

    </div>
</section><!-- section -->
<?php $postID = ( is_page() ? $post->ID : get_option( 'page_on_front' ) ); ?>
<?php if( get_post_meta( $postID, 'cdk_bottom_category', true )) : ?>
<section class="main__section white">
    <div class="main__section-inner">
        <?php get_template_part( 'template-parts/module', 'video' ); ?>
    </div>
</section><!-- section -->
<?php endif; ?>

<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bshvil
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'news' ); ?>>
    <div class="news__avatar">
        <?php the_post_thumbnail( 'medium', '' ); ?>
    </div>
    <div class="news__text">
        <h2 class="news__title"><?php the_title(); ?></h2>
        <span class="news__date"><?php echo get_post_meta( $post->ID, 'cdk_subtitle', true ); ?></span>
        <p class="news__paragraph"><?php echo $post->post_excerpt; ?><a href="<?php the_permalink(); ?>" class="news__link"><?php _e( 'Read more...' ) ?></a></p>
    </div>
</div>



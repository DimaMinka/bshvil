<?php
/**
 * Template part for displaying a video carousel.
 *
 *
 * @package bshvil
 */

$postID = ( is_page() ? $post->ID : get_option( 'page_on_front' ) );
$categoryBottom = ( '' !=  get_post_meta( $postID, 'cdk_bottom_category', true  ) ? get_post_meta( $postID, 'cdk_bottom_category', true  ) : '' );

$slides = '';
$caruselSlides = get_posts( 'category='.$categoryBottom.'posts_per_page=-1' );

foreach ( $caruselSlides as $caruselSlide ) {

    $slides .= sprintf('
        <div id="post-%1$s" class="carousel__slide">
            <div class="carousel__slide-video">%2$s<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">%3$s</a></div>
            <a href="%4$s" class="carousel__slide-video_link">
                <h4 class="carousel__slide-title">%5$s</h4>
                <p class="carousel__slide-paragraph">%6$s</p>
            </a>
        </div>',
        $caruselSlide->ID,
        get_the_post_thumbnail( $caruselSlide->ID, 'medium', array( 'class' => 'carousel__slide-img' ) ),
        __( 'Play' ),
        get_permalink( $caruselSlide->ID ),
        $caruselSlide->post_title,
        get_post_meta( $caruselSlide->ID, 'cdk_subtitle', true )

    );
}

?>

<div class="carousel carousel-yt carousel-last">
    <h3 class="carousel__title"><?php echo get_cat_name( $categoryBottom ); ?></h3>
    <div class="owl-carousel owl-carousel-yt<?php if( !(is_home() || is_front_page()) ) echo ' divide'; ?>"><?php echo $slides; ?></div>
</div>
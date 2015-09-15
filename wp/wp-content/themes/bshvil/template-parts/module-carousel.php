<?php
/**
 * Template part for displaying a carousel.
 *
 *
 * @package bshvil
 */
$categoryTop = ( '' !=  get_post_meta( $post->ID, 'cdk_top_category', true  ) ? get_post_meta( $post->ID, 'cdk_top_category', true  ) : '' );
$categoryMiddle = ( '' !=  get_post_meta( $post->ID, 'cdk_middle_category', true  ) ? get_post_meta( $post->ID, 'cdk_middle_category', true  ) : '' );

$i = 0;
$carousels = array( $categoryTop, $categoryMiddle );

foreach ( $carousels as $carousel ) :
    $i++;
    $slides = '';
    $caruselSlides = get_posts( 'category='.$carousel.'posts_per_page=-1' );

    foreach ( $caruselSlides as $caruselSlide ) {

        $slides .= sprintf('
            <div id="post-%1$s" class="carousel__slide">
                <div class="carousel__slide-img_wrap">%2$s</div>
                <div class="carousel__slide-decription">
                    <h4 class="carousel__slide-title">%3$s</h4>
                    <p class="carousel__slide-date">%4$s</p>
                    <p class="carousel__slide-paragraph">%5$s</p>
                    <a href="%6$s" class="carousel__slide-link">%7$s</a>
                </div>
            </div>',
            $caruselSlide->ID,
            get_the_post_thumbnail( $caruselSlide->ID, 'medium', array( 'class' => 'carousel__slide-img' ) ),
            $caruselSlide->post_title,
            get_post_meta( $caruselSlide->ID, 'cdk_subtitle', true ),
            $caruselSlide->post_excerpt,
            get_permalink( $caruselSlide->ID ),
            __( 'Read more...' )

        );
    }

    ?>

    <div class="carousel carousel-<?php if( $i == 1 ) { echo 'first'; } else { echo 'second'; } ?>">
        <h3 class="carousel__title"><?php echo get_cat_name( $carousel ); ?></h3>
        <div class="owl-carousel owl-carousel-pic"><?php echo $slides; ?></div>
    </div>

<?php endforeach; ?>
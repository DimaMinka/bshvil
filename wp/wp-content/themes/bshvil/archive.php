<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bshvil
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section class="main__section white">
                <div class="main__section-inner">
                    <div class="news__wrapper">
                        <h1 class="news__title"><?php single_cat_title( '', true ); ?></h1>

                        <?php if ( have_posts() ) : ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'template-parts/content', 'search' ); ?>

                            <?php endwhile; ?>

                            <?php the_posts_navigation(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'template-parts/content', 'none' ); ?>

                        <?php endif; ?>

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

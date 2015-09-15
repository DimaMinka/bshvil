<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bshvil
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section id="post-<?php the_ID(); ?>" <?php post_class( 'main__section' ); ?>>
                <div class="main__section-inner">
                    <div class="description">
                        <h1 class="description__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bshvil' ); ?></h1>
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bshvil' ); ?></p>
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

<?php get_footer(); ?>

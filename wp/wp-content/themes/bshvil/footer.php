<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bshvil
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer site-footer" role="contentinfo">
		<div class="footer__inner">

			<div class="footer__fb_area">
				<aside class="widget footer__fb_area-inner">
                    <?php if( get_theme_mod( 'cdk_footer_settings1', true ) ) : ?>
                    <div class="fb-page"
                         data-href="<?php echo get_theme_mod( 'cdk_footer_settings1', true ); ?>"
                         data-width="275" data-height="205"
                         data-small-header="true"
                         data-adapt-container-width="true"
                         data-hide-cover="true"
                         data-show-facepile="true"
                         data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/bshvil">
                                <a href="https://www.facebook.com/bshvil">‎בשביל המחר‎</a>
                            </blockquote>
                        </div>
                    </div>
                    <?php endif; ?>
                </aside>
			</div>

			<div class="footer__links">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>

				<ul class="footer__links_socials">
					<li><a href="<?php if( get_theme_mod( 'cdk_header_2', true ) && filter_var( get_theme_mod( 'cdk_header_2', true ), FILTER_VALIDATE_EMAIL ) ) echo 'mailto:'.get_theme_mod( 'cdk_header_2', true ); ?>" class="footer__links_social footer__links_social-mail" target="_blank">Mail</a></li>
					<li><a href="<?php if( get_theme_mod( 'cdk_footer_settings2', true ) ) echo get_theme_mod( 'cdk_footer_settings2', true ); ?>" class="footer__links_social footer__links_social-yt" target="_blank">Youtube</a></li>
					<li><a href="<?php if( get_theme_mod( 'cdk_header_3', true ) ) echo get_theme_mod( 'cdk_header_3', true ); ?>" class="footer__links_social footer__links_social-in" target="_blank">LinkedIn</a></li>
					<li><a href="<?php if( get_theme_mod( 'cdk_header_4', true ) ) echo get_theme_mod( 'cdk_header_4', true ); ?>" class="footer__links_social footer__links_social-fb" target="_blank">Facebook</a></li>
				</ul>
			</div>

			<div class="footer__contacts">
				<figure class="footer__contacts_logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php if(  get_header_image() ) : echo get_header_image(); else : echo get_template_directory_uri(); ?>/images/logo.png<?php endif; ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
						<span><?php echo( get_bloginfo( 'title' ) ); ?></span>
					</a>
				</figure>
				<ul class="footer__contacts_tel">

                    <?php if( get_theme_mod( 'cdk_footer_settings3', true ) ) :
                        $phoneTop = filter_var( get_theme_mod( 'cdk_footer_settings3', true ), FILTER_SANITIZE_NUMBER_INT );
                        $contentTop = str_replace( $phoneTop, '', get_theme_mod( 'cdk_footer_settings3', true ) ); ?>
					<li><span><?php echo $contentTop; ?></span><a href="tel:<?php echo $phoneTop; ?>"><?php echo $phoneTop; ?></a></li>
                    <?php endif; ?>

                    <?php if( get_theme_mod( 'cdk_footer_settings4', true ) ) :
                        $phoneTop = filter_var( get_theme_mod( 'cdk_footer_settings4', true ), FILTER_SANITIZE_NUMBER_INT );
                        $contentTop = str_replace( $phoneTop, '', get_theme_mod( 'cdk_footer_settings4', true ) ); ?>
					<li><span><?php echo $contentTop; ?></span><a href="tel:<?php echo $phoneTop; ?>"><?php echo $phoneTop; ?></a></li>
                    <?php endif; ?>

				</ul>
				<span class="footer__contacts_copyright"><?php if( get_theme_mod( 'cdk_footer_settings5', true ) ) echo get_theme_mod( 'cdk_footer_settings5', true ); ?></span>
			</div>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

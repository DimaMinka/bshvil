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
				<aside class="widget footer__fb_area-inner"><img src="https://placeimg.com/640/480/any" alt="fb here"></aside>
			</div>

			<div class="footer__links">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>

				<ul class="footer__links_socials">
					<li><a href="#" class="footer__links_social footer__links_social-mail" target="_blank">Mail</a></li>
					<li><a href="#" class="footer__links_social footer__links_social-yt" target="_blank">Youtube</a></li>
					<li><a href="#" class="footer__links_social footer__links_social-in" target="_blank">LinkedIn</a></li>
					<li><a href="#" class="footer__links_social footer__links_social-fb" target="_blank">Facebook</a></li>
				</ul>
			</div>

			<div class="footer__contacts">
				<figure class="footer__contacts_logo">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" alt="Logotype">
						<span>Site Logo</span>
					</a>
				</figure>
				<ul class="footer__contacts_tel">
					<li><span>ענת סמסון יופה</span><a href="tel:0545608930">054-5608930</a></li>
					<li><span>משה כץ</span><a href="tel:0542280236">054-2280236</a></li>
				</ul>
				<span class="footer__contacts_copyright">2015 כל הזכויות שמורות</span>
			</div>
			
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

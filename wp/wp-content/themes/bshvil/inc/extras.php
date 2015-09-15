<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package bshvil
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bshvil_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'bshvil_body_classes' );

function bshvil_contact_form( $theme_mode ) {

    if( get_theme_mod( $theme_mode, true ) ) {
        $contact_title = '';
        $contact_form = get_theme_mod( $theme_mode, true );
        preg_match_all( '/\[contact-form-7[^\]]+title="([^"]+)"]/i', $contact_form, $matches, PREG_SET_ORDER );
        if ($matches) {
            $contact_title = $matches[0][1];
            $contact_title = explode( ' || ', $contact_title );
        }
        ?>
        <h2 class="form__title"><?php echo $contact_title[0]; ?></h2>
        <p class="form__description"><strong><?php echo $contact_title[1]; ?></strong></p>
        <p class="form__description"><?php echo $contact_title[2]; ?></p>
        <?php
        echo do_shortcode( $contact_form );
    }

}

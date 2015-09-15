<?php
/**
 * Bshvil_theme Theme Customizer - header area
 *
 * @package Bshvil_theme
 */

$i = 0;


for( $d = 1; $d <= 4; $d++ ) {

    $label[1] = ( '1' == $d ? __( 'Align left' ) : '' );
    $label[2] = ( '2' == $d ? __( 'Mail', 'bshvil' ) : '' );
    $label[3] = ( '3' == $d ? __( 'LinkedIn', 'bshvil' ) : '' );
    $label[4] = ( '4' == $d ? __( 'Facebook', 'bshvil' ) : '');

    $wp_customize->add_setting(
        'cdk_header_'.$d,
        array(
            'default' => '',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'cdk_'.$d,
            array(
                'label'      => __( 'Link URL' ).' - '.$label[$d],
                'section'    => 'title_tagline',
                'settings'   => 'cdk_header_'.$d,
                'type'       => 'text',
            )
        )
    );
}
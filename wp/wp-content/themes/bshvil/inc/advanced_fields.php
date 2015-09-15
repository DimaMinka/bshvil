<?php
/**
 * Bshvil_theme Theme Customizer - Advanced settings
 *
 * @package Bshvil_theme
 */

$wp_customize->add_panel(
    'general_settings',
    array(
        'priority' => 40,
        'theme_supports' => '',
        'title' => __('Advanced Options')
    )
);

$wp_customize->add_section(
    'contact_settings',
    array(
        'priority' => 20,
        'theme_supports' => '',
        'title' => __( 'Contact', 'contact-form-7' )
    )
);

$wp_customize->add_section(
    'footer_settings',
    array(
        'priority' => 30,
        'theme_supports' => '',
        'title' => __( 'Footer' )
    )
);

$fields = array('contact_settings', 'footer_settings' );

$i = 0;
foreach ($fields as $field) {
    $i++;

    $wp_customize->get_section( $field )->panel = 'general_settings';

    $limit_fields = ( $field == 'footer_settings' ? '5' : '3' );

    for($d = 1; $d <= $limit_fields; $d++) {

        if($field == 'footer_settings') {
            $label[1] = ( '1' == $d ? __( 'Link URL' ) . ' - ' . __( 'Likebox', 'bshvil' ) : '' );
            $label[2] = ( '2' == $d ? __( 'Link URL' ) . ' - ' . __( 'Youtube', 'bshvil' ) : '' );
            $label[3] = ( '3' == $d ? __( 'Content' ) . ' - ' . __( 'Contact', 'contact-form-7' ) : '' );
            $label[4] = ( '4' == $d ? __( 'Content' ) . ' - ' . __( 'Contact', 'contact-form-7' ) . '&nbsp;2' : '' );
            $label[5] = ( '5' == $d ? __( 'Content' ) . ' - ' . __( 'Copyright', 'bshvil' ) : '' );
            $type = 'text';
        } else {
            $label[1] = ( '1' == $d ? __( 'Contact Form', 'contact-form-7' ) . ' - ' . __( 'Top' ) : '' );
            $label[2] = ( '2' == $d ? __( 'Contact Form', 'contact-form-7' ) . ' - ' . __( 'Bottom' ) : '' );
            $label[3] = ( '3' == $d ? __( 'Select') . '&nbsp;' . __( 'Page title' ) : '' );
            $type = ( '3' == $d ? 'dropdown-pages' : 'text' );
        }
        $wp_customize->add_setting(
            'cdk_'.$field.$d,
            array(
                'default' => '',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => ''
            )
        );

        $wp_customize->add_control(
            'cdk_'.$field.$d,
            array(
                'label' => $label[$d],
                'section' => $field,
                'settings'   => 'cdk_'.$field.$d,
                'type' => $type,
            )
        );
    }

}
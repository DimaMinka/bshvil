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

$fields = array('contact_settings');

$i = 0;
foreach ($fields as $field) {
    $i++;

    $wp_customize->get_section( $field )->panel = 'general_settings';

    for($d = 1; $d <= 2; $d++) {

        $label[1] = ('1' == $d ? __( 'Contact Form', 'contact-form-7' ).' - '.__( 'Top' ) : '');
        $label[2] = ('2' == $d ? __( 'Contact Form', 'contact-form-7' ).' - '.__( 'Bottom' ) : '');

        $wp_customize->add_setting(
            'cdk_'.$field.$d,
            array(
                'default' => '',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => ''
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'cdk_'.$field.$d,
                array(
                    'label'      => $label[$d],
                    'section'    => $field,
                    'settings'   => 'cdk_'.$field.$d,
                    'type'       => 'text',
                )
            )
        );
    }

}
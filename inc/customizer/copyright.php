<?php
/**
 * Copy right customizer in footer
 * @param $wp_customize
 */

 add_action('customize_register', 'footer_copyright');

 function footer_copyright($wp_customize) {
    //  Add section
    $wp_customize->add_section('footer_copyright_section', array(
        'title' => 'Copyright footer',
        'description' => 'Write the copyright text include link etc',
        'priority' => 80
    ));

    // settings for copyright text
    $wp_customize->add_setting('footer_copyright_text');
    // add controll for that setting
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_copyright_text',
        array(
            'label' => 'Footer copyright text',
            'section' => 'footer_copyright_section',
            'setting' => 'footer_copyright_text',
            'type' => 'textarea'
        )
    ) );
 }
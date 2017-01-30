<?php
add_action( 'customize_register', 'mrvinceotheme_register_theme_customizer' );
/*
 * Register Our Custom Panel stuff in the Customiser here...
 */
function mrvinceotheme_register_theme_customizer( $wp_customize ) {
 // Create the custom panel.
 $wp_customize->add_panel( 'text_blocks', array(
 'priority' => 500,
 'theme_supports' => '',
 'title' => __( 'Text Blocks', 'mrvinceotheme' ),
 'description' => __( 'Set editable text for certain content.', 'mrvinceotheme' ),
 ) );
 // Add Custom Panel Text Section.
 $wp_customize->add_section( 'custom_panel_text' , array(
 'title' => __('Homepage Panels','mrvinceotheme'),
 'panel' => 'text_blocks',
 'priority' => 10
 ) );
 // Add Custom Panel Settings
 
// The Glyphicon Box 1:
  $wp_customize->add_setting( 'panel_text_glyph', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
    
 // The Header Text Box 1:
  $wp_customize->add_setting( 'panel_text_head_1', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
    
 // Body text Box 1:
 $wp_customize->add_setting( 'panel_text_block', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
    
        // The Glyphicon Box 2:
  $wp_customize->add_setting( 'panel_text_glyph_2', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
    
 // The Header Text Box 2:    
   $wp_customize->add_setting( 'panel_text_head_2', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
 // Body text box 2:
     $wp_customize->add_setting( 'panel_text_block_2', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
    
     // The Glyphicon Box 3:
  $wp_customize->add_setting( 'panel_text_glyph_3', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
   // The Header Text Box 3:    
   $wp_customize->add_setting( 'panel_text_head_3', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
 // Body text box 3:
     $wp_customize->add_setting( 'panel_text_block_3', array(
 'default' => __( 'default text', 'mrvinceotheme' ),
 'sanitize_callback' => 'sanitize_text'
 ) );
    
 // Add controls
 //Glyphicon Left
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_glyph',
 array(
 'label' => __( 'Glyphicon Left', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_glyph',
 'type' => 'text'
 )
 )
 );
 
 // Header Text Left
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_head_1',
 array(
 'label' => __( 'Header Text Left', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_head_1',
 'type' => 'text'
 )
 )
 );
 
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_text',
 array(
 'label' => __( 'Panel Text Left', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_block',
 'type' => 'text'
 )
 )
 );
    
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_glyph_2',
 array(
 'label' => __( 'Glyphicon Middle', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_glyph_2',
 'type' => 'text'
 )
 )
 );
    
  $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_head_2',
 array(
 'label' => __( 'Header Text Middle', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_head_2',
 'type' => 'text'
 )
 )
 );
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_text_2',
 array(
 'label' => __( 'Panel Text Middle', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_block_2',
 'type' => 'text'
 )
 )
 );
 
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_head',
 array(
 'label' => __( 'Glyphicon Right', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_glyph_3',
 'type' => 'text'
 )
 )
 );
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_head_3',
 array(
 'label' => __( 'Header Text Right', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_head_3',
 'type' => 'text'
 )
 )
 );
    
 $wp_customize->add_control( new WP_Customize_Control(
 $wp_customize,
 'custom_panel_text_3',
 array(
 'label' => __( 'Panel Text Right', 'mrvinceotheme' ),
 'section' => 'custom_panel_text',
 'settings' => 'panel_text_block_3',
 'type' => 'text'
 )
 )
 );
 // Sanitize text
 function sanitize_text( $text ) {
 return sanitize_text_field( $text );
 }
}



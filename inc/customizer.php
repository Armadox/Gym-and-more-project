<?php
function gym_customize_preview_js() {
	wp_enqueue_script( 'gym-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'gym_customize_preview_js' );

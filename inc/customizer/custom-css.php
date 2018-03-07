<?php
/**
 * Custom CSS output to customize login page.
 */

function logincust_render_styles() {
	// Enqueue stylesheet for login styles
	wp_enqueue_style( 'logincust_styles', LOGINCUST_FREE_URL . 'inc/customizer/css/customizer.css' );

	// Get plugin options array
	$options = get_option( 'login_customizer_options' );

	// Initialize empty string
	$custom_css = '';

	// Login Page Background CSS
	$custom_css .= 'body.login {';
	if ( ! empty( $options[ 'logincust_bg_image' ] ) ) {
		$custom_css .= 'background-image: url(" '.$options[ 'logincust_bg_image' ].' ");';
	}
	if ( ! empty( $options[ 'logincust_bg_color' ] ) ) {
		$custom_css .= 'background-color: '.$options[ 'logincust_bg_color' ].';';
	}
	if ( ! empty( $options[ 'logincust_bg_image_size' ] ) ) {
		if ( $options[ 'logincust_bg_image_size' ] === 'custom' ) {
			$custom_css .= 'background-size: '.$options[ 'logincust_bg_size' ].';';
		} else {
			$custom_css .= 'background-size: '.$options[ 'logincust_bg_image_size' ].';';
		}
	}
	if ( ! empty( $options[ 'logincust_bg_image_repeat' ] ) ) {
		$custom_css .= 'background-repeat: '.$options[ 'logincust_bg_image_repeat' ].';';
	}
	if ( ! empty( $options[ 'logincust_bg_image_position_x' ] ) && ! empty( $options[ 'logincust_bg_image_position_y' ] ) ) {
		$custom_css .= 'background-position: '.$options[ 'logincust_bg_image_position_x' ]. ' '.$options[ 'logincust_bg_image_position_y' ].';';
	}
	$custom_css .= '}';

	// Login Page Logo CSS
	$custom_css .= 'body.login div#login h1 a {';
		if ( ! empty( $options[ 'logincust_logo_show' ] ) && $options[ 'logincust_logo_show' ] === 1  ) {
			$custom_css .= 'display: none;';
		} else {
			if ( ! empty( $options[ 'logincust_logo' ] ) ) {
				$custom_css .= 'background-image: url(" '.$options[ 'logincust_logo' ].' ");';
			}
			if ( ! empty( $options[ 'logincust_logo_width' ] ) ) {
				$custom_css .= 'width: '.$options[ 'logincust_logo_width' ].';';
			}
			if ( ! empty( $options[ 'logincust_logo_height' ] ) ) {
				$custom_css .= 'height: '.$options[ 'logincust_logo_height' ].';';
			}
			if ( ! empty( $options[ 'logincust_logo_width' ] ) || ! empty( $options[ 'logincust_logo_height' ] ) ) {
				$custom_css .= 'background-size: '.$options[ 'logincust_logo_height' ].' '.$options[ 'logincust_logo_height' ].';';
			}
			if ( ! empty( $options[ 'logincust_logo_padding' ] ) ) {
				$custom_css .= 'padding-bottom: '.$options[ 'logincust_logo_padding' ].';';
			}
		}
	$custom_css .= '}';

	// Login Page Form CSS
	$custom_css .= '#login form#loginform {';
		if ( ! empty( $options[ 'logincust_form_bg_image' ] ) ) {
			$custom_css .= 'background-image: url(" '.$options[ 'logincust_form_bg_image' ].' ");';
		}
		if ( ! empty( $options[ 'logincust_form_bg_color' ] ) ) {
			$custom_css .= 'background-color: '.$options[ 'logincust_form_bg_color' ].';';
		}
		if ( ! empty( $options[ 'logincust_form_height' ] ) ) {
			$custom_css .= 'height: '.$options[ 'logincust_form_height' ].';';
		}
		if ( ! empty( $options[ 'logincust_form_padding' ] ) ) {
			$custom_css .= 'padding: '.$options[ 'logincust_form_padding' ].';';
		}
		if ( ! empty( $options[ 'logincust_form_radius' ] ) ) {
			$custom_css .= 'border-radius: '.$options[ 'logincust_form_radius' ].';';
		}
		if ( ! empty( $options[ 'logincust_form_shadow_spread' ] ) && ! empty( $options[ 'logincust_form_shadow' ] ) ) {
			$custom_css .= 'box-shadow: 0 1px '.$options[ 'logincust_form_shadow_spread' ].' '.$options[ 'logincust_form_shadow' ].';';
		}
	$custom_css .= '}';

	// Login Form Width CSS
	if ( ! empty( $options[ 'logincust_form_width' ] ) ) {
		$custom_css .= 'div#login {';
			$custom_css .= 'width: '.$options[ 'logincust_form_width' ].';';
		$custom_css .= '}';
	}

	// Login Page Fields CSS
	$custom_css .= '#login form#loginform .input {';
		if ( ! empty( $options[ 'logincust_field_width' ] ) ) {
			$custom_css .= 'width: '.$options[ 'logincust_field_width' ].';';
		}
		if ( ! empty( $options[ 'logincust_field_margin' ] ) ) {
			$custom_css .= 'margin: '.$options[ 'logincust_field_margin' ].';';
		}
		if ( ! empty( $options[ 'logincust_field_bg' ] ) ) {
			$custom_css .= 'background-color: '.$options[ 'logincust_field_bg' ].';';
		}
		if ( ! empty( $options[ 'logincust_field_color' ] ) ) {
			$custom_css .= 'color: '.$options[ 'logincust_field_color' ].';';
		}
	$custom_css .= '}';

	// Login Form Labels CSS
	$custom_css .= '#login form#loginform label {';
		if ( ! empty( $options[ 'logincust_field_label' ] ) ) {
			$custom_css .= 'color: '.$options[ 'logincust_field_label' ].';';
		}
	$custom_css .= '}';

	// Login Button CSS
	$custom_css .= '#login form .submit .button {';
		$custom_css .= 'height: auto;';
		if ( ! empty( $options[ 'logincust_button_bg' ] ) ) {
			$custom_css .= 'background-color: '.$options[ 'logincust_button_bg' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_padding' ] ) ) {
			$custom_css .= 'padding: '.$options[ 'logincust_button_padding' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_border_width' ] ) ) {
			$custom_css .= 'border-width: '.$options[ 'logincust_button_border_width' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_border_radius' ] ) ) {
			$custom_css .= 'border-radius: '.$options[ 'logincust_button_border_radius' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_border' ] ) ) {
			$custom_css .= 'border-color: '.$options[ 'logincust_button_border' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_shadow' ] ) && ! empty( $options[ 'logincust_button_shadow_spread' ] ) ) {
			$custom_css .= 'box-shadow: 0px 1px '.$options[ 'logincust_button_shadow_spread' ].' '.$options[ 'logincust_button_shadow' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_color' ] ) ) {
			$custom_css .= 'color: '.$options[ 'logincust_button_color' ].';';
		}
	$custom_css .= '}';

	// Login Button on Hover CSS
	$custom_css .= '#login form .submit .button:hover, #login form .submit .button:focus {';
		if ( ! empty( $options[ 'logincust_button_hover_bg' ] ) ) {
			$custom_css .= 'background-color: '.$options[ 'logincust_button_hover_bg' ].';';
		}
		if ( ! empty( $options[ 'logincust_button_hover_border' ] ) ) {
			$custom_css .= 'border-color: '.$options[ 'logincust_button_hover_border' ].';';
		}
	$custom_css .= '}';

	// Other Styling
	if ( ! empty( $options[ 'logincust_other_color' ] ) ) {
		$custom_css .= '.login #backtoblog a, .login #nav a {';	
			$custom_css .= 'color: '.$options[ 'logincust_other_color' ].';';
		$custom_css .= '}';
	}
	if ( ! empty( $options[ 'logincust_other_color_hover' ] ) ) {
		$custom_css .= '.login #backtoblog a:hover, .login #nav a:hover {';
			$custom_css .= 'color: '.$options[ 'logincust_other_color_hover' ].';';
		$custom_css .= '}';
	}

	// Custom CSS
	if ( ! empty( $options[ 'logincust_other_css' ] ) ) {
		$custom_css .= $options[ 'logincust_other_css' ];
	}

	// Hook inline styles to stylesheet
	wp_add_inline_style( 'logincust_styles', $custom_css );

}

// Hook stylesheet to login page
add_action( 'login_enqueue_scripts', 'logincust_render_styles' );

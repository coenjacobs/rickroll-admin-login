<?php

/**
 * Plugin Name: Rickroll Admin Login
 */

add_action( 'authenticate', 'rickroll_check_admin_login', 1, 2);

function rickroll_check_admin_login( $login, $username ) {
	if ( 'admin' == $username ) {
		wp_redirect( 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' );
		exit;
	}
}
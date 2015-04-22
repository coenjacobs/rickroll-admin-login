<?php

/**
 * Plugin Name: Rickroll Admin Login
 * Description: Redirects the user trying to log in with 'admin' as username, to the world famous Rickroll video on YouTube.
 * Author: Coen Jacobs
 * Author URI: http://coenjacobs.me
 * Version: 1.0
 */

add_action( 'authenticate', 'rickroll_check_admin_login', 1, 2);

function rickroll_check_admin_login( $login, $username ) {
	if ( 'admin' == $username ) {
		wp_redirect( 'https://www.youtube.com/watch?v=dQw4w9WgXcQ' );
		exit;
	}
}
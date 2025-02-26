<?php
/*
 * Enqueue external link popup scripts using SweetAlert2 and jQuery
 *
 * @see https://sweetalert2.github.io/
 */
function enqueue_external_link_popup_scripts() {
	wp_enqueue_script( 'sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), null, true );
	wp_enqueue_script( 'external-popup', __DIR__ . '/js/external-link-popup.js', array( 'jquery', 'sweetalert2' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_external_link_popup_scripts' );

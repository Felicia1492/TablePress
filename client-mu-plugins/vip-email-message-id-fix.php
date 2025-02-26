<?php

/**
 * Change the Message-ID header for emails sent by WordPress
 *
 * This is a workaround for a policy on DTIC mail servers that block all emails containing '.mil' in the Message-ID header.
 * This fixes the hostname in the Message-ID to remove '.mil' and replace it with '.wpvip.com'.
 *
 * @param PHPMailer $phpmailer The PHPMailer instance.
 * @return void
 */
function vip_email_fix_for_message_id( &$phpmailer ) {
	// Get the site URL and replace '.mil' with '.wpvip.com'.
	$site_url            = wp_parse_url( site_url(), PHP_URL_HOST );
	$updated_site_url    = str_replace( '.mil', '.wpvip.com', $site_url );

	// Set the hostname in the PHPMailer instance to the updated site URL without '.mil'.
	$phpmailer->Hostname = $updated_site_url;
}
add_action( 'phpmailer_init', 'vip_email_fix_for_message_id', PHP_INT_MAX );
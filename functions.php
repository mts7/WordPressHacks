<?php


/**
 * Redirect page to 404
 *
 * Use this before call to get_header() on pages outside of standard WordPress CMS.
 *
 * @author http://wordpress.stackexchange.com/questions/24891/redirect-restricted-page-to-404#answer-27124
 * @author Mike Rodarte
 */
function check_404_and_redirect() {
	if ( is_404() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
		get_template_part( 404 );
		exit;
	}
}

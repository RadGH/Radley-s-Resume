<?php
$filename = 'gtag.UA-2575959-16.min.js';

if ( !file_exists('ga.js') || (filemtime('ga.js') < strtotime('-7 days')) ) {
	// update gtag.js if it doesn't exist or is some days old.
	// gtag url: https://www.googletagmanager.com/gtag/js?id=UA-2575959-16
	$new = file_get_contents('https://www.googletagmanager.com/gtag/js?id=UA-2575959-16');
	
	if ( $new ) {
		
		if ( strpos($new, 'analytics.js') !== false ) {
			$new_analytics = file_get_contents('https://www.google-analytics.com/analytics.js');
			if ( $new_analytics ) {
				if ( file_put_contents( 'analytics.js', $new_analytics ) ) {
					$new = str_replace( 'https://www.google-analytics.com/analytics.js', 'https://radleysustaire.com/resume/analytics.js', $new );
				}
			}
		}
		
		file_put_contents( $filename, $new );
	}
}

return $filename;
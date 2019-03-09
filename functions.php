<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! isset( $content_width ) ) {
	$content_width = 800; // pixels
}

require get_template_directory() . '/includes/hooks/general.php';
require get_template_directory() . '/includes/elementor/init.php';

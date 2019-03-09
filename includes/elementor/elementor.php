<?php

final class DG_Elementor {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'init' ) );
	}

	/**
	 * Initialize the plugin
	 */
	public function init() {

		if ( ! did_action( 'elementor/loaded' ) ) {
			error_log('DG: Elementor not found.');
			return;
		}
		require_once( 'init.php' );
	}
}
new DG_Elementor();

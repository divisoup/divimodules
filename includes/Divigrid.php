<?php

class DSP_Divigrid extends DiviExtension {

	/**
	 * The gettext domain for the extension's translations.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
    protected function _enqueue_debug_bundles() {
        // Frontend Bundle
        $site_url       = wp_parse_url( get_site_url() );
        $hot_bundle_url = "http://localhost:3000/static/js/frontend-bundle.js";

        wp_enqueue_script( "{$this->name}-frontend-bundle", $hot_bundle_url, $this->_bundle_dependencies['frontend'], $this->version, true );

        if ( et_core_is_fb_enabled() ) {
            // Builder Bundle
            $hot_bundle_url = "http://localhost:3000/static/js/builder-bundle.js";

            wp_enqueue_script( "{$this->name}-builder-bundle", $hot_bundle_url, $this->_bundle_dependencies['builder'], $this->version, true );
        }
    }
	public $gettext_domain = 'dsp-divigrid';

	/**
	 * The extension's WP Plugin name.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $name = 'divigrid';

	/**
	 * The extension's version
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * DSP_Divigrid constructor.
	 *
	 * @param string $name
	 * @param array  $args
	 */
	public function __construct( $name = 'divigrid', $args = array() ) {
		$this->plugin_dir     = plugin_dir_path( __FILE__ );
		$this->plugin_dir_url = plugin_dir_url( $this->plugin_dir );

		parent::__construct( $name, $args );
	}
}

new DSP_Divigrid;

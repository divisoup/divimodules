<?php

class DSP_HelloWorld extends ET_Builder_Module {

	public $slug       = 'dsp_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'divisoup.com',
		'author'     => 'Michelle Nunan',
		'author_uri' => 'divisoup.com',
	);

	public function init() {
		$this->name = esc_html__( 'Divi Grid', 'dsp-divigrid' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'dsp-divigrid' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'dsp-divigrid' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DSP_HelloWorld;

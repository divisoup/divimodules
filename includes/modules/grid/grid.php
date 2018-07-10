<?php

class DSP_HelloWorld extends ET_Builder_Module {

	public $slug       = 'dsp_grid';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'divisoup.com',
		'author'     => 'Michelle Nunan',
		'author_uri' => 'divisoup.com',
	);

	public function init() {
        $this->child_slug       = 'dsp_grid_item';
        $this->child_item_text  = esc_html__( 'Grid Item', 'dsp-divigrid' );
		$this->name = esc_html__( 'Divi Grid', 'dsp-divigrid' );
        $this->settings_modal_toggles  = array(
            // Content tab's slug is "general"
            'general'  => array(
                'toggles' => array(
                    'main_content' => esc_html__( 'Define Grid', 'dsp-divigrid' ),
                ),
            ),
        );
	}

	public function get_fields() {
		return array(
			'title' => array(
				'label'                 => esc_html__( 'Title', 'dsp-divigrid' ),
				'type'                  => 'text',
				'option_category'       => 'basic_option',
				'description'           => esc_html__( 'Title entered here will appear inside the module.', 'dsp-divigrid' ),
				'toggle_slug'           => 'main_content',
			),
            'num_rows' => array(
                'default'               => '0',
                'label'                 => esc_html__( 'Number of Rows', 'dsp-divigrid' ),
                'type'                  => 'range',
                'range_settings'        => array (
                    'min'               => '1',
                    'max'               => '6'
                ),
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter in desired number of rows', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'num_cols' => array(
                'default'               => '0',
                'label'                 => esc_html__( 'Number of Columns', 'dsp-divigrid' ),
                'type'                  => 'range',
                'range_settings'        => array (
                    'min'               => '1',
                    'max'               => '6'
                ),
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter in desired number of columns', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'height' => array(
                'label'                 => esc_html__( 'Height', 'dsp-divigrid' ),
                'type'                  => 'text',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter grid height', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'grid_gap' => array(
                'label'                 => esc_html__( 'Grid Gap', 'dsp-divigrid' ),
                'type'                  => 'text',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter space between columns & rows', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'show_lb' => array(
                'default'               => 'off',
                'label'                 => esc_html__( 'Show Lightbox', 'dsp-divigrid' ),
                'type'                  => 'yes_no_button',
                'option_category'       => 'basic_option',
                'affects'               => array(
                    'grid_height2',
                    'grid_height3',
                ),
                'options'               => array(
                    'on'  => esc_html__( 'On', 'dsp-divigrid' ),
                    'off' => esc_html__( 'Off', 'dsp-divigrid' ),
                ),
                'description'           => esc_html__( 'Show images in lightbox', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'grid_height2' => array(
                'label'                 => esc_html__( 'Height', 'dsp-divigrid' ),
                'type'                  => 'text',
                'depends_show_if'       => 'on',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter grid height', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'grid_height3' => array(
                'label'                 => esc_html__( 'Height', 'dsp-divigrid' ),
                'type'                  => 'text',
                'depends_show_if'       => 'on',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter grid height', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
//            'content' => array(
//                'label'                 => esc_html__( 'Content', 'dsp-divigrid' ),
//                'type'                  => 'tiny_mce',
//                'option_category'       => 'basic_option',
//                'description'           => esc_html__( 'Content entered here will appear inside the module.', 'dsp-divigrid' ),
//                'toggle_slug'           => 'main_content',
//            ),
//            'color' => array(
//                'label'                 => esc_html__( 'Color', 'dsp-divigrid' ),
//                'type'                  => 'color',
//                'option_category'       => 'basic_option',
//                'toggle_slug'           => 'main_content',
//                'description'           => esc_html__( 'Choose the color', 'dsp-divigrid' ),
//            ),
//            'date' => array(
//                'label'                 => esc_html__( 'Date', 'dsp-divigrid' ),
//                'type'                  => 'date_picker',
//                'option_category'       => 'basic_option',
//                'toggle_slug'           => 'main_content',
//                'description'           => esc_html__( 'Choose the date', 'dsp-divigrid' ),
//            ),
//            'font_icon' => array(
//                'label'                 => esc_html__( 'Icon', 'dsp-divigrid' ),
//                'type'                  => 'select_icon',
//                'option_category'       => 'basic_option',
//                'class'                 => array( 'et-pb-font-icon' ),
//                'toggle_slug'           => 'main_content',
//                'description'           => esc_html__( 'Choose an icon to display with your blurb.', 'dsp-divigrid' ),
//            ),
//            'title2' => array(
//                'label'                 => esc_html__( 'Title', 'dsp-divigrid' ),
//                'type'                  => 'text',
//                'option_category'       => 'basic_option',
//                'description'           => esc_html__( 'Title entered here will appear inside the module.', 'dsp-divigrid' ),
//                'tab_slug'              => 'Test',
//                'toggle_slug'           => 'input',
//            ),
		);
	}

    public function get_advanced_fields_config() {
        return array(
            'fonts' => array(
                'header' => array(
                    'css'          => array(
                        'main'      => "%%order_class%% h2, %%order_class%% h1, %%order_class%% h3, %%order_class%% h4, %%order_class%% h5, %%order_class%% h6",
                        'important' => 'all',
                    ),
                    'header_level' => array(
                        'default' => 'h2',
                    ),
                    'label'        => esc_html__( 'Title', 'simp-simple' ),
                ),
            ),
        );
    }

    function get_row_string() {
	    $row_string = '';
	    $rows = intval($this->props['num_rows']);
	    for($i=0; $i<$rows; $i++) {
	        $row_string .= 'auto ';
        }
        return $row_string;
    }

    function get_col_string() {
        $col_string = '';
        $cols = intval($this->props['num_cols']);
        for($i=0; $i<$cols; $i++) {
            $col_string .= 'auto ';
        }
        return $col_string;
    }

	public function render( $attrs, $content = null, $render_slug ) {
	    if ( '' !==$this->props['num_rows'] ) {
	        ET_Builder_Element::set_style( $render_slug, array (
	                'selector'      =>'%%order_class%% .main',
                    'declaration'   => sprintf(
                    'grid-template-rows: %1$s;',
                    $this->get_row_string()
                   ),
                )
	        );
	    }
        if ( '' !==$this->props['num_cols'] ) {
            ET_Builder_Element::set_style( $render_slug, array (
                    'selector'      =>'%%order_class%% .main',
                    'declaration'   => sprintf(
                        'grid-template-columns: %1$s;',
                        $this->get_col_string()
                    ),
                )
            );
        }
        if ( '' !==$this->props['height'] ) {
            ET_Builder_Element::set_style( $render_slug, array (
                    'selector'      =>'%%order_class%% .main',
                    'declaration'   => sprintf(
                        'height: %1$s;',
                        esc_attr($this->props['height'])
                    ),
                )
            );
        }
		return sprintf( '<div class="main">%1$s</div>', $this->content );
	}
}

new DSP_HelloWorld;

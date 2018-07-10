<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 10/07/2018
 * Time: 16:23
 */
class ETL_Grid_Item extends ET_Builder_Module {
    public $vb_support = 'on';
    public function init()
    {
        $this->slug = 'dsp_grid_item';
        $this->type = 'child';
        $this->name  = esc_html__( 'Grid Item', 'dsp-divigrid' );
        $this->advanced_setting_title_text = esc_html__('New Grid Item', 'dsp-divigrid');
        $this->settings_text = esc_html__( 'Grid Settings', 'dsp-divigrid' );
    }
    public function get_settings_modal_toggles() {
        return array (
            'general'   => array(
                'toggles'   => array(
                    'main_content'  => esc_html__('Define Item', 'dsp-divigrid'),
                    'content'       => esc_html__('Define Content', 'dsp-divigrid'),
                    'button'        => esc_html__('Button', 'dsp-divigrid')
                ),
            ),
        );
    }

    public function get_fields(){
        return array (
            'rows_span' => array(
                'default'               => '0',
                'label'                 => esc_html__( 'Rows to Span', 'dsp-divigrid' ),
                'type'                  => 'range',
                'range_settings'        => array (
                    'min'               => '1',
                    'max'               => '6'
                ),
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter in desired number of rows.', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'cols_span' => array(
                'default'               => '0',
                'label'                 => esc_html__( 'Columns to Span', 'dsp-divigrid' ),
                'type'                  => 'range',
                'range_settings'        => array (
                    'min'               => '1',
                    'max'               => '6'
                ),
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Enter in desired number of columns.', 'dsp-divigrid' ),
                'toggle_slug'           => 'main_content',
            ),
            'title' => array(
                'label'                 => esc_html__( 'Title', 'dsp-divigrid' ),
                'type'                  => 'text',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Title entered here will appear inside the module.', 'dsp-divigrid' ),
                'toggle_slug'           => 'content',
            ),
            'content' => array(
                'label'                 => esc_html__( 'Content', 'dsp-divigrid' ),
                'type'                  => 'tiny_mce',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Title entered here will appear inside the module.', 'dsp-divigrid' ),
                'toggle_slug'           => 'content',
            ),
            'button_text' => array(
                'label'                 => esc_html__( 'Button Text', 'dsp-divigrid' ),
                'type'                  => 'text',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Add button text or leave blank for no button.', 'dsp-divigrid' ),
                'toggle_slug'           => 'button',
            ),
            'button_url' => array(
                'label'                 => esc_html__( 'Button URL', 'dsp-divigrid' ),
                'type'                  => 'text',
                'option_category'       => 'basic_option',
                'description'           => esc_html__( 'Add the URL for the button.', 'dsp-divigrid' ),
                'toggle_slug'           => 'button',
            ),
            'button_url_new_window'     => array(
                'default'               => 'off',
                'default_on_front'      => true,
                'label'                 => esc_html__( 'URL opens', 'dsp-divigrid' ),
                'type'                  => 'select',
                'option_category'       => 'configuration',
                'options'               => array(
                    'off'   => esc_html__('In the same window', 'dsp-divigrid'),
                    'on'    => esc_html__('In new window', 'dsp-divigrid'),
                ),
                'description'           => esc_html__( 'Choose whether your link opens in a new window or not.', 'dsp-divigrid' ),
                'toggle_slug'           => 'button',
            ),
        );
    }
    public function render( $attrs, $content = null, $render_slug ) {
        $title = $this->props['title'];
        $content = $this->props['content'];
        if ( '' !==$this->props['rows_span'] ) {
            ET_Builder_Element::set_style( $render_slug, array (
                    'selector'      =>'%%order_class%%',
                    'declaration'   => sprintf(
                        'grid-row-end: span %1$s;',
                        $this->props['rows_span']
                    ),
                )
            );
        }
        if ( '' !==$this->props['cols_span'] ) {
            ET_Builder_Element::set_style( $render_slug, array (
                    'selector'      =>'%%order_class%%',
                    'declaration'   => sprintf(
                        'grid-column-end: span %1$s;',
                        $this->props['cols_span']
                    ),
                )
            );
        }

        return sprintf( '<div class="item"></div>' );
    }

}

new ETL_Grid_Item;
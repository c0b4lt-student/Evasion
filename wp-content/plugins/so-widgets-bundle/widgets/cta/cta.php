<?php
/*
Widget Name: Call To Action
Description: Insert a title, subtitle, and button. Get visitors moving in the right direction.
Author: SiteOrigin
Author URI: https://siteorigin.com
Documentation: https://siteorigin.com/widgets-bundle/call-action-widget/
*/

class SiteOrigin_Widget_Cta_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'sow-cta',
			__( 'SiteOrigin Call To Action', 'so-widgets-bundle' ),
			array(
				'description' => __( 'Insert a title, subtitle, and button. Get visitors moving in the right direction.', 'so-widgets-bundle' ),
				'help' => 'https://siteorigin.com/widgets-bundle/call-action-widget/'
			),
			array(

			),
			false ,
			plugin_dir_path( __FILE__ )
		);
	}

	/**
	 * Initialize the CTA Widget.
	 */
	function initialize() {
		// This widget requires the Button Widget.
		if ( ! class_exists( 'SiteOrigin_Widget_Button_Widget' ) ) {
			SiteOrigin_Widgets_Bundle::single()->include_widget( 'button' );
		}
		$this->register_frontend_styles(
			array(
				array(
					'sow-cta-main',
					plugin_dir_url( __FILE__ ) . 'css/style.css',
					array(),
					SOW_BUNDLE_VERSION
				)
			)
		);
		$this->register_frontend_scripts(
			array(
				array(
					'sow-cta-main',
					plugin_dir_url( __FILE__ ) . 'js/cta' . SOW_BUNDLE_JS_SUFFIX . '.js',
					array( 'jquery' ),
					SOW_BUNDLE_VERSION
				)
			)
		);
	}

	function get_widget_form() {
		return array(

			'title' => array(
				'type' => 'text',
				'label' => __( 'Title', 'so-widgets-bundle' ),
			),

			'sub_title' => array(
				'type' => 'text',
				'label' => __( 'Subtitle', 'so-widgets-bundle' )
			),

			'design' => array(
				'type' => 'section',
				'label' => __( 'Design', 'so-widgets-bundle' ),
				'fields' => array(
					'background_color' => array(
						'type' => 'color',
						'label' => __( 'Background color', 'so-widgets-bundle' ),
						'default' => '#f8f8f8'
					),
					'border_color' => array(
						'type' => 'color',
						'label' => __( 'Border color', 'so-widgets-bundle' ),
						'default' => '#e3e3e3',
					),
					'title_color' => array(
						'type' => 'color',
						'label' => __( 'Title color', 'so-widgets-bundle' ),
					),
					'subtitle_color' => array(
						'type' => 'color',
						'label' => __( 'Subtitle color', 'so-widgets-bundle' ),
					),
					'button_align' => array(
						'type' => 'select',
						'label' => __( 'Button align', 'so-widgets-bundle' ),
						'default' => 'right',
						'options' => array(
							'left' => __( 'Left', 'so-widgets-bundle' ),
							'right' => __( 'Right', 'so-widgets-bundle' ),
						)
					)
				)
			),

			'button' => array(
				'type' => 'widget',
				'class' => 'SiteOrigin_Widget_Button_Widget',
				'label' => __( 'Button', 'so-widgets-bundle' ),
			),

		);
	}

	function get_less_variables( $instance ) {
		if ( empty( $instance ) || empty( $instance['design'] ) ) {
			return array();
		}

		return array(
			'border_color' => $instance['design']['border_color'],
			'background_color' => $instance['design']['background_color'],
			'title_color'      => $instance['design']['title_color'],
			'subtitle_color'   => $instance['design']['subtitle_color'],
			'button_align' => $instance['design']['button_align'],
		);
	}

	function modify_child_widget_form( $child_widget_form, $child_widget ) {
		unset( $child_widget_form['design']['fields']['align'] );
		return $child_widget_form;
	}

	function get_form_teaser() {
		if ( class_exists( 'SiteOrigin_Premium' ) ) return false;
		return sprintf(
			__( 'Get more font customization options with %sSiteOrigin Premium%s', 'so-widgets-bundle' ),
			'<a href="https://siteorigin.com/downloads/premium/?featured_addon=plugin/cta" target="_blank" rel="noopener noreferrer">',
			'</a>'
		);
	}
}

siteorigin_widget_register('sow-cta', __FILE__, 'SiteOrigin_Widget_Cta_Widget');

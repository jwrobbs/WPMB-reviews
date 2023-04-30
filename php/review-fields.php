<?php
/**
 * Add fields to the review post type
 *
 * @package wpmb_reviews
 */

namespace WPMB_Reviews\PHP;

defined( 'ABSPATH' ) || exit;

/**
 * Register the fields
 *
 * @return void
 */
function register_review_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {

		acf_add_local_field_group(
			array(
				'key'                   => 'group_644e6b80c143f',
				'title'                 => 'Project fields',
				'fields'                => array(
					array(
						'key'               => 'field_644e6e180c593',
						'label'             => 'Product details',
						'name'              => '',
						'aria-label'        => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'left',
						'endpoint'          => 1,
					),
					array(
						'key'               => 'field_644e6b81878f8',
						'label'             => 'Product name',
						'name'              => 'product_name',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_644e6d5660cb0',
						'label'             => 'Product Description',
						'name'              => 'product_description',
						'aria-label'        => '',
						'type'              => 'textarea',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'rows'              => '',
						'placeholder'       => '',
						'new_lines'         => '',
					),
					array(
						'key'               => 'field_644e6d7660cb1',
						'label'             => 'Product link',
						'name'              => 'product_link',
						'aria-label'        => '',
						'type'              => 'url',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_644e6d8360cb2',
						'label'             => 'Affiliate link',
						'name'              => 'affiliate_link',
						'aria-label'        => '',
						'type'              => 'url',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
					),
					array(
						'key'               => 'field_644e6ea40c597',
						'label'             => 'Price',
						'name'              => 'price',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_644e6eac0c598',
						'label'             => 'Price date',
						'name'              => 'price_date',
						'aria-label'        => '',
						'type'              => 'date_picker',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_644e6ea40c597',
									'operator' => '!=empty',
								),
							),
						),
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'display_format'    => 'F j, Y',
						'return_format'     => 'F j, Y',
						'first_day'         => 0,
					),
					array(
						'key'               => 'field_644e6e3b0c594',
						'label'             => 'Review details',
						'name'              => '',
						'aria-label'        => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'left',
						'endpoint'          => 0,
					),
					array(
						'key'               => 'field_644e6e540c595',
						'label'             => 'Review summary',
						'name'              => 'review_summary',
						'aria-label'        => '',
						'type'              => 'textarea',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'rows'              => '',
						'placeholder'       => '',
						'new_lines'         => '',
					),
					array(
						'key'               => 'field_644e6e8c0c596',
						'label'             => 'Review quote',
						'name'              => 'review_quote',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'maxlength'         => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_644e712d09e50',
						'label'             => 'Review score and bullets',
						'name'              => '',
						'aria-label'        => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'placement'         => 'left',
						'endpoint'          => 0,
					),
					array(
						'key'               => 'field_644e714009e51',
						'label'             => 'Product impact score',
						'name'              => 'product_impact_score',
						'aria-label'        => '',
						'type'              => 'number',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '33',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'min'               => -5,
						'max'               => 5,
						'placeholder'       => '',
						'step'              => 1,
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_644e716c09e52',
						'label'             => 'Product value score',
						'name'              => 'product_value_score',
						'aria-label'        => '',
						'type'              => 'number',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '33',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'min'               => -5,
						'max'               => 5,
						'placeholder'       => '',
						'step'              => 1,
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_644e717809e53',
						'label'             => 'Product Ease of use score',
						'name'              => 'product_ease_of_use_score',
						'aria-label'        => '',
						'type'              => 'number',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '33',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'min'               => -5,
						'max'               => 5,
						'placeholder'       => '',
						'step'              => 1,
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_644e753afd9d1',
						'label'             => 'Pros',
						'name'              => 'pros',
						'aria-label'        => '',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'table',
						'pagination'        => 0,
						'min'               => 0,
						'max'               => 0,
						'collapsed'         => '',
						'button_label'      => 'Add Row',
						'rows_per_page'     => 20,
						'sub_fields'        => array(
							array(
								'key'               => 'field_644e7543fd9d2',
								'label'             => 'Pro text',
								'name'              => 'pro_text',
								'aria-label'        => '',
								'type'              => 'text',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'maxlength'         => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'parent_repeater'   => 'field_644e753afd9d1',
							),
						),
					),
					array(
						'key'               => 'field_644e718d09e54',
						'label'             => 'Cons',
						'name'              => 'cons',
						'aria-label'        => '',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'table',
						'pagination'        => 0,
						'min'               => 0,
						'max'               => 0,
						'collapsed'         => '',
						'button_label'      => 'Add Row',
						'rows_per_page'     => 20,
						'sub_fields'        => array(
							array(
								'key'               => 'field_644e71ee8528c',
								'label'             => 'Cons text',
								'name'              => 'cons_text',
								'aria-label'        => '',
								'type'              => 'text',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'maxlength'         => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'parent_repeater'   => 'field_644e718d09e54',
							),
						),
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_category',
							'operator' => '==',
							'value'    => 'category:review',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			)
		);
	}
}
add_action( 'acf/init', __NAMESPACE__ . '\register_review_fields' );


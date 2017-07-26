<?php

/**
 * Created by PhpStorm.
 * User: scottcox
 * Date: 18/04/2017
 * Time: 20:02
 */

namespace ScoutKillers\Classes;

class ACF
{

	static public function register_acf_featured_video()
	{
		if (function_exists("register_field_group")) {
			register_field_group([
				'id'         => 'acf_featured-video',
				'title'      => 'Featured Video',
				'fields'     => [
					[
						'key'            => 'field_58e17c2910292',
						'label'          => 'Release Date',
						'name'           => 'release_date',
						'type'           => 'date_picker',
						'required'       => 1,
						'date_format'    => 'dd/mm/yy',
						'display_format' => 'dd/mm/yy',
						'first_day'      => 1,
					],
					[
						'key'           => 'field_59791194f3567',
						'label'         => 'Embed Code',
						'name'          => 'embed_code',
						'type'          => 'text',
						'required'      => 1,
						'default_value' => '',
						'placeholder'   => '',
						'prepend'       => 'https://youtube.com/embed/',
						'append'        => '',
						'formatting'    => 'html',
						'maxlength'     => '',
					],
					[
						'key'           => 'field_597911e0f3568',
						'label'         => 'Spotify Link',
						'name'          => 'spotify_link',
						'type'          => 'text',
						'default_value' => '',
						'placeholder'   => '',
						'prepend'       => '',
						'append'        => '',
						'formatting'    => 'html',
						'maxlength'     => '',
					],
					[
						'key'           => 'field_59791204f3569',
						'label'         => 'iTunes Link',
						'name'          => 'itunes_link',
						'type'          => 'text',
						'default_value' => '',
						'placeholder'   => '',
						'prepend'       => '',
						'append'        => '',
						'formatting'    => 'html',
						'maxlength'     => '',
					],
					[
						'key'           => 'field_5979120ef356a',
						'label'         => 'Soundcloud Link',
						'name'          => 'soundcloud_link',
						'type'          => 'text',
						'default_value' => '',
						'placeholder'   => '',
						'prepend'       => '',
						'append'        => '',
						'formatting'    => 'html',
						'maxlength'     => '',
					],
				],
				'location'   => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'featured_video',
							'order_no' => 0,
							'group_no' => 0,
						],
					],
				],
				'options'    => [
					'position'       => 'normal',
					'layout'         => 'no_box',
					'hide_on_screen' => [
					],
				],
				'menu_order' => 0,
			]);
		}

	}

	static public function register_acf_video()
	{

		if (function_exists("register_field_group")) {

			register_field_group([
				'id'         => 'acf_video',
				'title'      => 'Video',
				'fields'     => [
					[
						'key'           => 'field_58e17ba410291',
						'label'         => 'Embed Code',
						'name'          => 'embed_code',
						'type'          => 'text',
						'required'      => 1,
						'default_value' => '',
						'placeholder'   => '',
						'prepend'       => 'https://youtube.com/embed/',
						'append'        => '',
						'formatting'    => 'html',
						'maxlength'     => '',
					],
				],
				'location'   => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'video',
							'order_no' => 0,
							'group_no' => 0,
						],
					],
				],
				'options'    => [
					'position'       => 'normal',
					'layout'         => 'no_box',
					'hide_on_screen' => [
					],
				],
				'menu_order' => 0,
			]);
		}
	}

	static public function register_acf_template_archive_page()
	{

		if (function_exists("register_field_group")) {

			// Adds ACF for declaring a custom archive page.
			$choices = get_post_types();
			foreach ($choices as &$choice) {
				$choice = ucfirst($choice);
			}

			register_field_group([
				'id'         => 'acf_template-archive-page',
				'title'      => 'Template: Archive Page',
				'fields'     => [
					[
						'key'           => 'field_58b4a228c1daa',
						'label'         => 'Post Type',
						'name'          => 'post_type',
						'type'          => 'select',
						'instructions'  => 'Enter a post type slug. This will be the archive page for that slug.',
						'required'      => 1,
						'choices'       => $choices,
						'default_value' => '',
						'allow_null'    => 0,
						'multiple'      => 0,
					],
				],
				'location'   => [
					[
						[
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'templates/template-archive-page.blade.php',
							'order_no' => 0,
							'group_no' => 0,
						],
					],
				],
				'options'    => [
					'position'       => 'normal',
					'layout'         => 'no_box',
					'hide_on_screen' => [
					],
				],
				'menu_order' => 0,
			]);
		}
	}
}
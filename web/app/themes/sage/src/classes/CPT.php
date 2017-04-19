<?php
/**
 * Created by PhpStorm.
 * User: scottcox
 * Date: 18/04/2017
 * Time: 20:18
 */

namespace ScoutKillers\Classes;


class CPT
{
	static public function register_video()
	{
		register_post_type('video',
			[
				'labels'      => [
					'name'          => __('Videos'),
					'singular_name' => __('Video'),
				],
				'public'      => true,
				'has_archive' => true,
				'supports'    => [
					'title',
					'thumbnail',
				],
			]
		);
	}

	static public function register_photos()
	{
		register_post_type('photos',
			[
				'labels'      => [
					'name'          => __('Photos'),
					'singular_name' => __('Photo'),
				],
				'public'      => true,
				'has_archive' => true,
				'supports'    => [
					'title',
					'thumbnail',
					'editor',
				],
			]
		);
	}
}
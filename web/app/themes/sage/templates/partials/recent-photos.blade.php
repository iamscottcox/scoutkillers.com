<?php
$args = [
	'post_type'  => 'photos',
	'post_count' => 8,
];

$query = new WP_Query($args);

$imagesToDisplay = [];

while ($query->have_posts()) {
	$query->the_post();
	$images = get_post_galleries_images();
	if (count($imagesToDisplay, COUNT_RECURSIVE) <= 8) {
		foreach ($images as $imageList) {
			foreach ($imageList as $image) {
				$title = get_the_title();
				if (!array_key_exists($title, $imagesToDisplay)) {
					$imagesToDisplay[$title] = [];
				}
				array_unshift($imagesToDisplay[$title], $image);
			}
		}
	}
}
?>

@if($query->have_posts())
	<section class="recent-photos">
		<div class="container">
			<div class="flex-container">
				@foreach($imagesToDisplay as $title => $gallery)
					@foreach($gallery as $imgSrc)
						@include('components.image_photo-tile', [
							'imgSrc' => $imgSrc,
							'imgAlt' => $title,
						])
					@endforeach
				@endforeach
			</div>
		</div>
	</section>
@endif
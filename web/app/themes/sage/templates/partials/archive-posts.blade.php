<!-- START: archive-posts.blade.php -->
<?php
$post_type = get_post_type();

$component = 'cards.standard-card';

if (strpos($post_type, 'photo') !== false || strpos($post_type, 'image') !== false) {
	$component = 'images.photo-tile_text-overlay';
}
?>


@if (have_posts())
	<div class="container">
		<div class="row">
			@while(have_posts()) @php(the_post())
			<div class="col-sm-4">
				@include('components.' . $component, [
					'imgSrc' => get_the_post_thumbnail_url(),
					'title' => get_the_title(),
					'href' => get_the_permalink(),
				])
			</div>
			@endwhile
		</div>
	</div>
@endif

@php (wp_reset_query())
<!-- END: archive-posts.blade.php -->

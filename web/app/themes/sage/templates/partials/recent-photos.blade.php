<?php
$args = [
	'post_type'  => 'photos',
	'post_count' => 3,
];
$index = 1;

$query = new WP_Query($args);
?>

@if($query->have_posts())
	<section class="recent-photos scroll-reveal">
		<div class="container">
			<h3 class="feature-title">Recent Photos</h3>
			@while($query->have_posts()) @php($query->the_post())
			<div class="row">
				<div class="col-12">
					@if($index % 2 !== 0)
						@include('components.images.photo-floating-panel', [
							'imgSrc' => get_the_post_thumbnail_url(),
							'href' => get_the_permalink(),
							'title' => get_the_title(),
						])
					@else
						@include('components.images.photo-floating-panel-reverse', [
						'imgSrc' => get_the_post_thumbnail_url(),
							'href' => get_the_permalink(),
							'title' => get_the_title(),
						])
					@endif
				</div>
				@php($index++)
			</div>
			@endwhile
		</div>
	</section>
@endif
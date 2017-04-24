<?php
$args = [
	'post_type'  => 'photos',
	'post_count' => 3,
];

$query = new WP_Query($args);
?>

@if($query->have_posts())
	<section class="recent-photos scroll-reveal">
		<div class="container">
			<h3 class="feature-title">Recent Photos</h3>
			<div class="row">
				@while($query->have_posts()) @php($query->the_post())
				<div class="col-sm-4">
					@include('components.images.photo-tile_text-overlay', [
						'imgSrc' => get_the_post_thumbnail_url(),
						'href' => get_the_permalink(),
						'title' => get_the_title(),
					])
				</div>
				@endwhile
			</div>
		</div>
	</section>
@endif
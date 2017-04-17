<?php

$args = [
	'post_type'  => 'image',
	'post_count' => 8,
];

$query = new WP_Query($args);

?>

@if($query->have_posts())
	<section class="recent-photos">
		<div class="container">
			<h1>Recent Photos</h1>
			<div class="row">
				@while($query->have_posts()) @php($query->the_post())
					<div class="col-sm-4">
						@include('components.image-card_text-overlay', [
							'title' => get_the_title(),
							'imgSrc' => get_the_post_thumbnail_url(),
						])
					</div>
				@endwhile
			</div>
		</div>
	</section>
@endif
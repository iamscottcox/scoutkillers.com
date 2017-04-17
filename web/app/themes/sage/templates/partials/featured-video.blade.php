<?php
$args = [
	'post_type'      => 'video',
	'posts_per_page' => 1
];

$query = new WP_Query($args);
?>

@if($query->have_posts())
	<section class="featured-video scroll-reveal">
		<div class="container">
			@while($query->have_posts()) @php($query->the_post())
			@include('components.youtube-embed')
			@endwhile
		</div>
	</section>
@endif
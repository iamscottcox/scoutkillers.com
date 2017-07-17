<?php
$today = time();

$release_date = get_field('release_date');
$release_date = substr($release_date,6,4)."-".substr($release_date,3,2)."-".substr($release_date,0,2);
$release_date = strtotime($release_date);

$out_now = $release_date - $today <= 0 ? true : false;
?>

<p class="h1 feature-title">{{ get_the_title() }}</p>
<iframe src="https://www.youtube.com/embed/{{ get_field('embed_code') }}"
		frameborder="0"
		allowfullscreen></iframe>
@if($out_now)
	<p class="h1 text-center">OUT NOW</p>
	@else
	<p class="h1 text-center">{{ get_field('release_date') }}</p>
@endif

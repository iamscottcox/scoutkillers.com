<?php

use ScoutKillers\Classes\Songkick;

$songkick = new Songkick();

$gigs = $songkick->getUpcomingDates();

?>

@if (!empty($gigs))
	<section class="gig-dates scroll-reveal">
		<div class="container">
			<h1 class="feature-title">SHOWS</h1>
			@foreach($gigs as $gig)
				@include('components/gig-date', [
					'venue' => $gig['venue'],
					'date' => $gig['date'],
					'link' => $gig['link']
				])
			@endforeach
		</div>
</section>
@endif

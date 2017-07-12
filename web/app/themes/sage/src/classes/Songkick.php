<?php
/**
 * Created by PhpStorm.
 * User: scottcox
 * Date: 04/05/2017
 * Time: 23:23
 */

namespace ScoutKillers\Classes;


class Songkick
{

	private $apiKey = 'BQKGIlrJYzWm75Gu';

	public function getUpcomingDates($artistId = '3686296')
	{
		// Gets the data from the SongKick API.
		$songkickUrl = 'http://api.songkick.com/api/3.0/artists/' . $artistId . '/calendar.json?apikey=' . $this->apiKey;
		$data = json_decode(file_get_contents($songkickUrl), true);

		// Formats the data to a more reusable format.
		$gigs = [];

		foreach ($data['resultsPage']['results']['event'] as $event) {
			$gig = [];
			$gig['venue'] = $event['venue']['displayName'] . ', ' . $event['location']['city'];
			$gig['link'] = $event['uri'];
			$gig['date'] = date("F j, Y", strtotime($event['start']['date']));
			$gigs[] = $gig;
		}

		return $gigs;
	}

}
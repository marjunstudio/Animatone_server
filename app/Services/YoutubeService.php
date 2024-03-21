<?php
namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

class YouTubeService
{
	protected $client;

	public function __construct()
	{
		$this->client = new Google_Client();
		$this->client->setDeveloperKey(config('services.youtube.api_key'));
	}

	public function getVideoData($id)
	{
		$youtube = new Google_Service_YouTube($this->client);
		try {
			$videoResponse = $youtube->videos->listVideos('snippet', ['id' => $id]);

			$item = $videoResponse->items[0];

			return array(
				'title' => $item["snippet"]["title"],
				'channel' => $item["snippet"]["channelTitle"]
			);

		} catch (\Exception $e) {
			return array(
				'title' => 'データが取得できませんでした',
				'channel' => 'データが取得できませんでした'
			);
		}
	}
}
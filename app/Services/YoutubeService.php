<?php

namespace App\Services;

use GuzzleHttp\Client;

class YouTubeService
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.youtube.api_key');
    }

    public function searchVideos($query)
    {
        $client = new Client();
        $url = "https://www.googleapis.com/youtube/v3/search";

        $params = [
            'key' => $this->apiKey,
            'q' => $query,
            'type' => 'video',
            'part' => 'id,snippet',
            'maxResults' => 1,
        ];

        $response = $client->get($url, ['query' => $params]);

        return json_decode($response->getBody(), true);
    }
}
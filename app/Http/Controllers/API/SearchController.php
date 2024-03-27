<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Composer;
use App\Models\Music;

// use App\Services\YouTubeService;

class SearchController extends Controller
{
    public function getMusics()
    {
        $musics = Music::with('composer')->get();
        return response()->json($musics);
    }
    public function getComposers()
    {
        $composers = Composer::select('id', 'name')->get();
        return response()->json($composers);
    }

    public function getCategories()
    {
        $categories = [
            'category1' => 'マーチ',
            'category2' => '課題曲',
            'category3' => 'ポップス',
        ];
        return response()->json($categories);
    }

    private $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.youtube.api_key');
    }

    public function fetchVideos(Request $request)
    {
        $query = $request->input('q');
        $type = $request->input('type', 'video');
        $maxResults = $request->input('maxResults', 1);

        $url = "https://www.googleapis.com/youtube/v3/search";

        $params = [
            'key' => $this->apiKey,
            'q' => $query,
            'type' => $type,
            'part' => 'id, snippet',
            'maxResults' => $maxResults,
        ];

        $response = Http::get($url, $params);

        if ($response->successful()) {
            $searchResults = $response->json();
            return response()->json($searchResults);
        } else {
            return response()->json(['error' => 'Failed to fetch search results'], $response->status());
        }
    }
}

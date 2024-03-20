<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\YouTubeService;


class SearchController extends Controller
{
    public function getComposers()
    {
        $composers = [
            'composer1' => '作曲者1',
            'composer2' => '作曲者2',
            'composer3' => '作曲者3',
            'composer4' => '作曲者4',
        ];
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

    public function searchVideos(Request $request, YouTubeService $youTubeService)
    {
        $query = $request->input('query');
        $videos = $youTubeService->searchVideos($query);

        return response()->json($videos);
    }
}

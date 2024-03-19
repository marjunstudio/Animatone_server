<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


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

    public function search(Request $request)
    {
        $searchParams = $request->all();
        Log::info('Search params:', $searchParams);
        
        // ここに検索処理を実装

        return response()->json([
            'message' => 'Search request received.',
            'params' => $searchParams,
        ]);
    }
}

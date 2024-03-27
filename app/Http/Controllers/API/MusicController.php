<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function search(Request $request)
    {
        $title = $request->input('title');
        $composerId = $request->input('composer');

        $query = Music::query();

        if($title) {
            $query->where('title', 'like', "%$title%");
        }

        if($composerId) {
            $query->where('composer_id', $composerId);
        }

        $musics = $query->with('composer')->get();

        return response()->json(['items' => $musics]);
    }
}

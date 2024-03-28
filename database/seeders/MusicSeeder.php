<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Music;

class MusicSeeder extends Seeder
{
    public function run()
    {
        $musics = [
            [
                'title' => '三つのジャポニスム',
                'description' => '',
                'composer_id' => 1,
            ],
            [
                'title' => '五月の風',
                'description' => '',
                'composer_id' => 1,
            ],
            [
                'title' => 'シンフォニエッタ',
                'description' => '',
                'composer_id' => 2,
            ],
            [
                'title' => 'ラッキードラゴン ～第五福竜丸の記憶～',
                'description' => '',
                'composer_id' => 2,
            ],
            [
                'title' => '大いなる約束の大地〜チンギス・ハーン',
                'description' => '',
                'composer_id' => 3,
            ],
            [
                'title' => 'ソング・アンド・レジェンド',
                'description' => '',
                'composer_id' => 3,
            ],
            [
                'title' => 'The Seventh Night of July（たなばた）',
                'description' => '',
                'composer_id' => 4,
            ],
            [
                'title' => '静かの海',
                'description' => '',
                'composer_id' => 4,
            ],
        ];

        foreach ($musics as $music) {
            Music::create($music);
        }
    }
}

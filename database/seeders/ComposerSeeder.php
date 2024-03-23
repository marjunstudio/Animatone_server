<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Composer;

class ComposerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $composers = [
            [
                'name' => '真島俊夫',
                'furigana' => 'ましまとしお',
            ],
            [
                'name' => '福島弘和',
                'furigana' => 'ふくしまひろかず',
            ],
            [
                'name' => '鈴木英史',
                'furigana' => 'すずきえいじ',
            ],
            [
                'name' => '酒井格',
                'furigana' => 'さかいいたる',
            ],
        ];
    
        foreach ($composers as $composer) {
            Composer::create($composer);
        }
    }
}

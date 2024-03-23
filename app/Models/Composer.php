<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{

    protected $table = 'composers';
    
    protected $fillable = ['name', 'furigana'];

    // TODO:Musicモデル作成後、コメント解除
    // public function musics()
    // {
    //     return $this->hasMany(Music::class);
    // }
}
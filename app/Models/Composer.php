<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    protected $table = 'composers';

    protected $fillable = ['name', 'furigana'];

    public function musics()
    {
        return $this->hasMany(Music::class);
    }
}
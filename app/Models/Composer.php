<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    protected $table = 'composers';

    protected $guarded = ['id'];

    public function musics()
    {
        return $this->hasMany(Music::class);
    }
}
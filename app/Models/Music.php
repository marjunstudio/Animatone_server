<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'musics';
    
    protected $guarded = ['id'];

    public function composer()
    {
        return $this->belongsTo(Composer::class);
    }
}

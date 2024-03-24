<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'musics';
    
    protected $fillable = ['title', 'description', 'composer_id'];

    public function composer()
    {
        return $this->belongsTo(Composer::class);
    }
}

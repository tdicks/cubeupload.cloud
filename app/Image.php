<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

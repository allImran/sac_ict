<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
     protected $fillable = ['user_id', 'album_id' , 'title', 'artist', 'lyricist', 'audio'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function album()
    {
        return $this->belongsTo( 'App\Album', 'album_id');
    }
}
